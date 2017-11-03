<?php

$obj=new main();

class main 
{
  public function __construct()
  {

    $servername = "sql1.njit.edu";
    $username = "pbs29";
    $password = "TRXCCmmls";

    if (isset($_POST["submit"]))
     {
      try
       {

        $data_bank = new PDO("mysql:host=$servername;dbname=pbs29",$username,$password);
        echo "<b><i>Connected Successfully</i></b><br><br>"; 
   
       }

       catch( PDOException $e )
       {
         echo "<b><i>Connection Failed</i></b> <br>";
       }

       $requirement ='select * from accounts where id<6';
       $result =$data_bank->prepare($requirement);
       $result->execute();
       echo "No of results is  ".$result->rowCount()."</br>"."</br>"."</br>";
       echo '<table border="1"  >';

    if  (count($result)>0)
     {
        echo "<tr>
	       <td>  ID         </th>
	       <th>  Email      </th>
	       <th>  First Name </th>
	       <th>  Last Name  </th>
	       <th>  Phone      </th>
	       <th>  Birthdays  </th>
	       <th>  Gender     </th>
	       <th>  Password   </th>
	       </tr>";

       foreach ($result as $row)
        { 
        echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['phone']."</td><td>".$row['birthday']."</td><td>".$row['gender']."</td><td               >".$row['password']."</td></tr>";	
	}

      }
       
         echo"</table>";
	 $data_bank =NULL;


     }       
     
        else
	  { 
	    echo "<h1>  Display Users having ID less than 6 </h1>";
	    echo "<form method=\"post\"enctype=\"multipart/form-data\">";
	    echo "<input type=\"submit\"value=\"Enter\" name=\"submit\">";
	    echo "</form>";
	         
	   }


  }
 }
?>




