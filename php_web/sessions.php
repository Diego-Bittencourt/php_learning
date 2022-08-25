<?php 
//the function below should be present in every age you want to user the session dat, both for writing and reading.
session_start();
// the function above creates a session file in the SERVER and sends a cookie referencing the session to the user's browser.
// when the user access the website again, you can get data from the session file in the server e do things.
//It is good to carry data to another page.
// the session can store more data than a cookie

$_SESSION['greeting'] = "Hello student";





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>