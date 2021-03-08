<?php

include "db.php";




 if (isset($_POST['reg_user'])) {
                if (register($_POST['username'],$_POST['email'], $_POST['password'])) {
                   // header("location: register.php?s=1");
                    header("Location: Account.html");
                    exit;
                } else {
                    header("location: register.php?s=0");
                    exit;
                }
 }elseif (isset($_POST['lg_user'])) {
                if (login($_POST['username'], $_POST['password'])) {
                  //  header("location: login.php?s=1");
                    header("Location: Account.html");
                    exit;
                } else {
                    header("location: login.php?s=0");
                    exit;
                }
            }
 
    
function isUserExists($username)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    return $stmt->rowCount();
}

function register($username,$email, $password)
{
    global $pdo;
    if (isUserExists($username)) {
        return false;
    }
    $sql = "INSERT INTO users (username,email, password) VALUES (:username,:email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':username'=>$username,':email' => $email, ':password' => $password]);
    return $stmt->rowCount();
}

function login($username, $password)
{
    global $pdo;
    if (!isUserExists($username)) {
        return false;
    }
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email'=>$email,':username' => $username, ':password' => $password]);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $_SESSION['login'] = $result->id;
    return true;
}


?>