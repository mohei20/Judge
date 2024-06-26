<?php
   include("config.php");
   session_start();
   $av=0;
   
   
		 if($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $jp1m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m1']));
    $jp1m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m2']));
    $jp1m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m3']));
    $jp1m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m4']));
	
	$jp2m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m1']));
    $jp2m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m2']));
    $jp2m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m3']));


    $jp3m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m1']));
    $jp3m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m2']));
    $jp3m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m3']));
    $jp3m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m4']));	
	
	$jp4m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p4m1']));
    $jp4m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p4m2']));
	
	
	
	
	$jp5m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m1']));
    $jp5m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m2']));
    $jp5m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m3']));
    $jp5m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m4']));
    $jp5m5 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m3']));
    $jp5m6 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m4']));
	$jp5m7 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m1']));
 

    $av=(( $jp1m1+$jp1m2+$jp1m3+$jp1m4+$jp2m1+$jp2m2+$jp2m3+$jp3m1  
    +$jp3m2+$jp3m3+$jp3m4+$jp4m1+$jp4m2+$jp5m1+$jp5m2+$jp5m3  
    +$jp5m4+$jp5m5+$jp5m6+$jp5m7));





    $id=$_SESSION['id'] ;
	$code=$_SESSION['code'] ;
    //$username=$_SESSION['username'];
	$userid= $_SESSION['userid'];
  /*  $sql ="Select * from project WHERE code ='$code'and (j1id ='$userid' or j2id ='$userid' or j3id ='$userid')";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		while($row2= mysqli_fetch_array($result)){
*/
  if( $_SESSION['role'] ==1){

        $sql="UPDATE `project` SET `j1p1m1`='$jp1m1',`j1p1m2`='$jp1m2',`j1p1m3`='$jp1m3',`j1p1m4`='$jp1m4',`av1m`='$av',`j1p2m1`='$jp2m1',
             `j1p2m2`='$jp2m2',`j1p2m3`='$jp2m3',`j1p3m1`='$jp3m1',`j1p3m2`='$jp3m2',`j1p3m3`='$jp3m3',`j1p3m4`='$jp3m4',`j1p4m1`='$jp4m1',`j1p4m2`='$jp4m2',
             `j1p5m1`='$jp5m1',`j1p5m2`='$jp5m2',`j1p5m3`='$jp5m3',`j1p5m4`='$jp5m4',`j1p5m5`='$jp5m5',`j1p5m6`='$jp5m6',`j1p5m7`='$jp5m7'WHERE code='$code'";
	}
	else if($_SESSION['role'] == 2){

			  $sql="UPDATE `project` SET `j2p1m1`='$jp1m1',`j2p1m2`='$jp1m2',`j2p1m3`='$jp1m3',`j2p1m4`='$jp1m4',`av2m`='$av',`j2p2m1`='$jp2m1',
                    `j2p2m2`='$jp2m2',`j2p2m3`='$jp2m3',`j2p3m1`='$jp3m1',`j2p3m2`='$jp3m2',`j2p3m3`='$jp3m3',`j2p3m4`='$jp3m4',`j2p4m1`='$jp4m1',`j2p4m2`='$jp4m2',
                   `j2p5m1`='$jp5m1',`j2p5m2`='$jp5m2',`j2p5m3`='$jp5m3',`j2p5m4`='$jp5m4',`j2p5m5`='$jp5m5',`j2p5m6`='$jp5m6',`j2p5m7`='$jp5m7'WHERE code='$code'";
	}
	
    else if($_SESSION['role'] == 3){

			  $sql="UPDATE `project` SET `j3p1m1`='$jp1m1',`j3p1m2`='$jp1m2',`j3p1m3`='$jp1m3',`j3p1m4`='$jp1m4',`av3m`='$av',`j3p2m1`='$jp2m1',
             `j3p2m2`='$jp2m2',`j3p2m3`='$jp2m3',`j3p3m1`='$jp3m1',`j3p3m2`='$jp3m2',`j3p3m3`='$jp3m3',`j3p3m4`='$jp3m4',`j3p4m1`='$jp4m1',`j3p4m2`='$jp4m2',
             `j3p5m1`='$jp5m1',`j3p5m2`='$jp5m2',`j3p5m3`='$jp5m3',`j3p5m4`='$jp5m4',`j3p5m5`='$jp5m5',`j3p5m6`='$jp5m6',`j3p5m7`='$jp5m7'WHERE code='$code'";

		
	}



/*	}
	
	
	}*/
   
   
   
 	   $result =mysqli_query($db,$sql)or die(mysqli_error($db));
	 


	  // $result =mysqli_query($db,$sql)or die(mysqli_error($db));
          header("Location: dataPage.php");
	   
	   
	   
		 }
?>