<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.pop {
  background-image: linear-gradient(rgb(37, 33, 33) rgb(94, 94, 7) red);
}
a:link, a:visited {
  background-color:  #4682B4;
  color: white;
  padding: 2px 3px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


a:hover, a:active {
  background-color: #4169E1;
}
td,th{
    border: 1px solid greenyellow;
    text-align: left;
    padding: 2px;
}
tr{
    background-color:rgb(1, 43, 1);
    color:rgb(196, 131, 11);
    font-size: 25px;
    
}
</style> 
<body>
  <section class="pop">
    <h1>VIEW CUSTOMER DATA ACCORDING TO HIS/HER ID NO.</h1><hr>
    <form method="POST" action="">
        <b>Employee ID: <input type="id" name="id"/>
        <input type="submit" value="Get Result">
        <a href="GET DATA.PHP">Back</a><br><br>
        
    </form> </section>







<?php
    include('connection.php');  
    if ($_POST) {
    $id = $_POST['id'];
    echo "CUSTOMER'S ID NO. YOU HAVE SUBMITTED IS <b>$id</b> &<hr>";
   $con = mysqli_connect($server, $user, $pass, $db_name);
if ($con)
        echo " <p><b>if the date you have submited is correct, details will be displayed below. else, nothing will be seen.</b></p><hr>";
    $qry = "select * from customer where id='$id'";
    $result = mysqli_query($con, $qry);
    $nos = mysqli_num_rows($result);
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