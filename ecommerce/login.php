<?php
include "config.php";
if(!$conn){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>    
    <link rel="stylesheet" href="style/reg.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav>
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
    </nav>
    <?php
    if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
        
        header("location:index.php");
        session_start();

        $row=mysqli_fetch_assoc($select_users);
        $_SESSION['id']=$row['user_id'];
    }
    else{
        echo'<h1 class="head"> Worng Email OR Password </h1>';
         }
}
?>
    <div class="box">
    <div class="container">
        <form class="form form--hidden" method="post" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus name="email" placeholder="Email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus name="pass" placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="login">Continue</button>
  
            <p class="form__text">
               Don't have an account? <a class="form__link" href="signup.php" id="linkCreateAccount"> Create account </a>
            </p>

        

    </div>
</div>
</body>
</html>