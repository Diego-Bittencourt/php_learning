<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

            $number1 = 10;
            $number2 = 20;
    
            echo $number1 + $number2;
            echo "<br>";
            $array1 = [1, 2, 3];
            print_r($array1);
            echo "<br>";
            $array2 = ["number1" => 1, "number2" => 2];
            print_r($array2);
    
    
    


    ?>

</body>

</html>