<?php
include 'header.php';
?>
<?php
    include 'test.php';
    if(isset($_POST['login'])){
        $name = $_POST['email'];
        $password = $_POST['password'];
        $sqli_query = mysqli_query($conn, "SELECT * FROM `register` WHERE name = '$name' AND password = '$password'") or die('Query failed!');
        if(mysqli_num_rows($sqli_query) > 0){
            echo '<script>alert("Login Successfull!");</script> ';
            header('location:Home.php');
        }else{
            echo '<script>alert("Username or Password Incorrect!");</script> ';
        }
    }
?>
        <div class="login">
            <h1>Login</h1> 
            <form method="post">
          <i class="fa-sharp fa-solid fa-user main-user"></i>
          <div class="user">
            
              <i class="fa-solid fa-user username-user"></i>
          <input type="text" name="email" id="" placeholder="Email">
          </div>
          <div class="password">
              <i class="fa-solid fa-lock"></i>
          <input type="password" name="password" id="" placeholder="password"><br>
      </div>
          <h3>Don't have account <a href="Signup.php">SignUp here</a></h3>
          <button name = "login" class="signup-btn">Login &nbsp;<i class="fa-solid fa-right-to-bracket"></i> </button>
      
      </form> 
        
            </div>
          </div>
          




          <?php
        include 'footer.php'
        ?>