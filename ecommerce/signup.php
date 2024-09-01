<?php
include "config.php";
if(!$conn){
    header("location:signup.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/reg.css">
</head>
<body>
        <!-- NAVBAR -->
    <nav>
            <a href="index.html"><img src="images/logo.png" alt="" width="130px"></a>
    </nav>
    <div class="box">
<?php
if(isset($_POST["continue"])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $sql="SELECT * FROM `users` WHERE `email`='$email'";
    $res=mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        echo '<h5 class="head">User with this email already exists</h5>';
    }
    else if ($cpass==$pass){
       $sql=" INSERT INTO `users` ( `user_name`, `email`, `password`) VALUES ( '$name', '$email', '$pass')";
       $res=mysqli_query($conn, $sql);  
       if($res){
        echo '<h5 class="head"> Registered Successfully</h5>';
       }
       else{
        echo '<h5>Query Failed!</h5>';
       }
    }
    else {
        echo '<h5 class="head">Password did not matched</h5>';
    }   
}
?>
    <div class="container">
        
<form class="form" method="post"  action="signup.php" id="CreateAccount">
    <h1 class="form__title">Create Account</h1>
    <div class="form__message form__message--error"></div>
    <div class="form__input-group">
        <input type="text" class="form__input" autofocus placeholder="Username" name="name" required>
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="email" class="form__input" autofocus placeholder="Email Address" name="email" required>
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Password" name="password" required>
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder=" Confirm Password" name="cpassword" required>
        <div class="form__input-error-message"></div>
    </div>
   <input class="form__button" type="submit" name="continue">
    <p class="form__text">
        Already have an acccount?<a href="login.php" id="linkLogin" class="form__link">Sign in </a>
    </p>
</form> 
</div>
</div>
</body>
</html>