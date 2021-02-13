<?php
    session_start();
    include_once 'databaseConfig.php';
    if(isset($_SESSION['userId'])){
        $id = $_SESSION['userId'];
        $sql="DELETE FROM users WHERE idUsers='$id'";

        if($sql){
            header("Location: ../index.php?deleteuser=success");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    }
?>