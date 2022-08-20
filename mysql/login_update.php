<?php

include "db.php";
// I created another file to contain the code responsible for connecting with the database.

include "functions.php";
// I created a file to hold the query code.

if (isset($_POST['submit'])) {

    updateTable();

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

        <div class="col-sm-6">
            <h1 class="text-center">Update info</h1>
            <form action="login.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">


                        <?php 
                        
                        showAllData();
                        
                        ?>
                    <!-- <option value="">Id</option> -->

                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

            </form>
        </div>




    </div>



</body>

</html>