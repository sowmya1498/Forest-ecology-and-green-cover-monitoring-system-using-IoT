<?php
include('connect.php');
session_start();
$_SESSION['use'];
?>
<?php
include('connect.php');
session_start();
    //check if data exists
    if(isset($_POST['Login']))
    {
      
        $fid = $_POST['fid'];
        $password =$_POST['password'];
        
        
        $sql = "SELECT * FROM fofficer WHERE password='$password' and  fid='$fid' " ;
        $result = mysqli_query($con, $sql);
        
       
        if(mysqli_fetch_array($result))
        
         {
            header('Location:off.php');


    
        }
        else
        {
             echo "<script> alert('user not registered');
             window.location.href='officer.php';</script>";
        }
    }


?>
