<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$connection = mysqli_connect("localhost", "root", "","somo"); // Establishing Connection with Server

if(!$connection)
{
    die('Could not connect to database: ' . mysql_error());
}

// Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['emailaddress'];
$telephone = $_POST['telephone'];
$pass = $_POST['password'];


if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO tbl_system_users(fullname,user_name,email,telephone,pass) VALUES ('$name','$username','$email', '$telephone', '$pass')");
if(!$query){
    die("issue here" . mysqli_error($connection));
}
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>
