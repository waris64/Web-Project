<?php
include 'header.php';
?>
<?php
 include 'test.php';
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $sqli_query = mysqli_query($conn,"INSERT INTO `contacts`(name,email,msg) VALUES ('$name', '$email','$text')") or die('Query failed!');
    echo '<script>alert("Message Sent  Successfull!");</script> ';

 }
?>
        <div class="contact">
            <form action="" method="post">
                Name: <br>
                <input type="text" name="name" id=""><br>
                Email <br>
                <input type="email" name="email"><br>
                Message <br>
                <input type="text-box" name="text" id="">
                <br>
                <button name="submit">Submit</button>
            </form>

            <div class="content">
                <h1>Contact us for latest updates</h1>br
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia earum neque consectetur. Omnis, tempora
                sint numquam commodi veniam repellendus eaque laudantium recusandae autem accusamus dolorum voluptas
                architecto quae perspiciatis. Impedit facilis perferendis quia dignissimos.
                    
            </div>
        </div>

<!-- FOOTER -->
       <?php
       include 'footer.php';
       ?>
    </div>
</body>