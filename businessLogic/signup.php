<?php
if (isset($_POST['register-btn'])){
    require 'databaseConfig.php';

    $username = $_POST['register-username'];
    $email = $_POST['register-email'];
    $password = $_POST['register-password'];
    $passwordconfirm = $_POST['register-password-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordconfirm)){
        header("Location: ../register.php?error=emptyfields&register-username=".$username."&register-email=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.php?error=invalidusernameemail");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?error=invalidmail&register-username=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.php?error=invalidusername&register-email=".$email);
        exit();
    }
    else if($password !== $passwordconfirm){
        header("Location: ../register.php?error=passwordcheck&register-username=".$username."&register-email=".$email);
        exit();
    }
    else{

        $sql = "SELECT uidUsers FROM  users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: ../register.php?error=usertaken&email=".$email);
                exit();
            }
            else{

                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, roleUsers) VALUES (?, ?, ?, 0)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                }
                else{

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else{
    header("Location: ../register.php");
    exit();
}