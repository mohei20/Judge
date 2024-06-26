   
   
   
   
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">

 
<!DOCTYPE html>

<html >

<?php
 include("config.php");
 session_start();
  $mycode =$_GET['Pcode']; 
  $_SESSION['code']=$mycode;
  $username= $_SESSION['username'];
  $userid = $_SESSION['userid'];

    $sql ="Select * from project WHERE code ='$mycode'and (j1id ='$userid' or j2id ='$userid' or j3id ='$userid')";
	
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_array($result)){



	
?>
 
	
 
	

<head>
  
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>




body {
  background-color: #D9D9D9;
  
}
  *{
	  
	   font-size: 14px;
	   font-family: Calibri;
  }
  
  
  
  .radioLeft {
	margin-left :100px;
    text-align: left;
    display:inline;
}
.main{
	
	margin-left :50px;
}

h1{
	font-size:25px;
}	
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.range{
font-size:50px;	
	
}
p {
  font-weight: bold;
}


</style>

    
  </head>
 







<body >


  <?php 
	
    $av=0;
  		
	if($row['j1id']==$_SESSION['userid']){
	  $_SESSION['role'] = "1";
      $total_av=$row['av1m'];
		
	}
	else if($row['j2id']==$_SESSION['userid']){
			  $_SESSION['role'] = "2";
              $total_av=$row['av2m'];
	}
	
    else if($row['j3id']==$_SESSION['userid']){
			  $_SESSION['role'] = "3";
			 $total_av=$row['av3m'];

		
	}     
   
  ?>
  
  
  
  <?php 
  
   ?>
 







 

    
  
      
     <div class="column" style="padding:50px" > 
	 <img class="center" src="JoYS Logo - Transparent.png" alt="moe" style="display: block;width:300px; height:100px">
	 <h1 style="text-align: center;  font-size: 26px;"><br>Judging Criteria Sheet 
         <br>-JoYS 2024-</h1>
     </div>
				  
				  
<div class="main-block">
<div class="column" >    
 
	
   <div class="range"  style=" text-align: left; "> <label style=" font-size:20px;	text-decoration: underline;">Judge Code: <?php echo $username;?> </label></div>
   <div class="range"  style=" text-align: left; "> <label style=" font-size:20px;	text-decoration: underline;">Project Code: <?php echo $mycode ;?> </label></div>

	
  </div>
   </div>
 

 <form  method="post">

<?php 
		$jp1m1="j". $_SESSION['role']."p1m1";
		$jp1m2="j". $_SESSION['role']."p1m2";
		$jp1m3="j". $_SESSION['role']."p1m3";
	    $jp1m4="j". $_SESSION['role']."p1m4";

		
		
		?>
<div class= "radioLeft">
  <h1>Research Question (20 Points)</h1>
  <p>Clear, focused goal (1-5)</p>
  <input type="radio" id="jp1m1" name="j<?php echo $_SESSION['role'];?>p1m1"   value="1" <?php echo ($row[$jp1m1]== '1') ?  "checked" : "" ;  ?> >
  <label for="p1m1">1- The goal is uninspiring and the motivation is poorly described </label><br>
  <input type="radio" id="jp1m1" name="j<?php echo $_SESSION['role'];?>p1m1" value="2" <?php echo ($row[$jp1m1]== '2') ?  "checked" : "" ;  ?>>
  <label for="p1m2">2 - A basic eﬀort has been made to describe the motivation </label><br>
  <input type="radio" id="jp1m1" name="j<?php echo $_SESSION['role'];?>p1m1" value="3" <?php echo ($row[$jp1m1]== '3') ?  "checked" : "" ;  ?>>
  <label for="p1m3">3 - The goal states the motivation for the research but does not inspire the reviewer </label><br>
  <input type="radio" id="jp1m1" name="j<?php echo $_SESSION['role'];?>p1m1" value="4" <?php echo ($row[$jp1m1]== '4') ?  "checked" : "" ;  ?>>
  <label for="p1m4">4 - The goal clearly demonstrates the motivation for the research and the reviewer' attention is held </label><br>
  <input type="radio" id="jp1m1" name="j<?php echo $_SESSION['role'];?>p1m1"  value="5" <?php echo ($row[$jp1m1]== '5') ?  "checked" : "" ;  ?>>
  <label for="p1m5">5 - The goal for the research is completely clear and eﬀectively presented. The goal immediately captures the attention of the reviewer </label><br>


  
  <p>Originality of the idea (1-5)</p>
  <input type="radio" id="jp1m2" name="j<?php echo $_SESSION['role'];?>p1m2"   value="1" <?php echo ($row[$jp1m2]== '1') ?  "checked" : "" ;  ?> >
  <label for="p2m1">1- The goal is uninspiring and the motivation is poorly described </label><br>
  <input type="radio" id="jp1m2" name="j<?php echo $_SESSION['role'];?>p1m2"   value="2" <?php echo ($row[$jp1m2]== '2') ?  "checked" : "" ;  ?>>
  <label for="p2m2">2 - A basic eﬀort has been made to describe the motivation </label><br>
  <input type="radio"  id="jp1m2" name="j<?php echo $_SESSION['role'];?>p1m2"   value="3" <?php echo ($row[$jp1m2]== '3') ?  "checked" : "" ;  ?>>
  <label for="p2m3">3 - The goal states the motivation for the research but does not inspire the reviewer </label><br>
  <input type="radio"  id="jp1m2" name="j<?php echo $_SESSION['role'];?>p1m2"   value="4" <?php echo ($row[$jp1m2]== '4') ?  "checked" : "" ;  ?>>
  <label for="p2m4">4 - The goal clearly demonstrates the motivation for the research and the reviewer' attention is held </label><br>
  <input type="radio"  id="jp1m2" name="j<?php echo $_SESSION['role'];?>p1m2"   value="5" <?php echo ($row[$jp1m2]== '5') ?  "checked" : "" ;  ?>>
  <label for="p2m5">5 - The goal for the research is completely clear and eﬀectively presented. The goal immediately captures the attention of the reviewer </label><br>

  <p>Testable using scientiﬁc methods (1-5)</p>
  <input type="radio"id="jp1m3" name="j<?php echo $_SESSION['role'];?>p1m3"   value="1" <?php echo ($row[$jp1m3]== '1') ?  "checked" : "" ;  ?> >
  <label >1 - Inaccurate and not testable using scientiﬁc methods</label><br>
  <input type="radio" id="jp1m3" name="j<?php echo $_SESSION['role'];?>p1m3"   value="2" <?php echo ($row[$jp1m3]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - It is inaccurate and needs a lot of modiﬁcation to be testable using scientiﬁc methods</label><br>
  <input type="radio" id="jp1m3" name="j<?php echo $_SESSION['role'];?>p1m3"   value="3" <?php echo ($row[$jp1m3]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - Accurate to an acceptable extent in need of some modiﬁcation to be testable using scientiﬁc methods</label><br>
  <input type="radio" id="jp1m3" name="j<?php echo $_SESSION['role'];?>p1m3"   value="4" <?php echo ($row[$jp1m3]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - Moderately accurate and partially testable using scientiﬁc methods</label><br>
  <input type="radio" id="jp1m3" name="j<?php echo $_SESSION['role'];?>p1m3"   value="5" <?php echo ($row[$jp1m3]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - Highly accurate and testable using scientiﬁc methods</label><br>


  <p>Sustainability of the project (1-5)</p>
  <input type="radio" id="jp1m4" name="j<?php echo $_SESSION['role'];?>p1m4"   value="1" <?php echo ($row[$jp1m4]== '1') ?  "checked" : "" ;  ?>>
  <label >1 - Project is not sustainable</label><br>
  <input type="radio"id="jp1m4" name="j<?php echo $_SESSION['role'];?>p1m4"   value="2" <?php echo ($row[$jp1m4]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - Project is sustainable depending on several factors</label><br>
  <input type="radio"  id="jp1m4" name="j<?php echo $_SESSION['role'];?>p1m4"   value="3" <?php echo ($row[$jp1m4]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - Project is sustainable in the short run, with limited opportunities to attract fund</label><br>
  <input type="radio"  id="jp1m4" name="j<?php echo $_SESSION['role'];?>p1m4"   value="4" <?php echo ($row[$jp1m4]== '4') ?  "checked" : "" ;  ?>>
  <label >4- Project is sustainable in the short term and may attract funding</label><br>
  <input type="radio"  id="jp1m4" name="j<?php echo $_SESSION['role'];?>p1m4"   value="5" <?php echo ($row[$jp1m4]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - Project is very sustainable, has a long-term vision and is high likely to attract funding</label><br>
  </div>
  
 
		

		<?php     

	    $jp1m1=(int)$row[$jp1m1];
	   	$jp1m2=(int)$row[$jp1m2];
	    $jp1m3=(int)$row[$jp1m3];
	    $jp1m4=(int)$row[$jp1m4];
	  


		$av1=($jp1m1+$jp1m2+$jp1m3+$jp1m4);
		
		
		
		
		?>
			
		<script> 
 $(document).ready(function(){

   $(function(){ 
   $('input[type=radio][id=jp1m1]').change(function() { 
   $('#av1').val('0'); 
    var  jp1m1= parseInt($('input[id=jp1m1]:checked').val());
    var  jp1m2= parseInt($('input[id=jp1m2]:checked').val());    
    var  jp1m3= parseInt($('input[id=jp1m3]:checked').val());    
    var  jp1m4= parseInt($('input[id=jp1m4]:checked').val());    
     
    
   var valThis =parseInt(jp1m1+jp1m2+jp1m3+jp1m4);

    $('#av1').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
 
 
}); 

$(function(){ 
   $('input[type=radio][id=jp1m2]').change(function() { 
   $('#av1').val('0'); 
    var  jp1m1= parseInt($('input[id=jp1m1]:checked').val());
    var  jp1m2= parseInt($('input[id=jp1m2]:checked').val());    
    var  jp1m3= parseInt($('input[id=jp1m3]:checked').val());    
    var  jp1m4= parseInt($('input[id=jp1m4]:checked').val());    
     
    
   var valThis =parseInt(jp1m1+jp1m2+jp1m3+jp1m4);

    $('#av1').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
 
 });
 
 
 $(function(){ 
   $('input[type=radio][id=jp1m3]').change(function() { 
   $('#av1').val('0'); 
    var  jp1m1= parseInt($('input[id=jp1m1]:checked').val());
    var  jp1m2= parseInt($('input[id=jp1m2]:checked').val());    
    var  jp1m3= parseInt($('input[id=jp1m3]:checked').val());    
    var  jp1m4= parseInt($('input[id=jp1m4]:checked').val());    
     
    
   var valThis =parseInt(jp1m1+jp1m2+jp1m3+jp1m4);

    $('#av1').val(valThis); 
	
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 


$(function(){ 
   $('input[type=radio][id=jp1m4]').change(function() { 
   $('#av1').val('0'); 
    var  jp1m1= parseInt($('input[id=jp1m1]:checked').val());
    var  jp1m2= parseInt($('input[id=jp1m2]:checked').val());    
    var  jp1m3= parseInt($('input[id=jp1m3]:checked').val());    
    var  jp1m4= parseInt($('input[id=jp1m4]:checked').val());    
     
    
   var valThis =parseInt(jp1m1+jp1m2+jp1m3+jp1m4);

    $('#av1').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 






});
        </script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="column" >
       <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong> Total</strong> </label>			  
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; " type="text"  id="av1" name="av1"    value=<?php echo $av1; ?> >
      
       </div>
    </div>




<!-----  part2 --->


   
<?php 
		$jp2m1="j". $_SESSION['role']."p2m1";
		$jp2m2="j". $_SESSION['role']."p2m2";
		$jp2m3="j". $_SESSION['role']."p2m3";
	  

		
		
		?>
		
		 <hr width="100%" size="5"color="gray">
<div class= "radioLeft">
  <h1>Methodology (15 points)</h1>
  <p>Eﬀective motivation. Accuracy and clarity of science. Level of knowledge and understanding of concepts (1-5)</p>
  <input type="radio" id="jp2m1" name="j<?php echo $_SESSION['role'];?>p2m1"   value="1" <?php echo ($row[$jp2m1]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The motivation for the research and the background science are completely lacking</label><br>
  <input type="radio" id="jp2m1" name="j<?php echo $_SESSION['role'];?>p2m1" value="2" <?php echo ($row[$jp2m1]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - The motivation for the research and the background science are poorly described</label><br>
  <input type="radio" id="jp2m1" name="j<?php echo $_SESSION['role'];?>p2m1" value="3" <?php echo ($row[$jp2m1]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - The motivation for the research and the background science are poorly described. Some of the relevant literature is cited, but there are signiﬁcant omissions</label><br>
  <input type="radio" id="jp2m1" name="j<?php echo $_SESSION['role'];?>p2m1" value="4" <?php echo ($row[$jp2m1]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The motivation for the research and the background science are adequately described, but clarity is lacking</label><br>
  <input type="radio" id="jp2m1" name="j<?php echo $_SESSION['role'];?>p2m1"  value="5" <?php echo ($row[$jp2m1]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - The motivation for the research and the background science are described clearly and comprehensively with/or no minor errors</label><br>


  
  <p>Data collection methods are speciﬁc and appropriate (1-5)</p>
  <input type="radio" id="jp2m2" name="j<?php echo $_SESSION['role'];?>p2m2"   value="1" <?php echo ($row[$jp2m2]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - There are no clear data collection methods</label><br>
  <input type="radio" id="jp2m2" name="j<?php echo $_SESSION['role'];?>p2m2"   value="2" <?php echo ($row[$jp2m2]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - Data collection methods are not speciﬁc and appropriate</label><br>
  <input type="radio"  id="jp2m2" name="j<?php echo $_SESSION['role'];?>p2m2"   value="3" <?php echo ($row[$jp2m2]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - Data collection methods are speciﬁc and reasonably appropriate  </label><br>
  <input type="radio"  id="jp2m2" name="j<?php echo $_SESSION['role'];?>p2m2"   value="4" <?php echo ($row[$jp2m2]== '4') ?  "checked" : "" ;  ?>>
  <label> 4 - Data collection methods are well deﬁned, appropriate and suﬃcient </label><br>
  <input type="radio"  id="jp2m2" name="j<?php echo $_SESSION['role'];?>p2m2"   value="5" <?php echo ($row[$jp2m2]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - Data collection methods are speciﬁc, appropriate, varied and adequate and at high standard</label><br>

  <p>Variables and controls (1-5)</p>
  <input type="radio"id="jp2m3" name="j<?php echo $_SESSION['role'];?>p2m3"   value="1" <?php echo ($row[$jp2m3]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The variables and controls are not speciﬁed, inappropriate and incomplete</label><br>
  <input type="radio"id="jp2m3" name="j<?php echo $_SESSION['role'];?>p2m3"   value="2" <?php echo ($row[$jp2m3]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - The variables and controls are speciﬁc, appropriate and complete to a weak extent</label><br>
  <input type="radio"id="jp2m3" name="j<?php echo $_SESSION['role'];?>p2m3"   value="3" <?php echo ($row[$jp2m3]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - The variables and controls are speciﬁc, appropriate and complete to an acceptable extent</label><br>
  <input type="radio"id="jp2m3" name="j<?php echo $_SESSION['role'];?>p2m3"   value="4" <?php echo ($row[$jp2m3]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The variables and controls are speciﬁc, appropriate and complete to a good extent</label><br>
  <input type="radio"id="jp2m3" name="j<?php echo $_SESSION['role'];?>p2m3"   value="5" <?php echo ($row[$jp2m3]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - Variables and controls are speciﬁed, appropriate and substantially complete to an excellent extent</label><br>


  
  
 
		

		<?php     

	    $jp2m1=(int)$row[$jp2m1];
	   	$jp2m2=(int)$row[$jp2m2];
	    $jp2m3=(int)$row[$jp2m3];
	   
		$av2=($jp2m1+$jp2m2+$jp2m3);
		
		
		
		
		?>
			
		<script> 
 $(document).ready(function(){

   $(function(){ 
   $('input[type=radio][id=jp2m1]').change(function() { 
   $('#av2').val('0'); 
    var  jp2m1= parseInt($('input[id=jp2m1]:checked').val());
    var  jp2m2= parseInt($('input[id=jp2m2]:checked').val());    
    var  jp2m3= parseInt($('input[id=jp2m3]:checked').val());    
    
     
    
   var valThis =parseInt(jp2m1+jp2m2+jp2m3);

    $('#av2').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 

$(function(){ 
   $('input[type=radio][id=jp2m2]').change(function() { 
   $('#av2').val('0'); 
    var  jp2m1= parseInt($('input[id=jp2m1]:checked').val());
    var  jp2m2= parseInt($('input[id=jp2m2]:checked').val());    
    var  jp2m3= parseInt($('input[id=jp2m3]:checked').val());    
    
     
    
   var valThis =parseInt(jp2m1+jp2m2+jp2m3);

    $('#av2').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 
 
 
 $(function(){ 
   $('input[type=radio][id=jp2m3]').change(function() { 
   $('#av2').val('0'); 
    var  jp2m1= parseInt($('input[id=jp2m1]:checked').val());
    var  jp2m2= parseInt($('input[id=jp2m2]:checked').val());    
    var  jp2m3= parseInt($('input[id=jp2m3]:checked').val());    
    
     
    
   var valThis =parseInt(jp2m1+jp2m2+jp2m3);

    $('#av2').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 

});
        </script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="column" >  
       <label style=" display: inline-block; width: 150px;   text-align: center;   "><strong> Total</strong> </label>			  
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px;    " type="text"  id="av2" name="av2"    value=<?php echo $av2; ?> >
      
       </div>
    </div>







<!-----  part3 --->


   
<?php 
		$jp3m1="j". $_SESSION['role']."p3m1";
		$jp3m2="j". $_SESSION['role']."p3m2";
		$jp3m3="j". $_SESSION['role']."p3m3";
	  	$jp3m4="j". $_SESSION['role']."p3m4";
		
		
	
		?>
				 <hr width="100%" size="5"color="gray">

		
<div class= "radioLeft">
  <h1>Implementation (20 points)</h1>
  <p>Systematic data analysis (1-5)</p>
  <input type="radio" id="jp3m1" name="j<?php echo $_SESSION['role'];?>p3m1"   value="1" <?php echo ($row[$jp3m1]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The data analysis and interpretation are largely incorrect</label><br>
  <input type="radio" id="jp3m1" name="j<?php echo $_SESSION['role'];?>p3m1"   value="2" <?php echo ($row[$jp3m1]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - There are signiﬁcant errors in the data analysis and interpretation </label><br>
  <input type="radio" id="jp3m1" name="j<?php echo $_SESSION['role'];?>p3m1"   value="3" <?php echo ($row[$jp3m1]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - There are moderate errors in data analysis and interpretation</label><br>
  <input type="radio" id="jp3m1" name="j<?php echo $_SESSION['role'];?>p3m1"   value="4" <?php echo ($row[$jp3m1]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The data analysis and interpretation are generally good, but there are some errors</label><br>
  <input type="radio" id="jp3m1" name="j<?php echo $_SESSION['role'];?>p3m1"   value="5" <?php echo ($row[$jp3m1]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - The data analysis and interpretation are very good with/ or without minor errors</label><br>


  
  <p>The consistency of the results (1-5)</p>
  <input type="radio" id="jp3m2" name="j<?php echo $_SESSION['role'];?>p3m2"   value="1" <?php echo ($row[$jp3m2]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The results are not consistent with each other and do not achieve the objective of the study</label><br>
  <input type="radio" id="jp3m2" name="j<?php echo $_SESSION['role'];?>p3m2"   value="2" <?php echo ($row[$jp3m2]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - The results are consistent with each other, but they do not achieve the objective of the study with multiple errors</label><br>
  <input type="radio" id="jp3m2" name="j<?php echo $_SESSION['role'];?>p3m2"   value="3" <?php echo ($row[$jp3m2]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - The results are consistent with each other and achieve the objective of the study to an acceptable extent with few errors</label><br>
  <input type="radio" id="jp3m2" name="j<?php echo $_SESSION['role'];?>p3m2"   value="4" <?php echo ($row[$jp3m2]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The results are consistent with each other and achieve the objective of the study to an average extent with very few errors</label><br>
  <input type="radio" id="jp3m2" name="j<?php echo $_SESSION['role'];?>p3m2"   value="5" <?php echo ($row[$jp3m2]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - The results are consistent with each other and achieve the goal of the study to an excellent extent</label><br>

  <p>Appropriate mathematical and statistical methods application (1-5)</p>
  <input type="radio"id="jp3m3" name="j<?php echo $_SESSION['role'];?>p3m3"   value="1" <?php echo ($row[$jp3m3]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The mathematical and statistical methods used in the report are far below acceptable </label><br>
  <input type="radio"id="jp3m3" name="j<?php echo $_SESSION['role'];?>p3m3"   value="2" <?php echo ($row[$jp3m3]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - The mathematical and statistical methods used in the report are less than acceptable</label><br>
  <input type="radio"id="jp3m3" name="j<?php echo $_SESSION['role'];?>p3m3"   value="3" <?php echo ($row[$jp3m3]== '3') ?  "checked" : "" ;  ?>>
  <label>3. The mathematical and statistical methods used in the report are appropriate, but there are signiﬁcant shortcomings</label><br>
  <input type="radio"id="jp3m3" name="j<?php echo $_SESSION['role'];?>p3m3"   value="4" <?php echo ($row[$jp3m3]== '4') ?  "checked" : "" ;  ?>>
  <label>4. The mathematical and statistical methods used in the report are adequate, but there are slight shortcomings</label><br>
  <input type="radio"id="jp3m3" name="j<?php echo $_SESSION['role'];?>p3m3"   value="5" <?php echo ($row[$jp3m3]== '5') ?  "checked" : "" ;  ?>>
  <label>5. The mathematical and statistical methods used in the report either are appropriate, but there are very slight Shortcomings or are perfect</label><br>

   <p>Scope and clarity of introduction, background and literature cited (1-5)</p>
  <input type="radio"id="jp3m4" name="j<?php echo $_SESSION['role'];?>p3m4"   value="1" <?php echo ($row[$jp3m4]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - Very little of the relevant literature is cited</label><br>
  <input type="radio"id="jp3m4" name="j<?php echo $_SESSION['role'];?>p3m4"   value="2" <?php echo ($row[$jp3m4]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - Some of the relevant literature is cited, but there are signiﬁcant omissions. The report demonstrates little knowledge and understanding</label><br>
  <input type="radio"id="jp3m4" name="j<?php echo $_SESSION['role'];?>p3m4"   value="3" <?php echo ($row[$jp3m4]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - Some of the relevant literature is cited, but there are signiﬁcant omissions</label><br>
  <input type="radio"id="jp3m4" name="j<?php echo $_SESSION['role'];?>p3m4"   value="4" <?php echo ($row[$jp3m4]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The report is mostly concise and largely avoids superﬂuous detail. Most of the relevant literature is cited with only minor omissions</label><br>
  <input type="radio"id="jp3m4" name="j<?php echo $_SESSION['role'];?>p3m4"   value="5" <?php echo ($row[$jp3m4]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - The report describes research which makes a good contribution to the ﬁeld. The relevant literature is cited correctly</label><br>




		<?php     

	    $jp3m1=(int)$row[$jp3m1];
	   	$jp3m2=(int)$row[$jp3m2];
	    $jp3m3=(int)$row[$jp3m3];
	    $jp3m4=(int)$row[$jp3m4];

	  


		$av3=($jp3m1+$jp3m2+$jp3m3+$jp3m4);
		
		
		
		
		?>

  
  
 

			
<script> 
 $(document).ready(function(){

   $(function(){ 
   $('input[type=radio][id=jp3m1]').change(function() { 
   $('#av3').val('0'); 
    var  jp3m1= parseInt($('input[id=jp3m1]:checked').val());
    var  jp3m2= parseInt($('input[id=jp3m2]:checked').val());    
    var  jp3m3= parseInt($('input[id=jp3m3]:checked').val());    
    var  jp3m4= parseInt($('input[id=jp3m4]:checked').val());    

     
    
   var valThis =parseInt(jp3m1+jp3m2+jp3m3+jp3m4);

    $('#av3').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 

 $(function(){ 
   $('input[type=radio][id=jp3m2]').change(function() { 
   $('#av3').val('0'); 
    var  jp2m1= parseInt($('input[id=jp3m1]:checked').val());
    var  jp2m2= parseInt($('input[id=jp3m2]:checked').val());    
    var  jp2m3= parseInt($('input[id=jp3m3]:checked').val());    
    var  jp2m4= parseInt($('input[id=jp3m4]:checked').val());    

     
    
   var valThis =parseInt(jp2m1+jp2m2+jp2m3+jp2m4);

    $('#av3').val(valThis); 
	
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
 }); 
 
 $(function(){ 
   $('input[type=radio][id=jp3m3]').change(function() { 
   $('#av3').val('0'); 
     var  jp3m1= parseInt($('input[id=jp3m1]:checked').val());
    var  jp3m2= parseInt($('input[id=jp3m2]:checked').val());    
    var  jp3m3= parseInt($('input[id=jp3m3]:checked').val());    
    var  jp3m4= parseInt($('input[id=jp3m4]:checked').val());    

     
    
   var valThis =parseInt(jp3m1+jp3m2+jp3m3+jp3m4);
     
   

    $('#av3').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
 }); 
 
 
  $(function(){ 
   $('input[type=radio][id=jp3m4]').change(function() { 
   $('#av3').val('0'); 
     var  jp3m1= parseInt($('input[id=jp3m1]:checked').val());
    var  jp3m2= parseInt($('input[id=jp3m2]:checked').val());    
    var  jp3m3= parseInt($('input[id=jp3m3]:checked').val());    
    var  jp3m4= parseInt($('input[id=jp3m4]:checked').val());    

     
    
   var valThis =parseInt(jp3m1+jp3m2+jp3m3+jp3m4);

    $('#av3').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
}); 
});
        </script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="column" > 
       <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong> Total</strong> </label>			  
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; " type="text"  id="av3" name="av3"    value=<?php echo $av3; ?> >
       
       </div>
    </div>




<!-----  part4 --->


   
<?php 
		$jp4m1="j". $_SESSION['role']."p4m1";
		$jp4m2="j". $_SESSION['role']."p4m2";
		
		
		
	
		?>
		
				 <hr width="100%" size="5"color="gray">

<div class= "radioLeft">
  <h1>Report & Poster Standards (10 points)</h1>
  <p>Commitment to Report Writing Standards</p>
  <input type="radio" id="jp4m1" name="j<?php echo $_SESSION['role'];?>p4m1"   value="1" <?php echo ($row[$jp4m1]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - Three or more items are not presented </label><br>
  <input type="radio" id="jp4m1" name="j<?php echo $_SESSION['role'];?>p4m1"   value="2" <?php echo ($row[$jp4m1]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - Two items are not presented</label><br>
  <input type="radio" id="jp4m1" name="j<?php echo $_SESSION['role'];?>p4m1"   value="3" <?php echo ($row[$jp4m1]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - one item is not presented</label><br>
  <input type="radio" id="jp4m1" name="j<?php echo $_SESSION['role'];?>p4m1"   value="4" <?php echo ($row[$jp4m1]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - All items are presented</label><br>
  <input type="radio" id="jp4m1" name="j<?php echo $_SESSION['role'];?>p4m1"   value="5" <?php echo ($row[$jp4m1]== '4') ?  "checked" : "" ;  ?>>
  <label>5 - All items are presented, report is outstanding</label><br>


  
  <p>Commitment to Poster Writing Standards </p>
  <input type="radio" id="jp4m2" name="j<?php echo $_SESSION['role'];?>p4m2"   value="1" <?php echo ($row[$jp4m2]== '1') ?  "checked" : "" ;  ?>>
  <label>1 -Three or more items are not presented </label><br>
  <input type="radio" id="jp4m2" name="j<?php echo $_SESSION['role'];?>p4m2"   value="2" <?php echo ($row[$jp4m2]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - Two items are not presented</label><br>
  <input type="radio" id="jp4m2" name="j<?php echo $_SESSION['role'];?>p4m2"   value="3" <?php echo ($row[$jp4m2]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - one item is not presented</label><br>
  <input type="radio" id="jp4m2" name="j<?php echo $_SESSION['role'];?>p4m2"   value="4" <?php echo ($row[$jp4m2]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - All items are presented</label><br>
  <input type="radio" id="jp4m2" name="j<?php echo $_SESSION['role'];?>p4m2"   value="5" <?php echo ($row[$jp4m2]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - All items are presented, poster is outstanding</label><br>




		<?php     

	    $jp4m1=(int)$row[$jp4m1];
	   	$jp4m2=(int)$row[$jp4m2];
	   

	  


		$av4=($jp4m1+$jp4m2);
		
		
		
		
		?>

  
  
 

			
		<script> 
 $(document).ready(function(){

   $(function(){ 
   $('input[type=radio][id=jp4m1]').change(function() { 
   $('#av4').val('0'); 
    var  jp4m1= parseInt($('input[id=jp4m1]:checked').val());
    var  jp4m2= parseInt($('input[id=jp4m2]:checked').val());    
       

     
    
   var valThis =parseInt(jp4m1+jp4m2);

    $('#av4').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 

 $(function(){ 
   $('input[type=radio][id=jp4m2]').change(function() { 
   $('#av4').val('0'); 
    var  jp4m1= parseInt($('input[id=jp4m1]:checked').val());
    var  jp4m2= parseInt($('input[id=jp4m2]:checked').val());    
        
   var valThis =parseInt(jp4m1+jp4m2);

    $('#av4').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });
 }); 
 

});
        </script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="column" >  
       <label style=" display: inline-block; width: 150px;   text-align: center;    "><strong> Total</strong> </label>			  
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px;   " type="text"  id="av4" name="av4"    value=<?php echo $av4; ?> >
       
       </div>

     </div>




<!-----  part5 --->


   
<?php 
		$jp5m1="j". $_SESSION['role']."p5m1";
		$jp5m2="j". $_SESSION['role']."p5m2";
		$jp5m3="j". $_SESSION['role']."p5m3";
		$jp5m4="j". $_SESSION['role']."p5m4";
		$jp5m5="j". $_SESSION['role']."p5m5";
		$jp5m6="j". $_SESSION['role']."p5m6";
		$jp5m7="j". $_SESSION['role']."p5m7";
		
	
		?>
		
		<hr width="100%" size="5"color="gray">
<div class= "radioLeft">
  <h1>The Presentation (35 points)</h1>
  <p>1 - The student(s) demonstrates no evidence of mastery of the underlying science</p>
  <input type="radio" id="jp5m1" name="j<?php echo $_SESSION['role'];?>p5m1"   value="1" <?php echo ($row[$jp5m1]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - The student(s) demonstrates no evidence of mastery of the underlying science</label><br>
  <input type="radio" id="jp5m1" name="j<?php echo $_SESSION['role'];?>p5m1"   value="2" <?php echo ($row[$jp5m1]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - The student(s) demonstrates a good grasp of the underlying science, but there are many errors </label><br>
  <input type="radio" id="jp5m1" name="j<?php echo $_SESSION['role'];?>p5m1"   value="3" <?php echo ($row[$jp5m1]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - The student(s) demonstrates an acceptable grasp of the underlying science, but with some errors </label><br>
  <input type="radio" id="jp5m1" name="j<?php echo $_SESSION['role'];?>p5m1"   value="4" <?php echo ($row[$jp5m1]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - The student(s) demonstrates a good grasp of the underlying science, but there are minor errors</label><br>
  <input type="radio" id="jp5m1" name="j<?php echo $_SESSION['role'];?>p5m1"   value="5" <?php echo ($row[$jp5m1]== '4') ?  "checked" : "" ;  ?>>
  <label>5 - The student(s) demonstrates complete mastery of the underlying science</label><br>


  
  <p>Conciseness, accuracy, and eﬀective communication of the project details</p>
  <input type="radio" id="jp5m2" name="j<?php echo $_SESSION['role'];?>p5m2"   value="1" <?php echo ($row[$jp5m2]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - There are serious ﬂaws in the presentation</label><br>
  <input type="radio" id="jp5m2" name="j<?php echo $_SESSION['role'];?>p5m2"   value="2" <?php echo ($row[$jp5m2]== '2') ?  "checked" : "" ;  ?>>
  <label>2 - There are major digressions in the case presented by the student</label><br>
  <input type="radio" id="jp5m2" name="j<?php echo $_SESSION['role'];?>p5m2"   value="3" <?php echo ($row[$jp5m2]== '3') ?  "checked" : "" ;  ?>>
  <label>3 - The presentation is logically structured on the whole, but there are some serious digressions </label><br>
  <input type="radio" id="jp5m2" name="j<?php echo $_SESSION['role'];?>p5m2"   value="4" <?php echo ($row[$jp5m2]== '4') ?  "checked" : "" ;  ?>>
  <label>4 - A clear and logical argument runs throughout the presentation, but there are minor digressions</label><br>
  <input type="radio" id="jp5m2" name="j<?php echo $_SESSION['role'];?>p5m2"   value="5" <?php echo ($row[$jp5m2]== '5') ?  "checked" : "" ;  ?>>
  <label>5 - A clear and logical argument runs throughout the presentation</label><br>



  <p>Understand the interpretation and determinants of the results and conclusions</p>
  <input  type="radio"id="jp5m3" name="j<?php echo $_SESSION['role'];?>p5m3"   value="1" <?php echo ($row[$jp5m3]== '1') ?  "checked" : "" ;  ?>  >
  <label >1- Students show a lack of understanding of the interpretation and the determinants of results and conclusions</label><br>
  <input type="radio" id="jp5m3" name="j<?php echo $_SESSION['role'];?>p5m3"   value="2" <?php echo ($row[$jp5m3]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - Students demonstrate a basic understanding of the interpretation and determinants of results and conclusions</label><br>
  <input type="radio" id="jp5m3" name="j<?php echo $_SESSION['role'];?>p5m3"   value="3" <?php echo ($row[$jp5m3]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - Students show an acceptable understanding of the interpretation and determinants of the results and conclusions</label><br>
  <input type="radio" id="jp5m3" name="j<?php echo $_SESSION['role'];?>p5m3"   value="4" <?php echo ($row[$jp5m3]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - Students show an average understanding of interpretation and determinants of results and conclusions</label><br>
  <input type="radio" id="jp5m3" name="j<?php echo $_SESSION['role'];?>p5m3"   value="5" <?php echo ($row[$jp5m3]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - Students show a very high understanding of the interpretation and determinants of results and conclusions</label><br>


  <p>Independence level during project implementation</p>
  <input type="radio" id="jp5m4" name="j<?php echo $_SESSION['role'];?>p5m4"   value="1" <?php echo ($row[$jp5m4]== '1') ?  "checked" : "" ;  ?>>
  <label >1 - Level of independence does not existent. External assistance has been relied upon to a large extent</label><br>
  <input type="radio"id="jp5m4" name="j<?php echo $_SESSION['role'];?>p5m4"   value="2" <?php echo ($row[$jp5m4]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - Level of independence is acceptable. External assistance has been relied upon to an acceptable extent</label><br>
  <input type="radio"  id="jp5m4" name="j<?php echo $_SESSION['role'];?>p5m4"   value="3" <?php echo ($row[$jp5m4]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - Level of independence is average. External assistance was relied upon to a small extent</label><br>
  <input type="radio"  id="jp5m4" name="j<?php echo $_SESSION['role'];?>p5m4"   value="4" <?php echo ($row[$jp5m4]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - Level of independence is good. External assistance has been relied upon to a very small extent</label><br>
  <input type="radio"  id="jp5m4" name="j<?php echo $_SESSION['role'];?>p5m4"   value="5" <?php echo ($row[$jp5m4]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - Level of independence of the students in the implementation is high. External assistance has been relied upon to either a  negligible extent or zero</label><br>

  
  
  
  
  <p>Presentation of the workﬂow plan within the time allocated</p>
  <input type="radio"id="jp5m5" name="j<?php echo $_SESSION['role'];?>p5m5"   value="1" <?php echo ($row[$jp5m5]== '1') ?  "checked" : "" ;  ?>>
  <label >1 - Workﬂow plan is not clear and the project steps are not shown</label><br>
  <input type="radio" id="jp5m5" name="j<?php echo $_SESSION['role'];?>p5m5"   value="2" <?php echo ($row[$jp5m5]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - Workﬂow plan is almost clear and shows the steps of the project to a general extent </label><br>
  <input type="radio" id="jp5m5" name="j<?php echo $_SESSION['role'];?>p5m5"   value="3" <?php echo ($row[$jp5m5]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - Workﬂow plan is acceptable and the project steps are shown to an average extent </label><br>
  <input type="radio" id="jp5m5" name="j<?php echo $_SESSION['role'];?>p5m5"   value="4" <?php echo ($row[$jp5m5]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - Workﬂow plan is good and clearly shows the steps of the project</label><br>
  <input type="radio" id="jp5m5" name="j<?php echo $_SESSION['role'];?>p5m5"   value="5" <?php echo ($row[$jp5m5]== '5') ?  "checked" : "" ;  ?>>
  <label > 5 - Workﬂow plan is comprehensive and shows the steps of the project to a detailed extent</label><br>


  <p>Recognition of creativity and potential impact in science, society and/or economics</p>
  <input type="radio" id="jp5m6" name="j<?php echo $_SESSION['role'];?>p5m6"   value="1" <?php echo ($row[$jp5m6]== '1') ?  "checked" : "" ;  ?>>
  <label >1 - Project idea does not address a social issue</label><br>
  <input type="radio"id="jp5m6" name="j<?php echo $_SESSION['role'];?>p5m6"   value="2" <?php echo ($row[$jp5m6]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - Project addresses a social need indirectly</label><br>
  <input type="radio"  id="jp5m6" name="j<?php echo $_SESSION['role'];?>p5m6"   value="3" <?php echo ($row[$jp5m6]== '3') ?  "checked" : "" ;  ?>>
  <label > 3 - Project addresses a social need in a better way than existing solutions</label><br>
  <input type="radio"  id="jp5m6" name="j<?php echo $_SESSION['role'];?>p5m6"   value="4" <?php echo ($row[$jp5m6]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - Project improves an existing solution in a novel way & has impact</label><br>
  <input type="radio"  id="jp5m6" name="j<?php echo $_SESSION['role'];?>p5m6"   value="5" <?php echo ($row[$jp5m6]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - Project provides a new solution & has high impact</label><br>
  
  
  
  
  <p>Suﬃcient understanding of the research's risk and errors sources</p>
  <input type="radio"id="jp5m7" name="j<?php echo $_SESSION['role'];?>p5m7"   value="1" <?php echo ($row[$jp5m7]== '1') ?  "checked" : "" ;  ?>>
  <label>1 - There is no apparent awareness of the sources of errors, and several of them have occurred </label><br>
  <input type="radio" id="jp5m7" name="j<?php echo $_SESSION['role'];?>p5m7"   value="2" <?php echo ($row[$jp5m7]== '2') ?  "checked" : "" ;  ?>>
  <label >2 - There is an acceptable awareness of the sources of errors, and a small number have occurred </label><br>
  <input type="radio" id="jp5m7" name="j<?php echo $_SESSION['role'];?>p5m7"   value="3" <?php echo ($row[$jp5m7]== '3') ?  "checked" : "" ;  ?>>
  <label >3 - There is awareness of the sources of mistakes, and a few of them have been avoided</label><br>
  <input type="radio" id="jp5m7" name="j<?php echo $_SESSION['role'];?>p5m7"   value="4" <?php echo ($row[$jp5m7]== '4') ?  "checked" : "" ;  ?>>
  <label >4 - There is a good awareness of the sources of errors, and many of them have been avoided </label><br>
  <input type="radio" id="jp5m7" name="j<?php echo $_SESSION['role'];?>p5m7"   value="5" <?php echo ($row[$jp5m7]== '5') ?  "checked" : "" ;  ?>>
  <label >5 - There is a high awareness of the sources of errors, and most/all of them have been avoided</label><br>

    </div>

  






		<?php     

	    $jp5m1=(int)$row[$jp5m1];
	   	$jp5m2=(int)$row[$jp5m2];
		$jp5m3=(int)$row[$jp5m3];
	   	$jp5m4=(int)$row[$jp5m4];
		$jp5m5=(int)$row[$jp5m5];
	   	$jp5m6=(int)$row[$jp5m6];
		$jp5m7=(int)$row[$jp5m7];
	   

	  


		$av5=($jp5m1+$jp5m2+$jp5m3+$jp5m4+$jp5m5+$jp5m6+$jp5m7);
		
		
	7
		
		?>

  
  
 

			
		<script> 
 $(document).ready(function(){

   $(function(){ 
   $('input[type=radio][id=jp5m1]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 



$(function(){ 
   $('input[type=radio][id=jp5m2]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 


$(function(){ 
   $('input[type=radio][id=jp5m3]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 

$(function(){ 
   $('input[type=radio][id=jp5m4]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 


$(function(){ 
   $('input[type=radio][id=jp5m5]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 


$(function(){ 
   $('input[type=radio][id=jp5m6]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
 });

}); 



$(function(){ 
   $('input[type=radio][id=jp5m7]').change(function() { 
   $('#av5').val('0'); 
    var  jp5m1= parseInt($('input[id=jp5m1]:checked').val());
    var  jp5m2= parseInt($('input[id=jp5m2]:checked').val()); 
    var  jp5m3= parseInt($('input[id=jp5m3]:checked').val());   	
    var  jp5m4= parseInt($('input[id=jp5m4]:checked').val());   
    var  jp5m5= parseInt($('input[id=jp5m5]:checked').val());   
    var  jp5m6= parseInt($('input[id=jp5m6]:checked').val());   
    var  jp5m7= parseInt($('input[id=jp5m7]:checked').val());   	

     
    
   var valThis =parseInt(jp5m1+jp5m2+jp5m3+jp5m4+jp5m5+jp5m6+jp5m7);

    $('#av5').val(valThis); 
	
	var totalval =parseInt($('#av1').val())+parseInt($('#av2').val())+parseInt($('#av3').val())+parseInt($('#av4').val())+parseInt($('#av5').val());
	$('#total_av').val(totalval); 
	
	
	
	
 });


}); 


}); 








        </script>
		
		  
		  
			<div style="width:70%">
              <div class="column" >     
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; " type="text"  id="av5" name="av5"    value=<?php echo $av5; ?> >
       <label style=" display: inline-block; width: 150px;   text-align: center;  float:left   "><strong> Total</strong> </label>
       </div>
    </div>
   
   		 <hr width="100%" size="5"color="gray">

   
   <div style="width:70%">
              <div class="column" >     
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; background-color:#d1f3c5;" type="text"  id="total_av"  name="total_av"    value=<?php echo $total_av; ?> >
       <label style=" display: inline-block; width: 150px;   text-align: center;  float:left  "><strong> Overall Score: </strong> </label>
       </div>
    </div>
   
   
   
   
   
   
   </div>

























			 
           <?php
    $myid = $_SESSION['id'];
     if($myid!=0){

		 ?>
 
		      		 <button type="submit" formaction="export.php">ترحيل</button>

	  <?php
               }

      else{
	?>
	             <button type="submit" formaction="insert.php">حفظ</button>


     <?php
          }
	
	
?>
			 
            </div>
		  
		        
				
				
				
    </form>
</div>







 <?php }
 

	
	
?>
			 
            </div>
		  
		      
				
				
    </form>
</div>


<?php }

	
	

	
?>

</div>
</div>

</body>
  
 
</html>