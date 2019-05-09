<!--Kirstie O'Connell
	CSIS 279
	CREATE TABLE IN MYSQL USING PHP
	EXTRA CREDIT --INCLASS
	-->
<?php 
$username="username";
$password="password"; 
$database="your_database";

$title=$_POST['title'];
$author=$_POST['author'];
$date=$_POST['date'];
$publisher=$_POST['publisher'];
$price=$_POST['price'];

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query="INSERT INTO books VALUES ("; '$title'; '$author'; '$date'; '$publisher';
	'$price');
mysql_query($query);

mysql_close();
?>

