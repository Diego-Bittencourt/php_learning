<?php 
// this is a supergobal variable that catches data sent with the post method.

if (isset($_POST['submit'])) {

   $username = $_POST['username'];
   $userpassword =  $_POST['userpassword'];

   echo $username;
   echo "<br>";
   echo $userpassword;
   echo "<br>";
   echo isset($_POST['submit']);

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <!-- the form is being sent to the form.php file via post format. -->
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="userpassword" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit"> 
        <!-- The name adds the key value send via post. And the input value, wrote by user, is the value in that key -->
    </form>
    
</form>



</body>
</html>