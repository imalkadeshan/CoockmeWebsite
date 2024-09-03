<?php

$con = new mysqli("localhost","root","","cookme_customer");

 if($con->connect_error){

 }
 else{
    echo "you can fill sucessful";
 }
?>