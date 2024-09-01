<?php
include "config.php";
session_start();
$userid = $_SESSION['id'];

if(!isset($userid)){
   header('location:login.php');
}

$r=mysqli_query($conn, "SELECT * FROM `products` WHERE user_id = $userid ");
$sum =0;

if (isset($_POST['send'])){
$price=$_POST['p'];
    $in ="INSERT INTO `order` (`total_price`) VALUES ('$price')";
    $result=mysqli_query($conn, $in);
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `products` WHERE p_id = '$delete_id'") or die('query failed');
    header('location:cart.php');
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Cart.css">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <title>eDukan-Cart</title>
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
        <div class="menu mb">
            <a href="user.php"><img src="images/account.png" alt="" width="25px" height="25px"></a>
            <a href="#"><img src="images/cart.png" alt="" width="25px" height="25px"></a>
            <a href="logout.php"  class="btn2">Logout</a>
        </div>
    </nav>
    
    <!--My Cart code-->
    <div class="cart1">
    <h2>My Cart</h2>
    
    <div class="cart">
     <table>
        <tr>
        <th>Each</th>
        <th>Delete</th>
     
        <th>Total</th>
        </tr>
        <?php if(mysqli_num_rows($r)>0){
    while ($res= mysqli_fetch_assoc($r)){ 
        
        ?>
          
        <tr>
            
        <td>
           <div class="cartinfo">
            <img src="<?php echo $res['image'] ?>" >
            <div>
                <div>
                </div>
            <p> <b><?php echo $res['name'] ?></b></p>
                    <small>
                        $<?php echo $res['price'] ?></small>
                <br>
                <!-- <a href="">Remove</a> -->
            </div>
            <td>
            <a href="cart.php?delete=<?php echo $res['p_id']  ?>"  class="btn2"
        onclick="return confirm('delete this from cart?');"> Delete</a> 
            

        </td>
           </div> 
           
        </td>
       
        <td> $<?php echo $res['price'] ?></td>
        </tr>
        <?php    
       
      $sum  += $res['price'];
      

    
    }
}?>
          
     </table></div> 
     
     
        <?php
        $ck=mysqli_query($conn,"SELECT * FROM `products` WHERE user_id=$userid");
        if (mysqli_num_rows($ck)>0) {
            echo'<div  class="TotalPrice">
            <table>
            <tr>
                <td>SubTotal</td>';
                echo '<td>$' . $sum . '</td>';
                echo'</tr>
            <tr>
                <button><a href="biling.php">Confirm Order</a></button>
            </tr>
        </table>';
        }
        else{
            echo'<h1 class="head">Your Cart is Empty</h1>';
        }
        ?>
     </div> 
   </div>
   <button class="btn"><a href="index.php">Continue Shopping</a></button>
</body>
</html>