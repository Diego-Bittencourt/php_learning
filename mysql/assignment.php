
	<section class="content">

<aside class="col-xs-4">

<?php Navigation();?>
    
    
</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">



<?php  

/*  Step 1 - Create a database in PHPmyadmin

Step 2 - Create a table like the one from the lecture

Step 3 - Insert some Data

Step 4 - Connect to Database and read data

*/
//Creating the access to the database
$connection = mysqli_connect('localhost', 'root', '', 'books_social');
if (!$connection) {
echo "Connection Failed";
}

if(isset($_POST['submit'])) {
if ($_POST['submit']  === 'CREATE USER') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userlogin = $_POST['userlogin'];


    //creating query
    $query = "INSERT INTO users(userlogin, password, username) ";
    $query .= "VALUES ('$userlogin', '$password', 'username')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Something wen wrong" . mysqli_error($connection));
    } else {
        echo "Record created";
    }
} //end if user

if ($_POST['submit'] === 'CREATE BOOK') {
    $booktitle = $_POST['booktitle'];
    $bookauthor = $_POST['bookauthor'];

    // creating query
    $query = "INSERT INTO book_list(book_author, book_title) ";
    $query .= "VALUES ('$bookauthor', '$booktitle')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Book added";
    } else {
        echo "Something went wrond" . mysqli_error($connection);
    }
} // end if book

} //end if isset


?>

<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">Create Account</h1>
    <form action="7.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="userlogin">Login</label>
            <input type="text" name="userlogin" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="CREATE USER">
    </form>
</div>
</div>

<hr style="border: 3px solid #ccc;">

<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">Register Book</h1>
    <form action="7.php" method="post">
        <div class="form-group">
            <label for="booktitle">Title</label>
            <input type="text" name="booktitle" class="form-control">
        </div>
        <div class="form-group">
            <label for="bookauthor">Author</label>
            <input type="text" name="bookauthor" class="form-control">
        </div>
        

        <input type="submit" class="btn btn-primary" name="submit" value="CREATE BOOK">
    </form>
</div>
</div>


<hr style="border: 3px solid #ccc;">

<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">See Book</h1>
    <div class="form-group">
    <form action="7.php" method="read">
        <select name="title" id="">

            <?php 
            $connection = mysqli_connect('localhost', 'root', '', 'books_social');
            $readquery = "SELECT * FROM book_list";
            $result = mysqli_query($connection, $readquery);
            if (!$result) {
                echo "Something went wrong" . mysqli_error($connection);
            }	
            
            while($row = mysqli_fetch_assoc($result)) {
                $title = $row['book_title'];
                $author = $row['book_author'];
            echo "<option name='$title'>$title</option>";
            }
            $author = $row['book_author'];
            echo "<h3>Ai vai $author</h3>";
            ?>


        </select>
    </div>
</div>
</div>


</article><!--MAIN CONTENT-->
