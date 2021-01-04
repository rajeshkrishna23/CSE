<?php
$server_name="localhost";
$username="root";
$password="";
$database_Name="project1";
$connection=mysqli_connect($server_name,$username,$password,$database_Name);
if($connection)
{
    echo"<script>alert('DATABASE CONNECTED')</script>";
}
else{
    die("Could Not Able to Connect");
}

?>