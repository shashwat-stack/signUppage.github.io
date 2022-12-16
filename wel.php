<?php
$name = $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$con = new mysqli("localhost","root","","demo");
if($con->connect_error){
    die("Failed to connect:");


}
$sql ="INSERT INTO `student` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
if($con->query($sql)==true)
{
    echo"<h2>succeful added</h2>";
}
else{
    echo "<h2>failed</h2>";
}
$con->close();


    


?>