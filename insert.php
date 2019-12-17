<?php 
require_once "phpmysqlconnect.php"

// Escape user inputs for security
$full_name = mysqli_real_escape_string($conn, $_REQUEST['full_name']);
$user_name = mysqli_real_escape_string($conn, $_REQUEST['user_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password'])
// Attempt insert query execution
$sql = "INSERT INTO persons (full_name, user_name, password, email) VALUES ('$full_name', '$user_name','$password', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>