<?php
 $server = "localhost";
 $user = "root";
 $pass = "";
 $db_name = "database";
 $conn = "";
   
 try{
 $conn = mysqli_connect($server, 
                        $user, 
                        $pass, 
                        $db_name);

     
    }
catch(mysqli_sql_exception){
    echo "Error! You're not connected!";
}
    
?>