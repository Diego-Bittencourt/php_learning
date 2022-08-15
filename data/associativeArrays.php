<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>

<body>
    <?php

    $number = array(10, 20, 30);
    echo $number[2] . "<br>";
    print_r($number);
    echo "<br>";
    $names = array("first_name" => 'Jose', "Last_Name" => 'Diaz');
    print_r($names);
    echo $names['first_name'] . " " . $names['Last_name'];
    //output = Jose

    //Associative arrays have labels, key and value pairs.
     

    ?>

</body>

</html>