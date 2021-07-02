<!--include some type of validation besides the pre-built HTML validation.-->
<!-- Gloabal Heading-->
<?php
include 'header.php';
?>
<section class="update-row">
<?php
require ("connect.php");
//counts all elements in an array, or something in an object.

if(count($_POST)>0)
{ //where the id is equal to the id we clicked.
    $conn = new mysqli('172.31.22.43','Jiaqi200477892','WH-tstIK2E','Jiaqi200477892');
    mysqli_query($conn, "UPDATE movie_information set ID='" .$_POST['ID'] . "',
        pName='" . $_POST['pName'] . "',
        pubDate='" . $_POST['pubDate'] . "',
        rtscore='" . $_POST['rtscore'] . "',
        type='" . $_POST['type'] . "'
        WHERE ID ='" . $_POST['ID'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM movie_information WHERE ID='". $_GET['ID'] ."'");
$row = mysqli_fetch_array($result);
?>
    <div class="sign">
    <form name="updateUser" method="post" action="">
        <!-- Determine if a variable is considered set, this means if a variable is declared and is different than
        null. If a variable has been unset with the unset() function, it's no longer considered to be set. isset()
        ("\0") is not equivalent to the PHP null constant.-->
        <div>
            <?php
            if(isset($message))
            {
                echo $message;
            }
            ?>
        </div>
        <p><input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>"></p>
        <p><input type="text" name="pName" placeholder="Product Name" required></p>
        <p><input type="text" name="pubDate" placeholder="Publication Date" required></p>
        <p><input type="text" name="rtscore" placeholder="Rotten Tomatoes Score" required></p>
        <p><input type="text" name="type" placeholder="Movie Type" required></p>
        <div class="buttonHolder">
        <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <a href="index.php">Click Here to Return Home Page</a>
        </div>
</section>
<!-- Global Footer-->
<?php
include 'footer.php';
?>

