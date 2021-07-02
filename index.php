<!-- Gloabal Heading-->
    <?php
     include 'header.php';
     ?>
    <main>
        <section class="masthead">
           <div>
               <h1>Make Your Own Entertainment Watch List</h1>
               <h2>Ready to watch or play? Enter your email to create or restart your membership</h2>
               <section class="form-container">
                   <form method="post" action="process-subscriber.php">
                       <div>
                           <input name="email" type="email" required placeholder="Your Email"/>
                           <input type="submit" value="Submit"/>
                       </div>
                   </form>
               </section>
           </div>
        </section>
        <!-- Implement a fully function Update and Delete Function-->
        <section>
            <!-- Create sign-up form for the form that were created-->
            <section id="signup" class="signup">
                <h2>Customize Your Entertainment List</h2>
                <h3>Add to Your List</h3>
                <section class="form-container">
                <form method="post" action="sign-up.php">
<!--                    Movie Name-->
                    <p><input type="text" name="pName" placeholder="Enter Product Name Here" required></p>
<!--                    Publishing Date-->
                    <p><input type="text" name="pubDate" placeholder="Publishing Year" required></p>
<!--                    Review Score-->
                    <p><input type="text" name="rtscore" placeholder="Review Score" required> </p>
<!--                    Type-->
                    <p><input type="text" name="type" placeholder="Type" required></p>
<!--                    Submit Button-->
                    <input type="submit" value="Submit">
                </form>
                </section>
            </section>
            <!-- Create User Table to Build Movie Library-->
            <section class="user-table">
                <?php
                require('connect.php');
                $conn = new mysqli('172.31.22.43','Jiaqi200477892','WH-tstIK2E','Jiaqi200477892');
                $result = mysqli_query($conn,"SELECT * FROM movie_information");
                ?>
                <h2>YOUR FAVOURITE MOVIE/GAME LIBRARY</h2>
                <table>
<!--                    table rows-->
                    <tr>
                    <!-- Create table heading then open up PHP again-->
                    <td>Name</td>
                    <td>Publication Date</td>
                    <td>Rotten Tomatoes Score</td>
                    <td>Type</td>
                    <td>Update</td>
                    <td>Delete</td>
                    </tr>
                    <?php
                    $i= 0;
                    //Return an array that corresponds to the fetched row or null if they are no more rows for the result.
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <!-- Take out the table result that was populated-->
                    <tr class="<?php if(isset($classname)) echo $classname; ?>">
                        <td><?php echo $row["pName"];?></td>
                        <td><?php echo $row["pubDate"];?></td>
                        <td><?php echo $row["rtscore"];?></td>
                        <td><?php echo $row["type"];?></td>
                        <td><a href="update-info.php?ID=<?php echo $row['ID']; ?>">Update</a></td>
                        <td><a href="delete-info.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>
                    </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </table>
            </section>
        </section>
    </main>
<!--<audio loop autoplay>-->
<iframe src="./silence.mp3" allow="autoplay" id="audio" style="display: none" hidden></iframe>
<audio controls autoplay hidden>
    <source src="https://www.soundjay.com/button/beep-01a.mp3" type="audio/ogg">
</audio>
<!--<iframe src="./avenger.mp3" allow="autoplay" id="audio" style="display: none">-->
<!--    <p>If you are reading this, it is because your browser does not support the audio element.</p>-->
<!--</audio>-->
<audio id="player" autoplay loop hidden>
    <source src="./avenger.mp3" type="audio/mp3">
</audio>
  <!-- Global Footer-->
    <?php
    include 'footer.php';
    ?>


