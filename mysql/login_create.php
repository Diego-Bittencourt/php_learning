<?php 


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    //The mysqli_connect() is an api that connects to the MYSQL database. The params are
    //the server, username, password and place

    if ($connection) {
        echo "we are connected";
    } else {
        die("Database connection failed");
        // The die() is an inbuilt function in PHP. It is used to print message and exit from the current php script. It is equivalent to exit() function in PHP. Syntax : die($message)
    }

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    // mysqli_query is a built in function to query the database. It gets two parameters, the conection and the data being query

    if(!$result) {
        die('Quer FAILED' . mysqli_error($connection));
    }

}







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

        <div class="col-xs-6">
            <form action="login.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

        </div>




    </div>



</body>
</html>