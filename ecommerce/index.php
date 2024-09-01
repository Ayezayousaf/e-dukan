<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <title>eDukan</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="box">
        <div>
            <a href="index.php"><img src="images/logo.png" alt="" width="130px"></a>
        </div>
        <div class="search">
            <!-- <input type="text" placeholder="Search....."> -->
            <!-- <a href=""><img src="/images/search.png" width="35px" alt=""></a> -->
        </div>
        <div class="menu mb">
            <a href="cart.php"><img src="images/cart.png" alt="" width="25px" height="25px"></a>
            <a href="login.php"><img src="images/account.png" alt="" width="25px" height="25px"></a>
            <?php
// session_start();
// $userid = $_SESSION['id'];
// if(isset($userid)){
// echo'<a href="logout.php"  class="btn">Logout</a>';
// }
?>
        </div>
    </nav>

    <!-- SLIDING CARDS -->
    
    <section>
        <div class="feature">
            <p>Featured Products</p>
        </div>
        <div class="slider">
            <div class="card card1 active">
                <h1>Black Leather Jacket</h1>
            </div>
            <div class="card card2">
                <h1>Black Ring</h1>
            </div>
            <div class="card card3">
                <h1>Half Sleeves T-Shirts</h1>
            </div>
            <div class="card card4">
                <h1>Nike Sneakers Red</h1>
            </div>
        </div>
    </section>

    <!-- categories -->
    
    <section class="categories">
        <div class="p">
            <p>categories</p>
        </div>
        <div class="category">
            <div class="cat">
                <a href="backpacks.php"><img src="images/categories/bag.jpg" alt="">
                    <p>Backpacks</p>
                </a>
            </div>
            <div class="cat">
                <a href="cases.php"><img src="images/categories/cases.jpg" alt="">
                    <p>Cases</p>
                </a>
            </div>
            <div class="cat">
                <a href="jackets.php"><img src="images/categories/jackets.jpg" alt="">
                    <p>Jackets</p>
                </a>
            </div>
            <div class="cat">
                <a href="pants.php"><img src="images/categories/jeans.jpg" alt="">
                    <p>Jeans</p>
                </a>
            </div>
            <div class="cat">
                <a href="jewel.php"> <img src="images/categories/jewellery.jpg" alt="">
                    <p>Jewellery</p>
                </a>
            </div>
            <div class="cat">
                <a href="makeup.php"><img src="images/categories/makeup.jpg" alt="">
                    <p>Makeup</p>
                </a>
            </div>
            <div class="cat">
                <a href="shirts.php"><img src="images/categories/shirts.jpg" alt="">
                    <p>T-Shirts</p>
                </a>
            </div>
            <div class="cat">
                <a href="shoes.php"><img src="images/categories/shoes.jpg" alt="">
                    <p>Shoes</p>
                </a>
            </div>
        </div>
    </section>


    <!-- ABOUT US -->
    <div class="about">
        <p>about us</p>
        <span>
            "Welcome to our ecommerce website! We are a dedicated team of individuals who are passionate about providing
            our customers with the best shopping experience possible. Our website offers a wide variety of products at
            affordable prices, and we strive to constantly update our inventory to keep up with the latest trends. We
            believe in transparency and honesty, and always make sure to provide detailed product information and clear
            images so that our customers can make informed decisions. We also prioritize customer service and are
            available to assist with any questions or concerns. Thank you for choosing our website for your shopping
            needs!"
        </span>

    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright &copy 2022 eDukan</p>
    </footer>





    <script src="script/script.js"></script>
</body>

</html>