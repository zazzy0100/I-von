<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Urecords";
$con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(! $con){
  echo"failed";
  
}
if(isset($_POST['Connect'])){
  $pswd1=$_POST['c_pass'];
  $email1=$_POST['c_email'];}
  $query = "select * from Urec where Uemail='$email1' and Upswd= '$pswd1'";
  $reval=mysqli_query($con,$query);
  if(mysqli_num_rows($reval)==1){
    header("location:open.htm");}

  else{
    echo"sorry network issue";
  }
    


  
  ?>