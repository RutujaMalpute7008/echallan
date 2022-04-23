<?php include("login_process.php"); ?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
body{
    height:100%;
}
.main{
  width:100%;
  height:100%;
  background-image:url("check.png");
  background-size:cover;
  text-align:center;
  font-size:20px;
  color:white;
 
}
h3{
  outline:1px solid white;
  outline-width:30%;
}
.design{
    height:7%;
    width:25%;
    float:center;
    background-image:url("traffic.png");
    background-size:cover;
    text-align:right;
}
.main-box{
    width:50%;
    height:80%;
    float:left;
}
.box1{
    width:20%;
    height:25%;
    border:2px solid white;
    margin:10px;
    background-image:url(vehicle.png);
    background-size:cover;

}
.box2{
    width:20%;
    height:25%;
    border:2px solid white;
    margin:10px;
    background-image:url(fine.png) ;
    background-size:cover;
}
.box3{
    width:20%;
    height:25%;
    border:2px solid white;
    margin:10px;
    background-image:url(law.png);
    background-size:cover;
}
.button{
  background-color:white;
  width:95%;
}
.button1{
    float:left;
    width:5%;
    height:5%;
    background:black;
    color:white;
    border:1.5px solid white;
}


</style>
<body>


<div class = "main">
  <center>  <div class = "design"></div></center>Alert today – Alive tomorrow.
  <h3> REGIONAL TRANSPORT OFFICE</h3>
  <button class = "button1"><a href = "loginpage.php">BACK</a></button>
   <div class ="box"></div>
   <center> <div class ="box1"><br><br><br><button class = "button"><a href = "detail_page.php">Vehicle Details</a></button></div></center>
    <center> <div class ="box2"><br><br><br><button class = "button"><a href = "fine_page.php">Raise a Fine</a></button></div></center>
    <center><div class ="box3"><br><br><br><button class = "button"><a href = "law_page.php"> Laws and Rules</a></button></div></center>
</div>




</body>
</html>
