
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
<title>Cases</title>
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
      <!-- Each product row contains info of 3 elements -->
      <div class="productRow">
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C21.jpeg"></div>
            <p class="price">$4</p>
            <p class="productContent">IPhone 12 Cover</p>
              <input type="hidden" name="price" value="4">
              <input type="hidden" name="image" value="images/categories/C21.jpeg">
              <input type="hidden" name="name" value="IPhone 12 Cover">
              <input type="hidden" name="p_type" value="cases">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C22.jpeg"></div>
      <p class="price">$5</p>
          <p class="productContent">Oppo A37 Cover</p>
              <input type="hidden" name="price" value="5">
              <input type="hidden" name="image" value="images/categories/C22.jpeg">
              <input type="hidden" name="name" value="Oppo A37 Cover">
              <input type="hidden" name="p_type" value="cases">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C23.jpeg"></div>
          <p class="price">$8</p>
          <p class="productContent">IPhone 11 Pro Cover</p>
              <input type="hidden" name="price" value="8">
              <input type="hidden" name="image" value="images/categories/C23.jpeg">
              <input type="hidden" name="name" value="IPhone 11 Pro Cover">
              <input type="hidden" name="p_type" value="cases">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
</div>
          <div class="productRow">
          <!-- Each product row contains info of 3 elements -->
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C24.jpeg"></div>
            <p class="price">$4</p>
            <p class="productContent">IPhone 11 Cover</p>
              <input type="hidden" name="price" value="4">
              <input type="hidden" name="image" value="images/categories/C24.jpeg">
              <input type="hidden" name="name" value="IPhone 11">
              <input type="hidden" name="p_type" value="cases">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C25.jpeg"></div>
      <p class="price">$5</p>
          <p class="productContent">Samsung Galaxy S7</p>
              <input type="hidden" name="price" value="5">
              <input type="hidden" name="image" value="images/categories/C25.jpeg">
              <input type="hidden" name="name" value="Samsung Galaxy S7">
              <input type="hidden" name="p_type" value="cases">
              <button type="submit" name="button" value="Add to Cart"
              class="buyButton" >Add to Cart</button>
          </form>
      <form method="post" class="productInfo"><!-- Each individual product description -->
      <div><img alt="sample" src="images/categories/C26.jpeg"></div>
          <p class="price">$8</p>
          <p class="productContent">Huawei Mate 10</p>
              <input type="hidden" name="price" value="8">
              <input type="hidden" name="image" value="images/categories/C26.jpeg">
              <input type="hidden" name="name" value="IPhone 11 Pro Cover">
              <input type="hidden" name="p_type" value="cases">
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
