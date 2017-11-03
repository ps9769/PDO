<?php

$servername = "sql1.njit.edu";
$username = "pbs29";
$password = "TRXCCmmls";

try
     {
    $conn = new PDO("mysql:host=$servername;dbname=pbs29",$username, $password);
     echo "<b><i>Connected Successfully</i> </b> <br>"; 
      }

 catch(PDOException $e)
      {
      echo "<b><i>Connection Failed</i></b> <br>";
        }
	

?>




