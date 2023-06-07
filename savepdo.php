<?php
$server="localhost";
$uname="root";
$pvd="";
$dbname="regprj";

$sname=$_POST['sname'];
$pwd=$_POST['pwd'];
$con=new PDO("mysql:host=$server;dbname=$dbname",$uname,$pvd);
$query="SELECT * from logpdoform where sname=:sname;";
$stmt=$con->prepare($query);
$res=$stmt->execute([":sname"=>$sname]);
if($row=$stmt->fetchAll())
{
  foreach($row as $key => $value)
  {
    $pass=$value[2];
  }
  if ($pass==$pwd) 
  {
   echo"<script>alert('success');</script>";
  }
else
{
  echo"<script>alert('password error');</script>";
}
}
else
{
  echo"<script>alert('uname error');</script>";
}

?>