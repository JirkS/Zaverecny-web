<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpMailer/src/Exception.php';
require '../phpMailer/src/PHPMailer.php';
require '../phpMailer/src/SMTP.php';

include 'DBC.php';

if (empty($_POST["email"]) || empty($_POST["password"])) {
    header('Location: /web/home.php');
    DBC::closeConnection();
    exit();
}

verifyUser($_POST["email"], $_POST["password"]);

function verifyUser($email, $password){
    $connection = DBC::getConnection();
    $statement = $connection->prepare("SELECT first_name, last_name, pass FROM users WHERE email = ?");
    $statement->bind_param("s", $email);
    $statement->execute();
    $result = $statement->get_result();
    session_start();
    if($result->num_rows > 0 && $statement->num_rows <= 1){
        $user = $result->fetch_all()[0];
        if(password_verify($password, $user[2])){
            $_SESSION["first_name"] = $user[0];
            $_SESSION["last_name"] = $user[1];
            header("Location: /web/home.php");
            DBC::closeConnection();
            return;
        } else {
            $fileName = "userFailedLogIn.json";
            $checkEmailExistNum = 0;
            if(filesize("userFailedLogIn.json") == 0){
                $record = array(
                    "email" => $email,
                    "numberOfFailedLogIn" => 1,
                    "message" => "Someone is trying to get into your acount!"
                );
                $firstRecord = array($record);
                $dataToSave = $firstRecord;
            } else {
                $json = file_get_contents($fileName);
                $jsonData = json_decode($json, true);

                $i = 0;
                foreach($jsonData as $user) {
                    if($user['email'] == $email) {
                        $checkEmailExistNum = $user['numberOfFailedLogIn'];
                        unset($jsonData[$i]);
                        break;
                    }
                    $i++;
                }

                if($checkEmailExistNum > 0) {
                    $record = array(
                        "email" => $email,
                        "numberOfFailedLogIn" => $checkEmailExistNum + 1,
                        "message" => "Someone is trying to get into your acount!"
                    );
                } else {
                    $record = array(
                        "email" => $email,
                        "numberOfFailedLogIn" => 1,
                        "message" => "Someone is trying to get into your acount!"
                    );
                }
                array_splice($jsonData, $i, 0, array($record));
                $dataToSave = $jsonData;
            }
            file_put_contents($fileName, json_encode($dataToSave));

            if($checkEmailExistNum > 3 && $checkEmailExistNum % 4 == 0) {
                $mail = new PHPMailer(true);

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'node10mailer@gmail.com';
                $mail->Password = 'rmvsjybxtpplzhtg';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom = 'node10mailer@gmail.com';
                $mail->FromName = 'OREARIA';
                $mail->addAddress($email);

                $mail->isHTML(true);

                $mail->Subject = "Security alert";
                $mail->Body = "Hello, it looks like someone is trying to break your password to your account.";

                /*$mail->send();*/

                if (!$mail->Send())
                {
                  echo "Error: $mail->ErrorInfo";
                }
                else
                {
                  echo "Message Sent!";
                }
            }
        }
    }
    $_SESSION["error"] = "Invalid login";
    header("Location: /web/login.html");
    DBC::closeConnection();
}
?>