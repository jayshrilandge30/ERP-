<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2f;
        }
           
        .nav {
            width: 100%;
            background: #000033;
            height: 80px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }

        ul li {
             float:  left;
            margin-top: 20px;
        }
        ul li a {
            width: 150px;
            color: white;
            display: block;
            text-decoration: none;
            font-size: 20px;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-family: Century Gothic;
            font-weight: bold;    
        }

        a:hover {
        background: #669900;
        }

        ul li ul {
        background: #000033;
        }
    </style>
</head>
<body>
    <div class=nav>
    <ul>
        <li><a href="#">Organisation Details</a></li>
            <ul>
                <li><a href="dborg.php">View Ogranisation Details</a></li>
            </ul>
        <li>
            <a href="#">Employee Details</a>
            <ul">
                <li><a href="employeedetails.php">Add Employees</a></li>
                <li><a href="dbemp.php">View Employees</a></li>
            </ul>
        </li>
         <li>
            <a href="#">Item Details</a>
            <ul>
                <li><a href="itemdetails.php">Add Items</a></li>
                <li><a href="dbitem.php">View Items</a></li>
            </ul>
        </li>
         <li>
            <a href="#">Purchase Details</a>
            <ul>
                <li><a href="purchasedetails.php">Purchase Details </a></li>
                <li><a href="dbpurchase.php">View Purchase History</a></li>
            </ul>
        </li>
         <li>
            <a href="#">Stock Details</a>
            <ul>
                <li><a href="stockdetails.php">Add Stock</a></li>
                <li><a href="dbstock.php">View Stock</a></li>
            </ul>
        </li>  
    </div>
</body>
</html>