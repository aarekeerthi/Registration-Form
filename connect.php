<?php
$conn=new mysqli('localhost','root','','loginformdb');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$num=$_POST['num'];
$dob=date('Y-m-d',strtotime($_POST['dob']));
$gender=$_POST['gender'];
$query="insert into registration(name,email,password,address,num,dob,gender) values('$name','$email','$password','$address','$num','$dob','$gender')";
$query_run=mysqli_query($conn,$query);
}
?>