<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.heading{
  width:85%;
  height:24%;
  background:#85929E;
  float:right;
  border:2px solid black;
  color:white;
  text-align:center;
  font-size:19px;
}
.logo{
  width:15%;
  height:24%;
  background:#85929E;
  float:left;
  border:2px solid black;
}
.image{
  height:140px;
  width:200px;
  zoom:94.7%;
  border:3px solid #212F3D;
}
h3{
  outline:1px solid black;
  outline-width:30%;
}
.main-image{
  height:100%;
  width:100%;

}
.main{
  height:100%;
  background-image:url("login.png");
  background-size:cover;
  text-align:center;
  font-size:30px;
}
.main input{
    width:30%;
    margin-bottom: 20px;
   align:center;
   font-size:20px;
}
::placeholder{
  color:red;
  
}
.main input[type = "text"],input[type= "password"]{
    border:none;
    border-bottom:3px solid black;
    background:transparent;
    outline:none;
    height:40px;
    font-size:16px;

}
.main input[type = "submit"]{
    width:30%;
    border:none;
    outline:none;
    height:40px;
    background:#5499C7;
    color:black;
    font-size:18px;
    border-radius:20px;
    border:2px solid black;
    align:center;
}
.main input[type = "submit"]:hover{
    cursor:pointer;
    background:#39dc79;
    color:#000;
}
.main a{
    text-decoration: none;
    font-size: 14px;
    color:black;
}
.welcome{
  font-size:35px;
  color:black;
}
</style>
<body>
  
<div class = "logo">
<center><img src = "logo.png" class = "image"></center>
</div>
<div class = "heading">
Helpine No: 020896123 , 0502589651
<u><strong><h3>REGIONAL TRANSPORT OFFICE</strong></h3></u>
Ministry Of Road Transport And Highways<br>
Maharashtra, Pune-01
</div>

<br><br><br><br><br><br>
<strong><marquee>REGIONAL TRANSPORT OFFICE</marquee></strong>
<div class = "main"><br><br><br>
<strong><h3 class = "welcome">WELCOME</h3></strong>
<strong>Sign into your account</strong>
<form name = "myform" method = "post" onsubmit="return validateForm()">
        <input type = "text" name = "username" placeholder = "USERNAME"><br>
        <input type = "password" name = "password" placeholder = "PASSWORD"><br>
        <input type = "submit" name = "login" value = "SIGN IN"  onclik= "myfunction()"><br>
       <?php include("login_process.php");?>
        </form>
</div>

</body>
</html>
