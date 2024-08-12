
             
<?php
 
// Database connection details

include 'connection.php';

// Set the Excel file name and headers
$filename = "customers_data_".time(). ".xls";
header("Content-Type: application/vnd.ms-excel worksheets");
header("Content-Disposition: attachment; filename = \"$filename\"");

// SQL query to select the data from the customer table
$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);


// Output the column headers
echo "id\tfname\tlname\tphone\temail\tservice\tdate\n";

// Output the data rows
while ($row = mysqli_fetch_assoc($result)) {

    print implode("\t",$row). "\n";

   /* echo $row["id"] . "\t";
    echo $row["fname"] . "\t";
    echo $row["lname"] . "\t";
    echo $row["phone"] . "\t";
    echo $row["email"] . "\t";
    echo $row["service"] . "\t";
    echo $row["date"] . "\n";*/
}
// Close the database connection
mysqli_close($con);
?>


