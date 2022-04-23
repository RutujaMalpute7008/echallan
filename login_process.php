<?php
session_start();
$username = "";
$password = "";
$_SESSION['success'] = "";
$conn = mysqli_connect("localhost","root","","echallan");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
  if(isset($_POST['login'])){ 
      $username =$_POST['username'];
      $password = $_POST['password'];
      $query= "select username,password from officers where username = '$username' and password ='$password'";
      $result =mysqli_query($conn,$query);    
      $row =mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      if($count == 1){
        $_SESSION['username'] = "$username";
        $_SESSION['success'] = "You have logged in"; 
        header("location: page1.php");
      }
      else{
        header("location:loginpage.php");?>
        <html>INVALID USERNAME OR PASSWORD</html><?php
        
    }

  }
  