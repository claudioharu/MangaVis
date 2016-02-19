<?php
//Retirar daki

$servername = "mysql.hostinger.com.br";
$username = "u654373236_manga";
$password = "HJM1HDpsJl";

try {
	$conn = new PDO("mysql:host=$servername;dbname=u654373236_manga", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

?>