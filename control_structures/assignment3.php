<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php

    

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
	$number = 1;
	if ($number > 10) {
		echo "Nothing here";

	} elseif ($number === 10){
		// Accidentally, I use a single = in the if statement that is an assignment operator and it changed the variable
		// and broke the whole code. lol.
		echo "Still nothing here";
	} else {
		echo "I love PHP";
	}

	echo "<br>";

	for ($counter = 0; $counter < 10; $counter++) {
		echo $counter;
	}
	
	echo "<br>";

	switch($number) {
		case 5:
		echo "It's five";
		break;
		case 4:
		echo "It's four";
		break;
		case 3:
		echo "It's three";
		break;
		case 2:
		echo "It's two";
		break;
		case 1:
		echo "It's one";
		break;
		default:
		echo "We couldn't find it";
		break;
	}
    ?>

</body>

</html>