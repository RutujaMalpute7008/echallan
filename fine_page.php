<?php
 error_reporting(E_ALL & ~E_NOTICE);
 include("login_process.php");
?>
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
::placeholder
{
    text-align:center;
    color:black;
}
.search_button{
    background:black;
    height:6%;
    width:6%;
    color:white;
}
.input{
    height:6%;
    color:black;
    margin:5px;
    padding-left:30px;
}
.input_name{
    height:6%;
    color:black;
    margin:5px;
    padding-left:30px;
}
.fine{
    height:20%;
    background:white;
    color:black;
    margin:5px;
    width:50%;
    float:center;
    
}
.menu select{
    display:block;
    height:6%;
    width:20%;
    border:1px solid black;
    border-radius:5px;
    margin:0 auto;
    font-size:15px;
    color:black;
    letter-spacing: 2px;
    padding-left:40px;
    margin-top:30px; 
  }
  .menu select option{
      color:black;
      background-color:rgba(0,0,0,0.5);
  }
  .button{
    float:left;
    width:5%;
    height:5%;
    background:black;
    color:white;
    border:1.5px solid white;
}


</style>
<body>
<?php
 $conn = mysqli_connect("localhost","root","","echallan");
 if($conn->connect_error)
 {
     die("connection failed".$conn->connect_error);
 }
 $vehicle_no = $_POST['vehicle_no'];
 $sql = "select * from detail where vehicle_no = '$vehicle_no' ";
$result = mysqli_query($conn,$sql);



 if($result-> num_rows > 0){
    $row = $result->fetch_assoc();
    $Name = $row['Name'];
 }

?>

<div class = "main">
  <center>  <div class = "design"></div></center>Alert today – Alive tomorrow.
  <h3> REGIONAL TRANSPORT OFFICE</h3>
  <button class = "button"><a href = "page1.php">BACK</a></button>
    <br><br>
  <form method = "post">
    <input type = "text" name = "vehicle_no" placeholder = "Search Vehicle No" class = "input" value = "<?php echo "$vehicle_no"; ?>" required><br>
    <button class = "search_button" name = "search">Search</button><br>
    <?php
        if(isset($_POST['search']) or isset($_POST['submit'])){
            ?><input type = "text" name = "name" placeholder = "Name" class = "input_name" value = "<?php echo "$Name "; ?>" required>

        <div class = "menu">
      
            <select name = "fine" value = "<?php echo "$fine" ?>" >
        
            
                 <option>SELECT A FINE</option>
                 <option>Driving or riding without license</option>
                 <option>Over speeding</option>
                 <option>Driving or riding under influence</option>
                 <option>Driving or riding without motor vehicles insurance</option>
                 <option>Driving without seat belt on</option>
                 <option>Dangerous driving or riding (includes jumping red lights)</option>
                 <option>Violation of red regulations</option>
                 <option>Driving or riding while using mobile</option>
                 <option>Racing or speeding on roads</option>
                 <option>Riding without a helmet on (for both rider and pillion rider)</option>
                 <br>
                 </select>
                 <button class = "search_button" name = "submit">GO</button>
               
                 
                 
        <?php 
        error_reporting(E_ALL & ~E_NOTICE);
        }
      if(isset($_POST['fine'])){
      
      $fine = $_POST['fine'];
      $sql_query ="select * from fines where Fine = '$fine'";
      $result_query = mysqli_query($conn,$sql_query);
      if($result_query-> num_rows > 0){
        $row = $result_query->fetch_assoc();
        $amount = $row['amount'];
        
     }
     else{
         echo "NO MATCH FOUND";
     }
    
      ?><br>
     <center><div class = "fine"><br>
     <u><?php
     echo "Fine-Name : $fine";
     ?><br></u><u><?php
     echo "Fine : $amount"."RS";
     ?>
     </div> </center>
        </u><?php 
        }
        
    
?>
  <strong>
  <?php
     $date = date("y/m/d");
    if($_POST['fine']){
      $insert_query = "Insert into penalty(Name,vehicle_no,fine,amount,date) Values('$Name','$vehicle_no','$fine','$amount','$date')";
      if ($conn->query($insert_query) == TRUE) {
        echo "FINE RAISED";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
  
  
  ?>
   </div>
   </strong>


</form>

</body>
</html>
