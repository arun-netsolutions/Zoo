 

<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=$_POST['password'];
   
    $sql="select * from users where email='$email'";
    
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            
            if(password_verify($password,$row['password'])){
                $_SESSION["email"]=$row['email'];
            
                header("location:admin-home.php");
                exit();
            }
     
    }
}
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
    
   ?> 
     