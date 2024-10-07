<?php
    session_start();
    $message="";
    if(count($_POST)>0) 
    {
      $con = mysqli_connect('127.0.0.1:3306','root','','erp') or die('Unable To connect');
      $result = mysqli_query($con,"SELECT * FROM login_user WHERE username ='" . $_POST["username"] . "' and password ='". $_POST["password"]."'");
        
      $row  = mysqli_fetch_array($result);
      if(is_array($row))
      {
        $_SESSION["name"] = $row['username'];
      } 
      else 
      {
        $message = "Invalid Username or Password!";
      }
    }
    if(isset($_SESSION["name"]))
    {
    header("Location:home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body bgcolor="orange">
    <section>
      <div class="imgBx">
        <img src="./images/image.jpg" />
      </div>
      <div class="contentBx">
        <div class="formBx">
          <h2>Administrator Login</h2>
          <form name="" method="post" action="home.php" >
          <div class="message">
            <?php
            if($message!="")
            {
              echo $message."<a herf=home.php></a>";
            }
            ?>
          </div>
          <div class="inputBx">
            <span>Username</span>
            <input type="text" name="username" />
          </div>
          <div class="inputBx">
            <span>Password</span>
            <input type="password" name="password" />
          </div>
          <div class="remember">
            <label><input type="checkbox" name="" /> Remember Me </label>
          </div>
          <div class="inputBx">
            <a href="home.php">
            <input type="Submit"  value="Submit" />
            </a>
          </div>
          
          </form>
        </div>
      </div>
    </section>
  </body>
</html>