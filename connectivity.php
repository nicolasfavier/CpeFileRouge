<?php
// configuration
$dbhost 	= "localhost";
$dbname		= "filerouge";
$dbuser		= "filerouge";
$dbpass		= "pass";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 
// new data
 
$user = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
 
if($user == '') {
	echo("You must enter your Username");
}
if($password == '') {
	echo("You must enter your password");
}
 
// query
$result = $conn->prepare("SELECT * FROM users WHERE email= :theuser AND password= :thepassword");
$result->bindParam(':theuser', $user);
$result->bindParam(':thepassword', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
 echo("good");
}
else{
	 echo("does't exist : ".$user.$password);
}
?>