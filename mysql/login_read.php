<?php 

if(isset($_POST['submit'])) {

    

 $username = $_POST['username'];
 $password = $_POST['password'];

 if(!$username || !$password) {

 }
 echo "These fields cannot be blank";

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