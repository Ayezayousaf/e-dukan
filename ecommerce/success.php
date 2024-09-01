<?php
include "config.php";







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eDukan</title>
    <style>
        #myModal {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.7);
  }

  #myModal .modal-content {
	position: relative;
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
	font-size: 20px;
	text-transform: uppercase;
	letter-spacing: normal;
    border: 1px solid #CDE900;
	border-radius: 10px;
	box-shadow: 0px 0px 10px #CDE900;
    width: 25%;
  }
  .form__link{
    text-decoration: none;
    margin: 10px;
    width: 100%;
    padding: 5px;
    font-weight: bold;
    font-size: 1.1rem;
    color: black;
    border: none;
    border-radius: 4px;
    outline: none;
    background: #CDE900;
    cursor: pointer;
}
.form__link:hover{
    text-decoration: underline;
}
.btn{
    width: 70%;
    display: flex;
    margin: auto;
}
p{
    text-align: center;
}
  .close i{
	font-size: 30px;
	cursor: pointer;
}
    </style>
</head>
<body>
<div id="myModal">
  <div class="modal-content">
    <p>Order Placed Successfully</p>
    <div class="btn">
    <a class="form__link" href="index.php" >Continue Shopping</a>
    </div>
  </div>
</div>
</body>
</html>