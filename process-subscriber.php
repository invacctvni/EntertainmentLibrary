<!-- Gloabal Heading-->
<?php
include 'header.php';
?>

<section class="mastheadSignup">

<!-- php file to process-->

<?php
//setup our connection to the database. We'll use the variable to store our database contact info.
//Create a variable for our connection information
//Next we will use an if statement to make sure that our connection works.
require 'connect.php';
$conn = new mysqli('172.31.22.43','Jiaqi200477892','WH-tstIK2E','Jiaqi200477892');
if ($conn == false){
    //die will separate the connection if you try again
    // die will kill the connection and ask to try again.
    //The first, -> , is used when you want to call a method on an instance or access an instance property.
    //The second, ::, is used when you want to call a static method, access a static variable,
    // or call a parent class's version of a method within a child class.
    die("could not connect. " . $conn ->connect_error);
}
// Create a variable to contain the data gathered from the form, looking for string, request and grab the email.
$email = $conn -> real_escape_string($_REQUEST['email']);
//Now we attempt to insert the data collected from the form
//First make a variable to contain our query
// Insert into the column that we created.
$sql = "INSERT INTO subscribe (email) VALUES ('$email')";
//next we wil use an if statement to insert our query
if ($conn ->query($sql) == true){
    echo '<div class="sign"><p> Congratulations! You have subscribed</p>';
    echo '<a href="index.php">Click Here to Return Home Page</a></div>';
}
else{
    //given the connection error about what happened
    echo '<div class="sign"><p>Sorry something went Wrong with $sql</p></div>' . $conn->error;
    echo '<div class="sign"><a href="index.php">Return Home</a></div>';
}
//Now we make sure we close our connection
$conn->close();
?>
    <!-- Global Footer-->
    <?php
    include 'footer.php';
    ?>
