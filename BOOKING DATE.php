<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

a:link, a:visited {
  background-color: rgb(5, 78, 5);
  color: wheat;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 13px;
  max-width: 60%;
}
input {
  padding: 9px 25px;
  border-radius: 13px;
}

a:hover, a:active {
  background-color: #4169E1;
}
td,th{
    border: 1px solid greenyellow;
    text-align: left;
    padding: 12px;
}
tr{
    background-color:rgb(1, 43, 1);
    color:rgb(196, 131, 11);
    font-size: 25px;
    
}
</style> 
<body style="background-image: linear-gradient(to right,rgb(185, 108, 8),rgb(109, 109, 8))">
  
    <h1>VIEW CUSTOMER DATA ACCORDING TO THE DATE OF BOOKING</h1><hr>
    <form method="POST" action="">
        <b style="font-size: 18px;color: rgb(4, 75, 4);">CUSTOMER'S DATE OF BOOKING: <input type="date" name="date"/>
        <input type="submit" value="Get Result">
        <a href="GET DATA.PHP">Back</a><br><br>
        
    </form> 







<?php
    include('connection.php');  
    if ($_POST) {
    $date = $_POST['date'];
    echo "DATE OF BOOKING  YOU HAVE SUBMITTED IS <b>$date</b> &<hr>";
   $con = mysqli_connect($server, $user, $pass, $db_name);
if ($con){
        echo " <p><b>if the date you have submited is correct, details will be displayed below. else, nothing will be seen.</b></p><hr>";
    $qry = "select * from customer where date='$date'";
    $result = mysqli_query($con, $qry);
    $nos = mysqli_num_rows($result);}else {
      echo" NO RECORD FOUND";
    }
        

    while ($row = mysqli_fetch_row($result)){
        echo "<br><br>\n";

        echo "<table>
  <tr>
    <th>id:</th>
    <th>fname:</th>
    <th>lname:</th>
    <th>phone:</th>
    <th>email:</th>
    <th>service:</th>
    <th>date:</th>
    
          </tr>
  <tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
   
    
  </tr>
</table>";
        
    } 
    
}
?>
 
</body>
</html>