<?php
include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html>
 <head>
    <style>
    

</style>
   <title> Retrive data</title>
 </head>
 <style>
    body {
  background-image: linear-gradient(rgb(141, 136, 136),rgb(109, 109, 8),rgb(92, 2, 2),rgb(7, 7, 7),rgb(109, 109, 8),
  rgb(22, 20, 20),rgb(124, 124, 14),rgb(107, 10, 10));
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
    <h1 style="color:wheat;">CUSTOMER DATA</h1><hr>
    <a href="INDEX.html"><button class="bt">Back</button></a>
    <a href="FORM.html"><button class="bt">Form</button></a>
    <br><br>
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
</table><br>
<div class="dropdown">
    <button class="dropbtn">VIEW PARTIAL 
    </button>
    <div class="dropdown-content">
      <a href="BOOKING DATE.php">USING BOOKING DATE</a>
      <a href="VIEW USING ID.php">USING CUSTOMER ID</a>
      
    </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">UPDATE 
        </button>
        <div class="dropdown-content">
          <a href="UPDATE DATA.php">UPDATE DATA</a>    
        </div>
        </div>

    <div class="dropdown">
        <button class="dropbtn">DELETE 
        </button>
        <div class="dropdown-content">
          <a href="DELETE PARTIAL.php">DELETE PARTIAL DATA</a>
          <a href="CLEAR DATA.php">DELETE ALL DATA</a>
          
        </div>
        </div>


         <div class="dropdown">
        <button class="dropbtn">CLEAR
        </button>
        <div class="dropdown-content">
          <a href="CLEAR DATA.php">CLEAR ALL DATA</a>
        
          
        </div>
        </div>

        <div class="dropdown">
        <button class="dropbtn">EXPORT
        </button>
        <div class="dropdown-content">
          <a href="EXPORT DATA.php">EXPORT DATA TO EXCEL</a>
        
          
        </div>
        </div>
 
 
 <?php
}
else
{
    echo "<h1>NO RESULT FOUND IN THE  CUSTOMER'S TABLE</h1><br><br>";
}
?>
 </body>
</html>