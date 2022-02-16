
<?php
	include 'dbcon.php';
        
   
        
        // Include file which makes the
        // Database Connection.
       if(isset($_POST["submit"])){

       
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
                
        
        $sql = "Select * from users where user_name='$username'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result);
        
        // This sql query is use to check if
        // the username is already present
        // or not in our Database
        if($num == 0) {
            if(($password === $cpassword)) {
        
                $hash = password_hash($password,
                                    PASSWORD_DEFAULT);
                    
                // Password Hashing is used here.
                $sql =" INSERT INTO `users` ( `first_name`, `last_name`, `user_name`, `email`, `password`,`role_id` , `user_status`, `created_at`, `updated_at`)
                 VALUES ( '$firstname', '$lastname', '$username', '$email','$hash',  '$role', '0', current_timestamp(), current_timestamp())";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true;
                    header("location:login.php");
                
                }
            }
            else {
                $showError = "Passwords do not match";
            }	
        }// end if
        
    if($num>0)
    {
        $exists="Username not available";
    }
        
    }//end if

  
    ?>
    


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<style>

.error{
    color: red;
    size:1cm;
    padding-left:30%;
    }
    label{
        color: blue;
        size: 20px;

    }
</style>


</head>

<body>
  <form method="POST" id="register">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <img src="images.jpg" alt="profile photo" class="circle float-left profile-photo" width="100" height="auto">
				  </a>
                            <h3>Regiter Here</h3>
                        </div>
                        <label for="floatingText" >Firstname</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="">
                            
                            
                            </div>
                            <label for="floatingText">Lastname</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="">
                           
                        
                        </div>
                        <label for="floatingText">Username</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="jhondoe">
                         
                        </div>
                        <label for="floatingInput">Email address</label>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="emailaddress" name="email" placeholder="name@example.com">
                            
                        </div>
                        <label for="floatingPassword">Password</label>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                           
                        </div>
                        <label for="floatingPassword">Confirm Password</label>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
                            
                        </div>
                        <div class="form-floating mb-4">
                  <!-- <div class="col">
                  <label for="role">Choose a role:</label>
                    <select class="select" name="role" id="role">
                      <option value="1">Zoo Manager</option>
                      <option value="2">Catalog manager</option>
                      <option value="3">New user or Customer</option>
                    </select> -->
             <select name="role" style="height:40px; width:100%;" id="role">
             <option value="">Select Role </option>    
             <option value="1">Zoo Manager</option>
                      <option value="2">Catalog manager</option>
                      <option value="3">New user or Customer</option>
                     </option>  
                     </select> 
             
    
                  </div>
                  <br>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
   
   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="register.js"></script>
    </form>
   </body>

</html>