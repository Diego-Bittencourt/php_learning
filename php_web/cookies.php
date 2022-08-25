<?php 

//Everytime we visit a website, the site can store data in our broswer in the form of cookies. 
// There sis a super global variable called $_COOKIE;

//A cookie can be stored in a user's browser and when the user access the site again, we can offer the user personal UI/UX
	//setting a cookie
	$name = "SomeName";
	$value = 10;
	$expire = time() + (60*60*24*7);
	//the time function works counting secods from 1970、returns the current seconds counting
	setcookie($name, $value, $expire);

	//So I'm setting a cookie with the SomeName, 10 and this cookie is going to expire after one week.
    //You can set multiple cookies
	//accessing the $_COOKIE

	if(isset($_COOKIE['SomeName'])) {
	
		$someOne = $_COOKIE["SomeName"];
		print_r($_COOKIE);
	} else {
		$someOne = "";
	}

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