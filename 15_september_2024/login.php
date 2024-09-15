<?php
require_once "dbconfig.php";

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $usertype = $_POST['usertype'];
}
if($usertype=1){
    $sql = $db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
    if($sql->num_rows){
        $_SESSION['email'] = $email;
        $_SESSION['usertype'] = $usertype;
        header("location:dashboard.php");
    }
}
if($usertype=2){
    $sql = $db->query("SELECT * FROM doctors WHERE docEmail = '$email' AND password = '$password'");
    if($sql->num_rows){
        $_SESSION['email'] = $email;
        $_SESSION['usertype'] = $usertype;
        header("location:dashboard.php");
    }
}
if($usertype=3){
    $sql = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if($sql->num_rows){
        $_SESSION['email'] = $email;
        $_SESSION['usertype'] = $usertype;
        header("location:dashboard.php");
    }
}

// if($usertype==3){

// }
?>