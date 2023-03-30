<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
<title>FTE</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href= "style.css">

</head>

<body>
<div class= "container">
    <div class="box">
    <br><br>
        <h1 class = "text-white bg-primary"><strong>This form is for regular faculty members with 18 units.</h1></strong>
        <h2><strong>Note: BEFORE adding subjects, you MUST click INPUT first to record your data.</h2></strong><br><br>
        <form action="" method="POST" autocomplete="off">
     
            <label><strong><h4> What is your preferred time? (Choose only from 7:00 - 12:00)</h4></strong></label>
            <input type="text"name ="time" class = "form-control form-control-m" placeholder="Time to teach"><br>
          
           
            <h4><strong> You can only input 2 to 9 subjects only.</h4></strong>
            
            <label><strong><h4 class = "text-primary">Most preferred subject</h4></strong></label>
            <input type="text"name ="sub1" id = "input" class = "form-control form-control-m" placeholder="First preferred subject"><br><br>
			<ul class = "list"></ul>

            
            <button> INPUT </button>
            <br>
            <br>
            <a class="btn btn-success btn-lg" href="fte_2.php" role="button">ADD SUBJECTS</a>
            <a class="btn btn-danger btn-lg" href="delete.html" role="button">DELETE</a>    
            <a class="btn btn-secondary btn-lg" href="regular.php" role="button">BACK</a> 

        </form>  
		
        <script src = "script.js"></script>  
        
        
        
           
    
        

</div>

</body>

</html>

<?php

global $time;
global $sub1;
extract($_REQUEST);
$file=fopen("reg-18-units.txt", "a+");


fwrite($file, "Preferred time :");
fwrite($file, $time . "\n");
fwrite($file, "Most preferred subject :");
fwrite($file, $sub1 . "\n");

fwrite ($file, "\n");

?>

