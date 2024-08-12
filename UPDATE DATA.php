<!-- HTML form for updating customer data -->
<!DOCTYPE html>
<html>  
<head>  
    <title>UPDATE DATA</title>
<style>
    input[type=text] {
        width: 10%;
        padding: 5px 13px;
        border-radius: 6px; 
    margin-left: auto;}
        select {
            width: 10%;
        padding: 5px 13px;
        border-radius: 6px;
    }
    input[type=date]{width: 10%;
        padding: 5px 13px;
        border-radius: 6px;
    }
    input[type=submit]{width: 5%;
        padding: 4px 7px;
        border-radius: 6px;
    background-color: rgb(2, 54, 2);
    color: wheat;
    font-size: 17px;
    margin-left: 0.5%;
    }
    input[type=reset]{width: 4.5%;
        padding: 4px 7px;
        border-radius: 6px;
    background-color: rgb(2, 54, 2);
    color: wheat;
    font-size: 17px;
    margin-left: 2%;
    }
        
    
      
</style>
</head>
    <body>
        <h2 style="color:rgb(5, 77, 5); margin-left: 4px;"><b>THIS PAGE ENABLES YOU TO UPDATE OR MAKE EDIT IN THE SELECTED DATA</b></h2><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <b>Id:</b> <input type="text" name="id"><br>
    <b>First Name:</b> <input type="text" name="fname"><br>
    <b>Last Name:</b> <input type="text" name="lname"><br>
    <b>Phone:</b> <input type="text" name="phone"><br>
    <b>Email:</b> <input type="text" name="email"><br>

    <b><label for="services">Service:</label></b>
  <select name="service" id="service">
    <option value="Website design">Website design</option>
    <option value="graphic design">graphic design</option>
    <option value="Website update">Website update</option>
    <option value="graphic planning">graphic planning </option>
  </select><br>

  <b>Date:</b> <input type="date" name="date"><br><br>
  <input type="reset" name="reset" value="Cancel">
    <input type="submit" name="submit" value="Update">
</form><hr>
</body>     
</html> 



<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "lawrence";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $date = $_POST["date"];

    // Prepare the SQL update query
    $sql = "UPDATE customer SET fname = ?, lname = ?, phone = ?, email = ?, service = ?, date = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssisssi", $fname, $lname, $phone, $email, $service, $date, $id);

    // Execute the update query
    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}    include 'VIEW AFTER DELETE.php';

// Close the database connection
$con->close();
?>

