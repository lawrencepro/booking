

<?php

include 'connection.php';
//sql query to clear data from the table

$sql = "TRUNCATE TABLE customer";

//Execute the query

if(mysqli_query($con,$sql)){

    echo" <h1>ALL DATA  ARE CLEARED FROM THE CUSTOMER'S TABLE SUCCESSFULLY.</h1>";
} 
else {
    echo"ERROR CLEARING DATA FROM THE CUSTOMER TABLE:" . mysqli_error($con);

}
//Close the database connection 
mysqli_close($con);
?>