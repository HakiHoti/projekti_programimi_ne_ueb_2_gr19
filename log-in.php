<?php session_start()?>
<?php
ob_start();
include "php/dbconnection.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$username);
$query="SELECT * FROM users where name='username'";
$select=mysqli_query($connection,$query);
if($delect){
    die("MYSQL is not working ");
}
while($row=mysqli_fetch_assoc($select)){
$id=$row['id'];
    $name=$row['name'];
$password2=$row['password'];
$user_role=$row['user_role'];
}
if($username!==$name && $password!=$password2){
    header("Location:log-in-main.php");
}
else{
    $_SESSION['username']=$username;
    $_SESSION['password']=$password2;
    $_SESSION['user_role']=$user_role;
    header("Location:admin.php");
}




}

?>