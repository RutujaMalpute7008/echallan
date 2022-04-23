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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
::placeholder
{
    text-align:center;
    color:black;
}
.search_button{
    background:black;
    height:6%;
    width:5%;
}
.input{
    height:6%;
    color:black;
}
.box{
    width:50%;
    height:50%;
    background:white;
    border:2px solid black;
    color:black;
    text-align:center;

}
.box1{
    width:100%;
    height:16%;
    color:black;
    text-align:left;
    margin:10px;
    text-align:center;
}
.box-button{
    width:32%;
    height:100%;
    color:black;
    background:white;
}
.box-button:hover{
    background:#AAB7B8;
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
 $vehicle_no = $_POST['vehicle_no'];
?>

<div class = "main">
  <center>  <div class = "design"></div></center>Alert today – Alive tomorrow.
  <h3> REGIONAL TRANSPORT OFFICE</h3>
  <button class = "button"><a href = "page1.php">BACK</a></button>
  
    <br><br>
    <form method = "post">
    <input type = "text" name = "vehicle_no" placeholder = "Search Vehicle No" class = "input" value = "<?php echo "$vehicle_no"; ?>" required>
    <button class = "search_button" name = "search"><span class = "glyphicon glyphicon-search"></button></span>
    
    
    
          <center><div class = "box">
          <center><div class = "box1">
          <button class = "box-button" name = "user">User</button>
          <button class = "box-button" name = "vehicle">Vehicle</button>
          <button class = "box-button" name = "penalty">Penalty</button>
            <br><br>
                <?php
                
                   
                    $conn = mysqli_connect("localhost","root","","echallan");
                        if($conn->connect_error)
                        {
                            die("connection failed".$conn->connect_error);
                        }
                       
                        
              

                     $sql = "select * from detail where vehicle_no = '$vehicle_no' ";
                     $result = mysqli_query($conn,$sql);
                        if($result-> num_rows > 0){
                            $row = $result->fetch_assoc();
                            $Name = $row['Name'];
                            $age = $row['age'];
                            $contact = $row['Contact'];
                            $Address = $row['Address'];
                            $model = $row['Model'];
                            $v_no = $row['vehicle_no'];
                            $type = $row['type'];
                            $color = $row['color'];
                            $engine_no = $row['engine_no'];
                            $r_date = $row['registrtation_date'];
                        
                        
                           
                            if(isset($_POST['user'])){ 
                            echo "Name : "."$Name <br>";
                            echo "Age : "."$age <br>";
                            echo "Contact-No : "."$contact <br>";
                            echo "Address : "."$Address <br>";
                            }
                           

                            if(isset($_POST['vehicle'])){ 
                                echo "Model : "."$model <br>";
                                echo "Vehicle No : "."$v_no <br>";
                                echo "Type : "."$type <br>";
                                echo "Color : "."$color <br>";
                                echo "Engine-No : "."$engine_no <br>";
                                echo "Registration-Date : "."$r_date <br>";
                             }
                            
                             if(isset($_POST['penalty']))
                             {
                                 $i = 1;
                                $query = "select * from penalty where vehicle_no = '$vehicle_no' ";
                                $result_query = mysqli_query($conn,$query);
                                if($result_query-> num_rows > 0){
                                    while($row = $result_query-> fetch_assoc()){
                                    $fine = $row['fine'];
                                    $amount = $row['amount'];
                                    
                                    echo "$i ".". ";
                                    echo "$fine : ";
                                    echo "$amount Rs"." / Paid";?><br>
                                    <?php 
                                    $i++;
                                    }
                                
                                }

                             }
                            }

                            else{
                                echo "NO MATCH FOUND";
                            }
                         
                       
            
                       
                
                    
                ?>


          </div></center>
          </div></center>
                    
  

  </form>
</div>
</body>
</html>
