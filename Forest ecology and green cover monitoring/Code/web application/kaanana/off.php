<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.btn1 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:50px;
}
.btn1:hover {background: #eee;}
.success {color: yellow;}

.btn2 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:180px;
}
.btn2:hover {background: #eee;}
.success {color: yellow;}

.btn3 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:310px;
}
.btn3:hover {background: #eee;}
.success {color: yellow;}

.btn4 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:440px;
}
.btn4:hover {background: #eee;}
.success {color: yellow;}

.btn5 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:570px;
}
.btn5:hover {background: #eee;}
.success {color: yellow;}

.btn6 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:700px;
}
.btn6:hover {background: #eee;}
.success {color: yellow;}

.btn7 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:830px;
}
.btn7:hover {background: #eee;}
.success {color: yellow;}

.btn8 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:960px;
}
.btn8:hover {background: #eee;}
.success {color: yellow;}

.btn9 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:1090px;
}
.btn9:hover {background: #eee;}
.success {color: yellow;}

.btn10 {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 24px;
  cursor: pointer;
  display: inline-block;
  position:absolute;
  top:120px;
  left:1220px;
}
.btn10:hover {background: #eee;}
.success {color: yellow;}
body {
	background-image: url("forest2.jpg");
        background-repeat:no-repeat;
       background-size:cover;
} 
h4 { 
    text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; 
   }
  
</style>
<!--<head><link rel="stylesheet" href="ASWHOM1.css">-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<head>




</head>

<body>

<img  src="black.png" width="1536" height="180">
<h1 style="color:white; position:absolute; TOP:0px; LEFT:320px;">FOREST ECOLOGY AND GREEN COVER MONITORING</h1>
<h2 style="color:green; position:absolute; TOP:50px; LEFT:630px;">For a greener tomorrow</h2>
<a href="cam1.php"><button class="btn1 success">Cam 1</button></a>
<a href="cam2.html"><button class="btn2 success">Cam 2</button></a>
<a href="cam2.php"><button class="btn3 success">Cam 3</button></a>
<a href="cam2.php"><button class="btn4 success">Cam 4</button></a>
<a href="cam2.php"><button class="btn5 success">Cam 5</button></a>
<a href="cam2.php"><button class="btn6 success">Cam 6</button></a>
<a href="cam2.php"><button class="btn7 success">Cam 7</button></a>
<a href="cam2.php"><button class="btn8 success">Cam 8</button></a>
<a href="cam2.php"><button class="btn9 success">Cam 9</button></a>
<a href="cam2.php"><button class="btn10 success">Cam 10</button></a>
<a href="signout.php" title="signout"><img class="img1" src="signout.png" STYLE="position:absolute; TOP:110px; LEFT:1400px; WIDTH:70px; HEIGHT:60px"></a>

<div id="tabl">
<br><br>
<font color="white"><h1 align="center">Forest Information :-</h1>
<br><br>
<table bgcolor="red" border="5" align="center" style="line-height:25px; border-color: white;">
<tr>
<th><h2>Tree type :-</h2></th>
<th><h2>Forest health :-</h2></th>
<th><h2>Tree count :-</h2></th>
</tr>


<?php
include('connect.php');
$sql="SELECT * from gpinfo";
$result=$con->query($sql);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		?>
		<tr>
			<td><?php echo $row['ttype'];?></td>
			<td><?php echo $row['fhealth'];?></td>
			<td><?php echo $row['tcount'];?></td>
 
		</tr>
		<?php
	}
}
		?>
		</table>
		</div>

</body>


<?php
include('connect.php');
    //check if data exists
    if(isset($_POST['Login']))
    {
      
        $fid = $_POST['fid'];
        
        
        $sql = "SELECT name FROM fofficer WHERE fid='$fid' " ;
        $result = mysqli_query($con, $sql);
        
       
        if(mysqli_fetch_array($result))
        
         {
            echo $result;


    
        }
        else
        {
             echo "<script> alert('user not registered');
             window.location.href='officer.php';</script>";
        }
    }


?>