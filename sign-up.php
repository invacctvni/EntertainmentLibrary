<!--include some type of validation besides the pre-built HTML validation.-->
<!-- Gloabal Heading-->
<?php
include 'header.php';
?>
    <section class="mastheadSignup">
<?php
$conn = new mysqli('172.31.22.43','Jiaqi200477892','WH-tstIK2E','Jiaqi200477892');
//verification authentication
$formCheck = true;
//Validate the first name is not empty
if(empty($_POST['pName']))
{
    echo "<p>Movie Name is required</p>";
    $formCheck = false;
}
//Validate the last name
if(empty($_POST['pubDate']))
{
    echo "<p>Publishing Date is required</p>";
    $formCheck = false;
}
//Validate the email
if(empty($_POST['rtscore']))
{
    echo "<p>Rotten Tomato Score is required</p>";
    $formCheck = false;
}
//Validate the type of movie
if(empty($_POST['type']))
{
    echo "<p>Movie type is required</p>";
    $formCheck = false;
}
if($formCheck == true)
{
    require ('connect.php');
    $sql = "INSERT INTO movie_information (pName,pubDate,rtscore,type) VALUES ('$_POST[pName]','$_POST[pubDate]','$_POST[rtscore]','$_POST[type]')";
    mysqli_query($conn,$sql);
    echo '<div class="sign"><p>Information Added</p>';
    echo '<a href="index.php">Return Home</a></div>';
    //mysqli_close();
}
else{
    //The method loads a specific page from the session history. You can use it to move forwards and backwards through
    //the history depending the value of the parameter.
    echo 'Click <a href="javascript:history.go(-1)">HERE</a> to go back';
}
?>
    </section>
<!-- Global Footer-->
<?php
include 'footer.php';
?>
