<?php
//define constants for connection info
define("MYSQLUSER","ictatjcub_wedworks");
define("MYSQLPASS","123zxc");
define("HOSTNAME","localhost");
define("MYSQLDB","ictatjcu_wedworks");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>
<?php
	//must appear BEFORE the <html> tag
	session_start();
	include_once('include/config.php');	
	
	
	//make the database connection
	$conn  = db_connect();
	     
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $email = $conn -> real_escape_string($_POST['email']);
	  $name = $conn -> real_escape_string($_POST['name']);
	  $query = $conn -> real_escape_string($_POST['query']);	
      
	  
      }
   
?>