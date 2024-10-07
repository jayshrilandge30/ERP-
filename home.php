<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      .cover {
        background: url(./images/image1.jpg);
        width: 95;
        height: 90vh;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        position: relative;
      }
      .nav {
        overflow: auto;
      }
      .topnav {
        overflow: hidden;
        background-color: orange;
      }
      .topnav a {
        float: left;
        color: #121414;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      .topnav a:hover {
        background-color: lightgoldenrodyellow;
        color: black;
      }
      .topnav a.active {
        color: rgb(8, 5, 9);
      }

      .dropdown {
      float: left;
      overflow: hidden;
      }

      .dropdown .dropbtn {
       font-size: 16px;  
       border: none;
       outline: none;
       color: black;
       padding: 14px 16px;
       background-color: inherit;
       font-family: inherit;
       margin: 0;
      }

       .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: #ddd;
      }

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<nav class="topnav">
<div class="dropdown">
    <button class="dropbtn">Oraganisation Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="organisationdetails.php">Add Oraganisation</a>
      <a href="dborg.php">Display Details</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Employee Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="employeedetails.php">Add Employees</a>
      <a href="dbemp.php">Display Details</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Item Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="itemdetails.php">Add Item</a>
      <a href="dbitem.php">Display Details</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Purchase Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="purchasedetails.php">Add Details</a>
      <a href="dbpurchase.php">Display Purchase History</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Stock Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="stockdetails.php">Add Stock</a>
      <a href="dbstock.php">Display Details</a>
    </div>
  </div> 
  <a href="logout.php" style="margin-left: 670px;">Logout</a>

</nav>
<div class="cover"></div>

</body>
</html>

   