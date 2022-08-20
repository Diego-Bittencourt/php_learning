<?php


include "db.php";
include "functions.php";
// I created another file to contain the code responsible for connecting with the database.
//The mysqli_connect() is an api that connects to the MYSQL database. The params are
//the server, username, password and place

if ($connection) {
    echo "we are connected";
} else {
    die("Database connection failed");
    // The die() is an inbuilt function in PHP. It is used to print message and exit from the current php script. It is equivalent to exit() function in PHP. Syntax : die($message)
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);
// mysqli_query is a built in function to query the database. It gets two parameters, the conection and the data being query

if (!$result) {
    die('Quer FAILED' . mysqli_error($connection));
}
echo $query;






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="col-sm-6">

            <?php

            // while ($row = mysqli_fetch_row($result)) {
            //     print_r($row);
            // }

            //Now I'm using the mysqli_fetch functions that fetch data from the database.
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <!-- closing php to use the <pre> html tag -->

                <pre>

            <?php
                // opening php again to use the print_r function

                print_r($row);

            ?>
            <!-- closing php again to wrap the print_r in the pre html tag -->
        </pre>

            <?php
            }


            ?>

        </div>




    </div>



</body>

</html>