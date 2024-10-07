<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="erp";
$message ="";

if(count($_POST)>0) 
{
  $con = mysqli_connect($servername, $username, $password, $dbname ) or die('Unable To connect');
  $sql="INSERT INTO employeedetails (Name,Contact_No,Address,Email,Date_Of_Join,Salary) 
  VALUES ('$_POST[Name]','$_POST[Contact_No]','$_POST[Address]','$_POST[Email]','$_POST[Date_Of_Join]','$_POST[Salary]')";

  if (!mysqli_query($con,$sql))
  {
  die('SQL query error');
  }
  else
  $message="Data saved successfully";   
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title style="font-weight: bold">Employee Details</title>
    <link rel="stylesheet" type="text/css" href="decoration.css" />
  </head>
  <body bgcolor="gainsboro">
    <div id="wrapper">
      <div id="header">Employee Details</div>
      <div id="main">
        <br />
        <form action="employeedetails.php" method="post">
          <div id="contentbx">
            <p><label>Name: </label><input type="text" name="Name" required/></p>
            <p>
              <label>Contact No : </label>
              <input  name="Contact_No" required/>
            </p>
            <p><label>Address: </label><input type="text" name="Address" required/></p>
            <p><label>Email: </label><input type="text" name="Email" required/></p>
            <p>
              <label>Date of Join: </label
              ><input type="Date" name="Date_Of_Join" required/>
            </p>
            <p><label>Salary: </label><input  name="Salary" required/></p>
          </div>
          <p>
          <a href="home.php" >
            <button style="margin-left: 200px;"  type="button"  value="Save">Back</button>
            </a>
            <button style="margin-left: 120px;" type="reset" >Reset</button>
            <button style="margin-left: 120px;" type="submit">Save</button>
          </p>
        
        </form>
      </div>
      <div>
        <?php
            if($message!="")
            {
                echo $message."";
            }
            ?>
            </div>
          
    </div>
  </body>
</html>