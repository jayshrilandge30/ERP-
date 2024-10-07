<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="erp";
$message ="";

if(count($_POST)>0) 
{
  $con = mysqli_connect($servername, $username, $password, $dbname ) or die('Unable To connect');
  $sql="INSERT INTO purchasedetails (Customer_Name,Customer_No,Customer_Address,Item_Id,Item_Name,Total_amount)
  VALUES ('$_POST[Customer_Name]','$_POST[Customer_No]','$_POST[Customer_Address]','$_POST[Item_Id]','$_POST[Item_Name]','$_POST[Total_amount]')";

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
    <title style="font-weight: bold">Purchase Details</title>
    <link rel="stylesheet" type="text/css" href="decoration.css" />
  </head>
  <body bgcolor="gainsboro">
    <div id="wrapper">
      <div id="header">Purchase Details</div>
      <div id="main">
        <br />
        <form action="purchasedetails.php" method="post">
          <div id="contentbx">
            <p>
              <label>Customer Name: </label
              ><input type="text" name=" Customer_Name" required/>
            </p>
            <p>
              <label>Customer No : </label>
              <input  name="Customer_No" required />
            </p>
            <p>
              <label>Customer Address: </label
              ><input type="text" name="Customer_Address" required/>
            </p>
            <p><label>Item Id: </label><input type="text" name="Item_Id" required/></p>
            <p>
              <label>Item Name: </label><input type="text" name="Item_Name" required/>
            </p>
            <p>
              <label>Total Amount: </label
              ><input  name="Total_amount" required/>
            </p>
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