<?php
$conn=mysqli_connect('localhost','root','','edukan');
if($conn){
    echo`success`;
}
else{
    echo"error";
}
?>
