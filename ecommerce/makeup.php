

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
    <title>Make-up</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>

  <nav class="box">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
        </div>
        <div class="search">
        <input type="text" id="input" onkeyup="searchProducts()" placeholder="Search.....">
            <!-- <a href=""><img src="images/search.png" width="35px" alt=""></a> -->
        </div>
        <div class="menu">
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
      <div><img alt="sample" src="images/categories/C61.jpg"></div>
          <p class="price">$5</p>
          <p class="productContent">Make-up kit 1</p>
              <input type="hidden" name="price" value="5">
              <input type="hidden" name="image" value="images/categories/C61.jpg">
              <input type="hidden" name="name" value="Make-up kit 1">
              <input type="hidden" name="p_type" value="makeup">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C62.jpg"></div>
          <p class="price">$3</p>
          <p class="productContent">Make-up kit 2</p>
              <input type="hidden" name="price" value="3">
              <input type="hidden" name="image" value="images/categories/C62.jpg">
              <input type="hidden" name="name" value="Make-up kit 2">
              <input type="hidden" name="p_type" value="makeup">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

          <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C63.jpg"></div>
          <p class="price">$3</p>
          <p class="productContent">Make-up kit 3</p>
              <input type="hidden" name="price" value="3">
              <input type="hidden" name="image" value="images/categories/C63.jpg">
              <input type="hidden" name="name" value="Make-up kit 3">
              <input type="hidden" name="p_type" value="makeup">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

      </div>
      <div class="productRow">
        <!-- Each product row contains info of 3 elements -->
        <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C64.jpg"></div>
          <p class="price">$6</p>
          <p class="productContent">Make-up kit 4</p>
              <input type="hidden" name="price" value="6">
              <input type="hidden" name="image" value="images/categories/C64.jpg">
              <input type="hidden" name="name" value="Make-up kit 4">
              <input type="hidden" name="p_type" value="makeup">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C65.jpg"></div>
          <p class="price">$6</p>
          <p class="productContent">Make-up kit 5</p>
              <input type="hidden" name="price" value="5">
              <input type="hidden" name="image" value="images/categories/C65.jpg">
              <input type="hidden" name="name" value="Make-up kit 5">
              <input type="hidden" name="p_type" value="makeup">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>

      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C66.jpg"></div>
          <p class="price">$4</p>
          <p class="productContent">Make-up kit 6</p>
              <input type="hidden" name="price" value="4">
              <input type="hidden" name="image" value="images/categories/C66.jpg">
              <input type="hidden" name="name" value="Make-up kit 6">
              <input type="hidden" name="p_type" value="makeup">
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
