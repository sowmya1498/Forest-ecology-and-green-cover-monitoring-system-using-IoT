<?php
include('connect.php');
session_start();
if(!isset($_SESSION['link']))
{
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login1.html");  
       }
}
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