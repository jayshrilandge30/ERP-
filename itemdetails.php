<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="erp";
$message ="";
if(count($_POST)>0) 
{
  $con = mysqli_connect($servername, $username, $password, $dbname ) or die('Unable To connect');
  $sql="INSERT INTO itemdetails (Item_Id,Item_Name,Category,Group_Name,NetWeight,Price) 
  VALUES ('$_POST[Item_Id]','$_POST[Item_Name]','$_POST[Category]','$_POST[Group_Name]','$_POST[NetWeight]','$_POST[Price]')";

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
    <title style="font-weight: bold">Item Details</title>
    <link rel="stylesheet" type="text/css" href="decoration.css" />
  </head>
  <body bgcolor="gainsboro">
    <div id="wrapper">
      <div id="header">Item Details</div>
      <div id="main">
        <br />
        <form action="itemdetails.php" method="post">
          <div id="contentbx">
            <p><label>Item Id: </label><input type="text" name="Item_Id" required/></p>
            <p>
              <label>Item Name: </label>
              <input type="text" name="Item_Name" required />
            </p>
            <p>
              <label>Category: </label><input type="text" name="Category" required />
            </p>
            <p><label>Group: </label><input type="text" name="Group_Name" required/></p>
            <p>
              <label>Net Weight: </label><input  name="NetWeight" required/>
            </p>
            <p><label>Price: </label><input name="Price" required /></p>
          </div>
          <p>
          <a href="home.php" >
            <button style="margin-left: 200px;"  type="button"  value="Save" >Back</button>
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