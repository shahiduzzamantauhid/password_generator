<?php 
include_once"funcktion.php";
$task='encode';
if(isset($_GET['task']) && $_GET['task']!=''){
    $task=$_GET['task'];
}
$key='abcdefghijklmnopqrstuvwxyz1234567890!@#%^&*+-';
if('key'==$task){
    $key_original= str_split($key);
    shuffle($key_original);
    $key = join('',$key_original);
}else if(isset($_POST['key']) && $_POST['key']!==''){
    $key=$_POST['key'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator by php</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="raw">
            <div class="column column-60 column-offset-20">
            <div class="header">
            <h1>PASSWORD ENCODER GENATARATOR </h1>
        </div>
        
          <p>  
            <a href="index.php/?task=key">Generate Password</a>
            </p>
        
        <div class="raw">
        <div class="column column-60 column-offset-20">
        <form method="post" action="index.php">

    <label for="key">Take Your Password</label>
    <input type="text" name="key" id="key" <?php display_key($key);?> >
    
    

</form>
        </div>
        </div>
            </div>
        </div>
        
    </div>
</body>
</html>
