<?php

$servername = "sql1.njit.edu";
$username = "pbs29";
$password = "TRXCCmmls";

try
     {
    $conn = new PDO("mysql:host=$servername;dbname=pbs29",$username, $password);
     echo "Connected successfully"; 
      }
 catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
        }
	

?>









?>
