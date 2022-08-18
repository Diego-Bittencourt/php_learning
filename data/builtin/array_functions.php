<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$list = [232, 434, 565, 343, 787];
echo max($list);
echo "<br>";
echo min($list);
// the max() function returns the biggest value in the array. the min() returns the smallest value.

print_r($list);
sort($list);
echo "<br>";
print_r($list);
// sort sorts the array ascending. It changes the original array.

?>
</body>
</html>