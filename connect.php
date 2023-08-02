<?php
$con = new mysqli('localhost','root','root','crud');
if(!$con){
    die(mysqli_error($con));
}
?>