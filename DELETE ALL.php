<!DOCTYPE html>
<html>  
<head>  
    <title>Employee Deletion</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <style>
      body {
  background-image: url("img.jpg");
}
      input{
        border-radius: 5px;
        border-color: greenyellow;
        padding: 8px 17px;
        margin-left: 40PX;
      }
      
     
      .center{
        display: inline-flex;
      }
      #frm {
        background-image: linear-gradient(rgb(51, 47, 47),rgb(121, 121, 14),rgb(92, 2, 2));
        height: 100%;
        border: 18px black double;
}

      button {
        padding: 8px 23px;
        border-radius: 20px;
        margin-left: 18px;
        font-size: 18px;
        background-color: rgb(2, 46, 2);
        color: wheat;
        padding-bottom: 10px;
      }

      table { 

  padding: 12px 24px;
  padding-top: 50px;
  
} 
td {
    border: none;
    padding: 5px;
}
    </style>  
</head>
<body>  
    <div id = "frm">
  <?php

         if(isset($_POST['delete'])) {
            $server = "localhost";  
            $user = "root";  
            $pass = "";  
            $db_name = "lawrence";  
      
            $con = mysqli_connect($server, $user, $pass, $db_name);  
            
            if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $id = $_POST['id'];
            
            $sql = "DELETE * FROM customer";
            
             $result = mysqli_query($con, $sql);  
            if(! $result ) {
               die('Could not delete data: ' . mysql_error());
            }
            
             echo "<h1><center> ALL RECORDS ARE DELLETED SUCCESSFULLY </center></h1>";
            
                           include 'VIEW AFTER DELETE.php';
            mysqli_close($con);
}
            ?>
            
               <
       <a href="GET DATA.php"><button>BACK</button></a><br><br>
    </div>  
    
</body>     