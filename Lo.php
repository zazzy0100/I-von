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
if(isset($_POST['Lo'])){
  $name=$_POST['uname1'];
  $email=$_POST['email'];
  $pswd=$_POST['upswd1'];
}
  $sql = "INSERT INTO Urec(Uname,Uemail,Upswd) VALUES ('$name','$email','$pswd')";
   $reval=mysqli_query($con,$sql);
  if($reval){
    header("location:index.php");}

else{
    echo"correct enter or network issue";
  }
    

  
  

  
?>