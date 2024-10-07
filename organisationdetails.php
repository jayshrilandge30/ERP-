<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="erp";
$message ="";

if(count($_POST)>0) 
{
  $con = mysqli_connect($servername, $username, $password, $dbname) or die('Unable To connect');
  $sql="INSERT INTO organisationaldetails (Name,Contact_No,Address,Email,Web_Address,Fax_No,GSTin_No,PAN_No,Start_Date)
  VALUES ('$_POST[Name]','$_POST[Contact_No]','$_POST[Address]','$_POST[Email]','$_POST[Web_Address]','$_POST[Fax_No]','$_POST[GSTin_No]','$_POST[PAN_No]','$_POST[Start_Date]')";

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
    <title style="font-weight: bold">Organisation Details</title>
    <link rel="stylesheet" type="text/css" href="decoration.css" />
  </head>
  <body>
    <div id="wrapper">
      <div id="header">Organisation Details</div>
      <div id="main">
        <br />
        <form action="organisationdetails.php" method="post">
          <div id="contentbx">
            <p>
              <label>Name: </label><input type="text" size="90" name="Name" required />
            </p>
            <section>
              <div>
                <p>
                  <label>Contact No : </label>
                  <input  name="Contact_No" required/>
                </p>
                <p><label>Email: </label><input type="text" name="Email" required/></p>
                <p>
                  <label>Fax No : </label><input  name="Fax_No" required/>
                </p>
                <p>
                  <label>Pan No : </label><input type="Text" name="PAN_No" required />
                </p>
              </div>
              <div class="inbx">
                <p>
                  <label>Address: </label> <input type="text" name="Address" required/>
                </p>
                <p>
                  <label> Web Address: </label>
                  <input type="text" name="Web_Address" required/>
                </p>
                <p>
                  <label>GSTin No : </label
                  ><input  name="GSTin_No" required />
                </p>
                <p>
                  <label>Start Date: </label>
                  <input type="date" name="Start_Date" required/>
                </p>
              </div>
            </section>
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