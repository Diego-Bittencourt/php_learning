<?php 

print_r($_GET);
//Its a super global which means is avaible everywhere, inside and outside functions.
// It prints Array (); Its an empty associate array
//This super global variable takes ur parameters. The url parameters are passed in the url after the ? mark and each parameter is separated by &
//Ex.: www.somepage.com/home/thispage.php?id=10&color=blue&price=199
// The parameters are id = 10, color = blue and price = 199
//more than that, you can intercalate html and php to create dynamic links and parameters
	//lets create two variables?
	$id = 69;
	$button = "U'now what to do.";
    //Those variables are being inserted dynamically in the html by interchanging php tags inside html
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
<a href="9.php?futura_profissao=engenheiro_de_software&quando=este_ano">Link</a>
<!-- hardcodedparameters -->
	<a href="9.php?id=<?php echo $id;?>"><?php echo $button;?></a>
</body>
</html>

<?php 

	
	
	

	
