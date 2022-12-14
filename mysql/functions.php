<?php 
include "db.php";



function createRows() {
    if (isset($_POST['submit'])) {
    global $connection;
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
    } else {
        echo "Record created.";
    }
    }
}
 

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


$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

//To avoid attacks a malicious entries, PHP offers this function that escape quotes and other dangerous characteres
//It takes two parametes, the connection and the string to be cleaned.
//Its a good practice to assign the variable to the return of this function

$hashFormat = "$2y$10$";

$salt = "iusesomecraystrings22";
//the salt variable can be anything you want

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);
// the crypt function takes the string you want to encrypt and the other variable you wrote as a noite to the password.



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
} else {
    echo "Record Updated";
}
}

function deleteRows() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record deleted.";
    }
}

?>