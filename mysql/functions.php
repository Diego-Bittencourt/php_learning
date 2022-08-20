<?php 
include "db.php";

function showAllData() {
    global $connection;
    //The function will only have access to global variables f I put this keyword inside the function.

$query = "SELECT * FROM users"; //the sql query
$result = mysqli_query($connection, $query);
if(!$result) {
    die("Query FAILED" . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
    //the while loop is looping through the $result variable and echoing each row as an option with
    // the dynamic id.
};
}


function updateTable() {
    global $connection;
$username =  $_POST['username'];
$password =  $_POST['password'];
$id = $_POST['id'];


//VERY IMPORT, these strings are going to be a sql query, so don't forget to put spaces and commas around words.
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";
//    The two username and password are inside brackets cuz they are strings. The id is a interger, so quotes are not used.
//    Instead of writing a long string, I made small strings and concatenate them.


$result = mysqli_query($connection, $query);
if (!$result) {
 die("Query Failed" . mysqli_error($connection));
}
}

?>