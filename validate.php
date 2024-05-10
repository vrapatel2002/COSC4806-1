<?php

session_start();

$validate_username = 'vratik';
$validate_password = 'password';

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if($validate_username == $username && $validate_password == $password){
  header('Location: /index.php');
  
}else{

  if(!isset($_SESSION['failed_attempt'])){
    $_SESSION['failed_attempt'] = 1;
  }else{
    $_SESSION['failed_attempt']++;
  }
  echo "This is unsuccessfule attempt number: ".$_SESSION['failed_attempt'];
}
?>