<?php 
require_once "phpmysqlconnect.php"

// Escape user inputs for security
$full_name = mysqli_real_escape_string($conn, $_REQUEST['full_name']);
$user_name = mysqli_real_escape_string($conn, $_REQUEST['user_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$telephone = mysqli_real_escape_string($conn, $_REQUEST['telephone'])
// Attempt insert query execution
$sql = "INSERT INTO userinfo (full_name, user_name, telephone, password, email) VALUES ('$full_name', '$user_name','$telephone''$password', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>