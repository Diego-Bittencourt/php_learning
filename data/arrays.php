<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php

    $numberList = array(23, 64, 26, 478, 7865, '24545', '5352', '<h1>Hello</h1>');


    $numberList2 = [23, 64, 26, 478, 7865, '24545', '5352', '<h1>Hello</h1>'];

    echo $numberList[0];
    //output = 23;

    echo print_r($numberList2);
    //the print_r function can outt arrays


    // There are two ways of creating arrays, using the array function or using square brackets, like JS.
    // The second way is a newer way
    // The arrays are 0 indexed in PHP too.
    ?>

</body>

</html>