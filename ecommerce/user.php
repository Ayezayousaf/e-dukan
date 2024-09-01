<?php
include "config.php";
session_start();
$userid = $_SESSION['id'];

if(!isset($userid)){
   header('location:login.php');
};
if(isset($_POST["update"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    mysqli_query($conn, "UPDATE `users` SET `user_name` = '$name', `email` = '$email', `password` = '$pass'
    WHERE `users`.`user_id` = $userid");
}

$result= mysqli_query($conn,"SELECT * FROM `users`  WHERE user_id=$userid " );
// if(mysqli_num_rows($result)>0){
    while ($row= mysqli_fetch_assoc($result)){ 
        $namee=$row ['user_name'];
        $mail=$row ['email'] ;
        $pswd=$row ['password']; }
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/user.css">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <title>User Profile</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="box">
        <div>
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
        </div>
        <div class="menu mb">
            <a href="cart.php"><img src="images/cart.png" alt="" width="25px" height="25px"></a>
            <a href="login.php"><img src="images/account.png" alt="" width="25px" height="25px"></a>
        </div>
    </nav>
<div class="user">
<div class="container">

<h1 class="heading">Name :</h1>
<h3><?php echo $namee?></h3>

<h1  class="heading">Email :</h1>
<h3><?php echo $mail ?></h3>

<h1  class="heading">Password :</h1>
<h3><?php echo $pswd ?></h3>

</div>

<div class="container">
<form class="form" method="post" >
    <div class="form__input-group">
        <input type="text" class="form__input" autofocus placeholder=" Update Your Username" name="name" required>
    </div>
    <div class="form__input-group">
        <input type="email" class="form__input" autofocus placeholder="Update Your Email Address" name="email" required>
    </div>
    <div class="form__input-group">
        <input type="passward" class="form__input" autofocus placeholder="Update Your Password" name="password" required>
    </div>
    <input class="form__button" type="submit" name="update">
</form>
    </div>
</div>