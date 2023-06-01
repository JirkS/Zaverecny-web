<?php
include 'DBC.php';

if (empty($_POST["email"]) || empty($_POST["password"])) {
    header('Location: /index.php');
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
            if(!isset($_SESSION['numOfFailed'])) {
                $_SESSION['numOfFailed'] = 0;
            }
            header("Location: /web/index.php");
            DBC::closeConnection();
            return;
        }
    }
    $_SESSION["error"] = "Invalid login";
    if(!isset($_SESSION['numOfFailed'])) {
        $_SESSION['numOfFailed'] = 1;
    } else {    
        $_SESSION['numOfFailed']++;
    }
    /*echo $_SESSION['numOfFailed'];*/
    if($_SESSION['numOfFailed'] % 3 == 0) {
        $fileName = "userFailedLogIn.json";
        $record = array(
            "email" => $email,
            "numberOfFailedLogIn" => $_SESSION['numOfFailed'],
            "message" => "Someone is trying to get into your acount!"
        );

        if(filesize("userFailedLogIn.json") == 0){
            $firstRecord = array($record);
            $dataToSave = $firstRecord;
        } else {
            $json = json_decode(file_get_contents($fileName), true);
            array_push($json, $record);
            $dataToSave = $json;
        }

        file_put_contents("userFailedLogIn.json", json_encode($dataToSave));
    }
    header("Location: /web/login.html");
    DBC::closeConnection();
}
?>