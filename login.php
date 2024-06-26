<?php
session_start();
include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
	  			   $_SESSION['userid'] = $myusername ;

      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE userid = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	 // echo "sucess to connect to MySQL: " ;
        if (mysqli_num_rows($result) > 0) {
	      				
              
            while($row = mysqli_fetch_array($result)){
               //echo "Name: " . $row["permission"]. "<br>";
			   $_SESSION['username'] = $row['username'];
			   $_SESSION['userid'] = $row['userid'];
			   $_SESSION['id'] = $row['id'];


			    
               
	   }
	   
	    echo "<script>
               
                window.location.href='dataPage.php';
                </script>";
				
	   
	   }
          else {
				echo "<script>
                alert('username or password uncorrect please try again.....');
                window.location.href='index.html';
                </script>";
				

                 }
	  
      
   }
?>