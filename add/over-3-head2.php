<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
<title>Head/Admin with 3 overload units</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class= "container">
    <div class="box">
    <br><br>
        <h1><strong>This form is for head/admin with 3 units for OVERLOAD.</h1></strong>
        <form action="">
        <a class="btn btn-danger btn-lg" href="over-3-head2.php" role="button">OVERLOAD</a>
        <?php
        header ("Location: head.php?overload_success!")
        ?>
            <br>
            <br>
           
            <a class="btn btn-secondary btn-lg" href="overload-head2.php" role="button">Back</a> 

        </form>  

</div>

</body>
</html>
<?php
global $txt;
extract($_REQUEST);
$file=fopen("head-6-units.txt", "a+");
$txt = "OVERLOAD UNIT: 3 units";
fwrite ($file, $txt);


?>



