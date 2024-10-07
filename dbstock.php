<?php   
 $conn=mysqli_connect("localhost","root","","erp"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from stockdetails";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: orange;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse; 
                border-color: Black; 
                width: 100%;  
           }  
           table th{  
                background-color: Gold;  
                color: Black;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: Black;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: orange;  
           }  

           button {
  background-color: rgba(220, 93, 20, 0.871);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-bottom: 50px;
  cursor: pointer;
  border-radius: 16px;
}
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>Item Name</th>  
                <th>Group Name</th>  
                <th>Category</th>  
                <th>Quantity</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['Item_Name']."</td>  
                               <td>".$data['Group_Name']."</td>  
                               <td>".$data['Category']."</td>  
                               <td>".$data['Quantity']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 <p>
          <a href="home.php" >
            <button style="margin-left: 700px;"  type="button"  value="Save">Back</button>
            </a>
               </p>  
 </body>  
 </html>