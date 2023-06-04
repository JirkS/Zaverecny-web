<?php

include 'DBC.php';

if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["age"]) || empty($_POST["country"]) || empty($_POST["email"]) || !str_contains($_POST["email"], '@') ||empty($_POST["password"]) || empty($_POST["password2"])) {
    header('Location: /web/home.php');
    DBC::closeConnection();
    exit();
}

if(insertUser($_POST["first_name"], $_POST["last_name"], $_POST["age"], $_POST["country"], $_POST["email"], $_POST["password"], $_POST["password2"])) {
    header('Location: /web/login.html');
}else {
    header('Location: /web/register.html');
}

function insertUser($first_name, $last_name, $age, $country, $email, $password, $password2): bool
{
    if(checkEmail($email)) {
        if($password === $password2 && $age > 0 && $age < 120){
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $connection = DBC::getConnection();
            $statement = $connection->prepare("INSERT INTO Users (first_name, last_name, age, country, email, pass) VALUES (?, ?, ?, ?, ?, ?)");
            $statement->bind_param("ssisss", $first_name, $last_name, $age, $country, $email, $pass);
            return $statement->execute();
            DBC::closeConnection();
        }
        return false;
    }
    return false;
}

function checkEmail($email): bool {
    $connection = DBC::getConnection();
    $statement = $connection->prepare("SELECT * FROM users where email = '$email'");
    $statement->execute();
    $result = $statement->get_result();
    $usersEmail = $result->fetch_all()[0];
    if($usersEmail > 0){
        return false;
    }
    return true;
}
?>