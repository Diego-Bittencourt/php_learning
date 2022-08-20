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


?>