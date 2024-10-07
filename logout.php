<!-- DOCTYPE html
<html>
  <head>
    <title style="font-weight: bold">Logout</title>
    <link rel="stylesheet" type="text/css" href="decoration.css" />
  </head>
  <body bgcolor="gainsboro">
    <div id="wrapper">
      <div id="header">Logout</div>
      <div id="main">
        <br/>
          <div id="contentbx">
            <p>Do you want to logout !</p>
          </div>
          <p> 
          <a href="login1.php">
            <button type="Submit"  value="Save">YES</button>
            </a>
            <a href="home.php">
            <button type="submit" name="Save">NO</button> 
            </a>
            </p>      
      </div>
    </div>
  </body>
</html> -->
<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:login.php");
?>
