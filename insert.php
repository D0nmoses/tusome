<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("tusome", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$username = $_POST['username']
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into users(fullname,username,email,telephone,password) values ('$name','$username','$email', '$telephone', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>