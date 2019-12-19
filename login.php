<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establishing Connection with Server
$connection = mysqli_connect("localhost", "root", "","somo"); 

if(!$connection)
{
    die('Could not connect to database: ' . mysqli_error());
}

if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
      
    $query=mysqli_query($connection,"SELECT * FROM tbl_system_users WHERE user_name='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['user_name'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: index.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
  }  
?>