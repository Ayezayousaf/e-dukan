<?php
include "config.php";

session_start();
$userid = $_SESSION['id'];
if(!$userid){
  header("location:login.php");
}
$sql="SELECT * FROM `products`  WHERE user_id=$userid";
$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
}
  $sum =0;
$sql="SELECT * FROM `products`  WHERE user_id=$userid";
$r=mysqli_query($conn, $sql);

  while ($st= mysqli_fetch_assoc($r)){       
    $sum  += $st['price'];
  }
?>

<?php

if(isset($_POST['submit'])){

  $fname =$_POST['fname'];
  $address =$_POST['address'];
  $city =$_POST['city'];
  $cnumber =$_POST['c_number'];
  $ex =date("y-m-d" , strtotime($_POST['ex_date']));
  $cvv = $_POST['cvv'];
  
  $sqli= "INSERT INTO `order` (`u_id`,`name`, `address`, `city`,`c_number`, `ex_date`, `cvv`, `total_price`)
  VALUES ('$userid','$fname', '$address', '$city', '$cnumber','$ex', '$cvv','$sum');";
    $result=mysqli_query($conn, $sqli);
    $dsql="DELETE FROM `products`  WHERE user_id=$userid";
    mysqli_query($conn, $dsql);    
    header("location:success.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment and Shipping Info</title>
  <link rel="stylesheet" href="style/billing.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="box">
        <div class="logo mb">
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
        </div>
        <div class="search">
            <!-- <input type="text" placeholder="Search....."> -->
            <!-- <a href=""><img src="/images/search.png" width="35px" alt=""></a> -->
        </div>
        <div class="menu">
            <a href="cart.php"><img src="images/cart.png" alt="" width="25px" height="25px"></a>
            <a href="user.php"><img src="images/account.png" alt="" width="25px" height="25px"></a>
            <a href="logout.php"  class="btn">Logout</a>      
        </div>
      </nav>

    </div>
    </nav>
    <h1>Payment and Shipping Information</h1>
    <div class="opt">
    <label>
      <input type="radio" value="card" name="opt" id="" checked>  Online Payment
      </label>
      <label>
        <input type="radio" name="opt" value="cod" id="" > Cash on Delivery
      </label>
    </div>
    <div class="container">
    <div id="card">
    <form action="" method="post">
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="fname" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="form-group">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" name="c_number" required>
      </div>
      <div class="form-group">
        <label for="expiration-date">Expiration Date</label>
        <input type="Date" id="expiration-date" name="ex_date" required>
      </div>
      <div class="form-group" >
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" required>
      </div>  
      <div class="buy">
        <input type="submit" value="Checkout" class="buyButton" name="submit">
      </div>
      </form>
      </div>
  </div>



  <div class="container">
    <div id="cod">
    <form action="" method="post">
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="fname" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="buy">
        <input type="submit" value="Checkout" class="buyButton" name="submit">
      </div>
      </form>
      </div>
  </div>







     
<script>
const card = document.getElementById("card");
const cod = document.getElementById("cod");
console.log(card);
document.querySelectorAll('input[name="opt"]').forEach((elem)=> {
  elem.addEventListener("click", ()=>{
    if (elem.value === "card") {
      card.style.display="block";
      cod.style.display="none";
    }
    else{
      cod.style.display="block";
      card.style.display="none";
    }
  })

})
</script>

</body>
</html>
