
<?php  
        include('connection.php');  
    $user = $_POST['user'];  
    $pass = $_POST['pass']; 
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $pass = stripcslashes($pass);  
        $user = mysqli_real_escape_string($con, $user);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select * from login where user = '$user' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result); 
        
        if($count == 1){  
            echo "<h1 >Welcome! , $user to<hr></h1>";  

             include 'GET DATA.php';
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
    
?>  


