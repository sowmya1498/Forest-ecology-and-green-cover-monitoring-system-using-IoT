<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
h1 { 
    text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; 
   }
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
		background-attachment: fixed;
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

<body>

<img  src="black.png" width="1536" height="180">
<h1 style="color:white; position:absolute; TOP:0px; LEFT:320px;">FOREST ECOLOGY AND GREEN COVER MONITORING</h1>
<h2 style="color:green; position:absolute; TOP:50px; LEFT:630px;">For a greener tomorrow</h2>
<a href="cam1.php"><button class="btn1 success">Cam 1</button></a>
<a href="cam2.html"><button class="btn2 success">Cam 2</button></a>
<a href="cam2.html"><button class="btn3 success">Cam 3</button></a>
<a href="cam2.html"><button class="btn4 success">Cam 4</button></a>
<a href="cam2.html"><button class="btn5 success">Cam 5</button></a>
<a href="cam2.html"><button class="btn6 success">Cam 6</button></a>
<a href="cam2.html"><button class="btn7 success">Cam 7</button></a>
<a href="cam2.html"><button class="btn8 success">Cam 8</button></a>
<a href="cam2.html"><button class="btn9 success">Cam 9</button></a>
<a href="cam2.html"><button class="btn10 success">Cam 10</button></a>
<a href="signout.php" title="signout"><img class="img1" src="signout.png" STYLE="position:absolute; TOP:110px; LEFT:1400px; WIDTH:70px; HEIGHT:60px"></a>

<h1 style="color:yellow; position:absolute; TOP:400px; LEFT:700px;">Saw Alert</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:650px; top:190px;"width="250" height="220" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1064034/widgets/185539"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:800px; LEFT:300px;">Temperature</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:180px; top:550px;"width="450" height="260" style="border: 100px solid #cccccc;" src="https://thingspeak.com/channels/1064034/widgets/183846"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:800px; LEFT:1050px;">Humidity</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:900px; top:550px;"width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1064034/widgets/183847"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:1200px; LEFT:370px;">Gas</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:180px; top:950px;"width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1064034/widgets/185542"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:1200px; LEFT:1020px;">Green Pixels</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:900px; top:950px;"width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1064034/charts/3?bgcolor=%23FFFFFF&color=%23d62020&dynamic=true&results=60&title=green+%25&type=line"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:1610px; LEFT:250px;">Temperature History</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:180px; top:1350px;"width="460" height="270" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/349905"></iframe>
</td></tr>

<h1 style="color:yellow; position:absolute; TOP:1610px; LEFT:950px;">Green Pixel History</h1>
<table border=2 bordercolor="#0000FF">
<tr><td colspan="2">
</td></tr>
<tr><td>
<iframe style="position:absolute; left:900px; top:1350px;"width="460" height="270" style="border: 1px solid #cccccc;" src="https://thingspeak.com/apps/matlab_visualizations/350817"></iframe>
</td></tr>

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