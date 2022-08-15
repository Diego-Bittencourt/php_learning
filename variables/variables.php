<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
<?php

$name = "Diego";
$number = 100;
// in PHP, you can declare a variable using a $ sign followed by the name. Then assigning operator.
// You can wrap strings with singles quotes, double quotes or apostrophes
// camelCase recommended, best practice, or snake_case
// PHP is also case sensitive

echo $name;
echo $number;

echo $name . $number;
// output: Diego100
// On concatenation, numbers are converted into strings when concatenated with strings.
// Dots are used to concatenated variables

?>

</body>
</html>