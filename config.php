<?php

$Name= filter_input(INPUT_POST,'Name');
$Email= filter_input(INPUT_POST,'email');
$query= filter_input(INPUT_POST,'Query');
if(!empty($Name)){
if(!empty($email)){
if(!empty($query)){

$host="localhost";
$dbusername="ictatjcub_wedworks";
$dbpassword="123zxc";
$dbname="ictatjcu_wedworks";

//create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die("Connection failed:('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
$sql="INSERT INTO MyGuests(Name, email, Query)
values('$Name','$email','$Query')";
if($conn->query($sql)){
echo" New record is inserted succesfully";
}
else{
echo"Error:".$sql."<br>".$cpnn->error;
}
$conn->close();
}
}
}
else{
echo"Name should not be empty";
die();
}
else{
echo"Email should not be empty";
die();
}
else{
echo"Query should not be empty";
die();
}
?>
