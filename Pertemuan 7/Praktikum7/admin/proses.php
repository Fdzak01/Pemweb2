<?php
require_once 'koneksi.php';

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username =? AND password =?";
    $user = $dbh->prepare($query);
    $user->execute([$username, $password]);

    $count = $user->rowCount();
    if($count > 0){
        session_start();
        $_SESSION['user'] = $user->fetch();
        header("location: index.php");
    }else{
        header("location: login.php");
    }
  }

?>