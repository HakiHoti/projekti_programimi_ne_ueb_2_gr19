<?php
$connection=mysqli_connect('localhost:3307','root','','movies');
if($connection){
echo "Welcome to the web-page";
}
else{
    die("Mysql failed");
}
?>
