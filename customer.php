 

<?php
 include('connection.php');  
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];   
    $phone = $_POST['phone']; 
    $email = $_POST['email'];
    $service = $_POST['service'];  
    $date = $_POST['date']; 

        $sql = "insert into customer( fname,lname,phone,email,service,date)
        values('$fname','$lname','$phone','$email','$service','$date')";

        $result = mysqli_query($con,$sql);  
  
         if($result){  
        
            echo "<h2><center> Dear $fname $lname, you're submitted successfully;</center></h2>
                   <center><h3>Thank you for your booking. Sorry,only the owner is the one allowed to login. <center><h3>"; 
            include 'LOGIN.html'; 
        }  
        else{  
            echo "<h1> Failed to submit customer.</h1>";  
        } 
         
?>