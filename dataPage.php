<?php
session_start(); 
    $myid = $_SESSION['id'];
    $username = $_SESSION['username'];
    $userid = $_SESSION['userid'];
    include("config.php");
     if($myid!='0'){
		 
		 ?>
		 	<script>
				window.location="admin.php";
	        </script>
	<?php
}



    $sql ="Select * from project WHERE j1id ='$userid' or j2id ='$userid' or j3id ='$userid'";

    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {


	
?>


<html dir="rtl" lang="ar">
  <head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
body {
  background-color: #136532;
  font-family: sans-serif;
  font-size: 16px;
  
}

.policy-table {
  color: black;
  text-align: center;
}

.headings, .policy {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-bottom: 1em;
  padding: 1em;
}

.heading {
  flex-basis: 33.333%;
  font-weight: bold;
}

.policy {
  border-radius: 2em;
  background-color: white;
  margin-bottom: 20px;
  -moz-box-shadow: 0 0 3px grey;
  -webkit-box-shadow: 0 0 3px grey;
  box-shadow: 0 0 5px grey;
}

span {
  flex-basis: 33.333%;
}

a {
  text-decoration: none;
  color: #4c4c4c;
}
#done {
	color:green;
	
}
#not{
	color:red;

}	
table {
  border-collapse:separate;
  border:solid;
  border-radius: 15px;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #136532;
  color: black;
}
	  
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
    </style>
  </head>
 
  <body >
  
  	 <img class="center" src="JoYS Logo - Transparent.png" alt="moe" style="display: block;width:300px; height:100px">

  
  
  <div class="policy-container">
  <div class="policy-table">
    <div class="headings">
	  <span class="heading">رقم المشروع</span>
      <span class="heading">اسم المشروع</span>
	  <span class="heading">حالة المشروع</span>

	  
      
    </div>


<?php 
	$count=0;
    $count2=0;// this count to check if mark is ok or not 
	$e_flag=0;
	while($row2 = mysqli_fetch_array($result)){
		 $count++;
		   $count2++;
         
		 
		
	if($row2['j1id']==$_SESSION['userid']){
	  $_SESSION['role'] = "1";

		
	}
	else if($row2['j2id']==$_SESSION['userid']){
	   $_SESSION['role'] = "2";

	}
	
    else if($row2['j3id']==$_SESSION['userid']){
	   $_SESSION['role'] = "3";

		
	}     
	      $link=$row2['name'];
		  $code=$row2['code'];
		  $eng=$row2['eng'];







  
    echo  " <div class='policy'>";
     
	   echo  "<span>";
	    echo "<a href='projectPage.php?Pcode=$code&Type=$eng'>$code</a> \n";
      echo  "</span>";
	 
	 
      echo  "<span>";
	    echo "<a href='projectPage.php?Pcode=$code&Type=$eng'>$link</a> \n";
      echo  "</span>";
   
	
	
	echo  "<span>";
	$avarage="av". $_SESSION['role']."m";
	$avarage=$row2[$avarage];

	if ($avarage>0){
		
	    echo "<p  id='done'> تم التحكيم  <p>\n";
		
	}else{
	   echo "<p id='not'> لم يتم التحكيم  <p>\n";

	}
      echo  "</span>";

	  
	
	  
	 
	      $judge1_name=$row2['judge1'] ;
		  $judge2_name=$row2['judge2'] ;
		  $judge3_name=$row2['judge3'] ;
	  
	      $judge1_mark=$row2['av1m'] ;
		  $judge2_mark=$row2['av2m'] ;
		  $judge3_mark=$row2['av3m'] ;
		  
		  $m1="m1".$count;
		  $m2="m2".$count;
		  $m3="m3".$count;
		  
		  $e1="e1".$count2;// name for equal 
		  $e_text="e_text".$count2;
		  $e1_value=" لم يتنهي التحكيم";// this for متطابق 
		  
		  
		  
			echo "<table>
			  <tr>
				<th>محكم 1</th>
				<th>محكم 2</th>
				<th>محكم 3</th>
				<th>تطابق/غير متطابق</th>
				
			  </tr>
		
			  <tr>
			    <td><p > $judge1_name <p></td>
			    <td><p > $judge2_name <p></td>
				<td><p > $judge3_name <p></td>
				<td id =$e1><p id =$e_text  > $e1_value  <p></td>
			   
			  </tr>
			  <tr>
				<td> <p style='display: none;' id=$m1>$judge1_mark<p>\n</td>
				<td> <p style='display: none;' id=$m2>$judge2_mark<p>\n</td>
				<td> <p style='display: none;' id=$m3>$judge3_mark<p>\n</td>
			  </tr>
			  
			</table>";

					  
					  

		  if ($judge1_mark > 0 && $judge2_mark > 0&& $judge3_mark > 0){
		  echo "<script type='text/javascript'>document.getElementById('$m1').style.display = 'block';</script>";
          echo "<script type='text/javascript'>document.getElementById('$m2').style.display = 'block';</script>";
	  	  echo "<script type='text/javascript'>document.getElementById('$m3').style.display = 'block';</script>";  
		  
		 
		

		  if ($judge1_mark - $judge2_mark <=10 && $judge2_mark - $judge1_mark <=10 ){
			  $e1_value=0;
			 

		  }
		  else{
			  $e1_value =1;
			 
		  }
		  
		  
		   if ($judge1_mark - $judge3_mark <=10 && $judge3_mark - $judge1_mark <=10 ){
			   $e2_value =0;
			  

		  }
		  else{
			 $e2_value=1;
			  
		  }
		  
		  
		  
		  
		   if ($judge2_mark - $judge3_mark <=10 && $judge3_mark - $judge2_mark <=10 ){
			   $e3_value=0;
			 
		  }
		  else{
			  $e3_value=1;
			  
		  }
		  
		   if ($e1_value or $e2_value or $e3_value){
			 echo "<script type='text/javascript'>document.getElementById('$e1').style.background = '#f37979';</script>"; 
			 echo "<script type='text/javascript'>document.getElementById('$e1').style.color = 'black';</script>";  
			 
			 echo "<script type='text/javascript'>document.getElementById('$e_text').innerHTML='غير متطابق';</script>";
			 

			   
		   }
		  else{
			 echo "<script type='text/javascript'>document.getElementById('$e1').style.background = '#77b777';</script>";  
			  echo "<script type='text/javascript'>document.getElementById('$e_text').innerHTML='متطابق';</script>";
			  			 echo "<script type='text/javascript'>document.getElementById('$e1').style.color = 'black';</script>";  


		  }
		 
		  }
	      echo  " </div>";
	  
	
	  
	  
  
	
	
	
	
	}
	
	
	}
	
	
	
	?>
	
	
	
	
  </div>
</div>
  
  

       
  </body>
</html>