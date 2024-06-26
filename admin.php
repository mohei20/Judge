<?php
 include("config.php");
 session_start();
?> 
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">

 
<!DOCTYPE html>

<html dir="rtl" lang="ar">


<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
	.cpu_table{
		 width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
	}
	table, th, td {
  border:1px solid black;
   }
      html, body {
      min-height: 30%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 19px;
      color: #8ebf42;
      }
      h1 {
      margin: 0;
	  font-size: 19px;
	        padding: 0;


      }
      h3 {
      margin: 12px 0;
      color: #8ebf42;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      }
      form {
      width: 100%;
      padding: 10px;
      }
      fieldset {
      border: none;
      }
      .account-details, .tec-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .account-details >div, .tec-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .account-details >div, .tec-details >div, input, label,textarea {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      
	 
      .checkbox {
      margin-bottom: 10px;
      }
      select, .range, .gender, .bdate-block {
      width: calc(100% + 20px);
      padding: 7px 0;
      }
      select {
      background: transparent;
      }
      .gender input {
      width: auto;
      } 
      .gender label {
      padding: 0 5px 0 0;
      } 
      .bdate-block {
      display: flex;
      justify-content: space-between;
      }
      .birthdate select.day {
      width: 35px;
      }
      .birthdate select.city {
      width: calc(100% - 230px);
      }
      .birthdate input {
      width: 38px;
      vertical-align: unset;
      }
      .checkbox input, .range input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color: #8ebf42;
      }
      .checkbox a:hover {
      color: #82b534;
      }
      button {
      width: 10%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #8ebf42; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
	  
      @media (min-width: 568px) {
	 .account-details >div {
      width: 50%;
      }
      label {
      width: 20%;
      }
      input {
      width: 40%;
      }
      select, .range, .gender, .bdate-block {
      width: calc(50% + 10px);
      }
	  }
	  
	    @media (min-width: 568px) {
	  .tec-details >div {
      width: 50%;
      }
      label {
      width: 20%;
      }
     
	   textarea{
		  align-content:center;
		
	  }
      select, .range, .gender, .bdate-block {
      width: calc(70% + 16px);
      }
	  }
     
	 
	  
 
    </style>
  </head>
 





<body >
  
   	<img style="width:400px; height:150px" src="JoYS Logo - Transparent.png" alt="" >

<div class="main-block">
<form  method="post">
  <button type="submit" formaction="export.php">ترحيل</button>
</form>
       
</div>


<script>




 </script>




</body>
  
 
 
 
</html>