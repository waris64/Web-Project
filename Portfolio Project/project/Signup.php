<?php
include 'header.php';
?>

<?php
    include 'test.php';
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];
        $sqli_query = mysqli_query($conn, "SELECT * FROM `register` WHERE name = '$name' ") or die('Query failed!');
        if(mysqli_num_rows($sqli_query) > 0){
            echo '<script>alert("Account already exisits!");</script> ';

            header('location: Signup.php');
        }else{
            $sqli = mysqli_query($conn,"INSERT INTO `register`(`name`,`password`) VALUES ('$name','$password')") or die('Query failed!');
            echo '<script>alert("Registered Successfull!");</script> ';
            ;
            header('location:login.php');
        };

    }

?>

        <div class="container-login">

            <div class="login">
                <h1>SignUp</h1>
                <form action="" method="post">
                    <i class="fa-sharp fa-solid fa-user main-user"></i>
                    <div class="user">

                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="" placeholder="Email" class="email">

                        <div class="password">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password"  placeholder="password" class="pass"><br>
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" id="" placeholder="Confirm password"
                                class="passw"><br>
                        </div>
                        <h3>Already have account <a href="login.php">Login here</a></h3>
                        <button name = "submit" class="signup-btn">Signup &nbsp;<i class="fa-solid fa-right-to-bracket"></i> </button>

                </form>

            </div>
        </div>
    </div>






    <?php
        include 'footer.php'
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
     $(document).ready(function(){

           $('.signup-btn').click(function(){
            if($('.pass').val() ===  $('.passw').val() ){
           return true;
           }else 
           {
            alert('value must be same');
            return false;
           };
           if($('.pass')==$('passw')==''){
            return true;
           }else{
            return false;
           }
           });

          
           
     });
    </script>

</html>