<?php
include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html>
 <head>
    <style>
    

</style>
   <title> view after delete</title>
 </head>
 <style>
    body {
  background-image: linear-gradient(rgb(236, 228, 228),rgb(136, 136, 14),rgb(92, 2, 2),rgb(7, 7, 7),rgb(109, 109, 8));
}
        table {
            margin-left: 8px;
            font-size: large;
            border: 15px double black;
        }
        .bt {background: rgb(3, 48, 3);
            color: wheat;
            padding: 5px 25px;
            margin-left: 8px;
            border-radius: 7px;
            font-size: 25px;

        }
        
        
        h1 {
            
            color: black;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        margin-left: 25px;   }
        td {
            background-color: wheat;
            border: 6px solid rgb(163, 110, 11);
        }
 
        th,td {
            font-weight: bold;
            border: 1px solid rgb(128, 87, 13);
            padding: 15px;
            text-align: center;
            color: rgb(235, 157, 14);
            font-size: 23px;
        }
        td {color: rgb(4, 51, 4); font-weight: lighter;}
       
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none; position: absolute; background-color: #f9f9f9; min-width: 210px; 
            box-shadow: 0px 8px 16px 0px rgba(0, 0,0,0.2); 
            z-index: 1;
            margin-left: 8px;
            border-radius: 23px;
        }
        .dropdown-content a {
            color: rgb(1, 71, 1);
            padding: 15px 20px;
            text-decoration: none;
            display: block;
            border-radius: 23px;
        }
        .dropbtn{
            background-color: rgb(2, 48, 2);
            color: rgb(177, 171, 161) ;
            padding: 13px 20px;
            font-size: 18px;
            border-radius: 24px;
            margin-left: 8px;
            
            
        }
        .dropdown-content a:hover{
            background-color: #a7a3a3;
        }
        .dropdown:hover .dropdown-content{
            display: block;
        }
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

    </style>
<body>
    
    <a href="GET DATA.php"><button class="bt">Back</button></a><br><br>
<?php
if (mysqli_num_rows($result) > 0) {
?>

    <div class="tr">
<table>
    <tr>
    <th>id:</th>
    <th>fname:</th>
    <th>lname:</th>
    <th>phone:</th>
    <th>email:</th>
    <th>service:</th>
    <th>date</th>

     </tr>

</div>

            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["lname"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["service"]; ?></td>
        <td><?php echo $row["date"]; ?></td> 
      </tr>
            <?php
            $i++;
            }
            ?>
</table>
 <?php
}

?>
 </body>
</html>