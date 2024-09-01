


<?php 
include "config.php";
if(!$conn){
    header("location:login.php");
}
session_start();
$userid = $_SESSION['id'];

if(!isset($userid)){
   header('location:login.php');
};

if(isset($_POST["button"])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $p_type=$_POST['p_type'];
$p_id=mt_rand();
  $image=$_POST['image'];
$sqli="INSERT INTO `products` (`p_id`,`user_id`,`p_type`, `name`,`image`, `price`) VALUES ('$p_id','$userid','$p_type', '$name','$image', '$price') ";
$res=mysqli_query($conn, $sqli);

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/category.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <title>T-Shirts</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>

  
<nav class="box">
        <div class="logo mb">
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
        </div>
        <div class="search">
        <input type="text" id="input" onkeyup="searchProducts()" placeholder="Search.....">
            <!-- <a href=""><img src="images/search.png" width="35px" alt=""></a> -->
        </div>
        <div class="menu mb">
        <h1>(<?php $r=mysqli_query($conn, "SELECT * FROM `products`  WHERE user_id=$userid ");
      $num = mysqli_num_rows($r);
      echo $num;
      ?>)</h1>
            <a href="cart.php"><img src="images/cart.png" alt="" width="25px" height="25px"></a>
            <a href="user.php"><img src="images/account.png" alt="" width="25px"  height="25px"></a>
            <a href="logout.php"  class="btn">Logout</a>
            </div>
    </nav>
    <div id="myModal">
  <div class="modal-content">
    <span class="close"><i>&times;</i></span>
    <p>Added to cart Successfully</p>
  </div>
</div>

<div id="mainWrapper">
  <div id="content">
        <section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C71.jpg"></div>
          <p class="price">$56</p>
          <p class="productContent">Striped Half Sleeves</p>
              <input type="hidden" name="price" value="56">
              <input type="hidden" name="image" value="images/categories/C71.jpg">
              <input type="hidden" name="name" value="Striped Half Sleeves">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/c72.jpg"></div>
          <p class="price">$3</p>
          <p class="productContent">Black Half Sleeves</p>
              <input type="hidden" name="price" value="3">
              <input type="hidden" name="image" value="images/categories/C72.jpg">
              <input type="hidden" name="name" value="Black Half Sleeves">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

          <form method="post" class="productInfo">
                  <div><img alt="sample" src="images/categories/C73.jpeg"></div>
          <p class="price">$5</p>
          <p class="productContent">Blue Half Sleeves</p>
              <input type="hidden" name="price" value="5">
              <input type="hidden" name="image" value="images/categories/C73.jpeg">
              <input type="hidden" name="name" value="Blue Half Sleeves">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>      
          </div>
      <div class="productRow">

        <form method="post" class="productInfo">
                  <div><img alt="sample" src="images/categories/C74.jpeg"></div>
          <p class="price">$3</p>
          <p class="productContent">YouNoob Printed</p>
              <input type="hidden" name="price" value="3">
              <input type="hidden" name="image" value="images/categories/C74.jpeg">
              <input type="hidden" name="name" value="YouNoob Printed">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>      

          <form method="post" class="productInfo">
                  <div><img alt="sample" src="images/categories/C75.jpeg"></div>
          <p class="price">$8</p>
          <p class="productContent">Blue Plain</p>
              <input type="hidden" name="price" value="8">
              <input type="hidden" name="image" value="images/categories/C75.jpeg">
              <input type="hidden" name="name" value="Blue Plain">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>      

          <form method="post" class="productInfo">
                  <div><img alt="sample" src="images/categories/C76.jpeg"></div>
          <p class="price">$4</p>
          <p class="productContent">White Plain</p>
              <input type="hidden" name="price" value="4">
              <input type="hidden" name="image" value="images/categories/C76.jpeg">
              <input type="hidden" name="name" value="White Plain">
              <input type="hidden" name="p_type" value="shirts">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>      
      </div>
    </section>
  </div>
</div>

<script src="script/category.js"></script>


</body>
</html>
