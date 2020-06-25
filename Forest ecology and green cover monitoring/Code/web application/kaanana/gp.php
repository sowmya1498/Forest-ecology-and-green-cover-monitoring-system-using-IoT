<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
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
<body>
<img  src="black.png" width="1536" height="120">
<h1 style="color:white; position:absolute; TOP:0px; LEFT:320px;">FOREST ECOLOGY AND GREEN COVER MONITORING</h1>
<h2 style="color:green; position:absolute; TOP:50px; LEFT:630px;">For a greener tomorrow</h2>

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
</html>