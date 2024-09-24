
<?php
//email pass submit
include "db.php";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass=$_POST['pass'];

$email=stripslashes($email);
$pass=stripslashes($pass);
$email=mysqli_real_escape_string($con,$email);
$pass=mysqli_real_escape_string($con,$pass);

        $sql=mysqli_query($con,"select * from `director` where `email`='$email' and `pass`='$pass'");
         $count=mysqli_num_rows($sql);
        if($count!=0){
          $row=mysqli_fetch_array($sql);
          $uid=$row['email'];
        }
     
        if($count>=1){
           $_SESSION['uid']=$uid;
          header("location:dashboard.php");
        } if($count==0){
          echo "<script>alert('User is not Registered With Us!!!')</script>";
        }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
    <title>Institute Management System</title>
  </head>
  
  <body>
  <div class="container-fluid">
     <div class="row">
       <div class="col-md-12" style="text-align:left;">
         <<a href="../" class="btn btn-success btn-sm gradient-custom-4 text-body m-1">Home</a>
       </div>
     </div>
   </div>
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <div style="margin:auto;width:25%">
              <img src="img/logo.gif" alt="" >
              </div>
              
              <h2 class="text-uppercase text-center mb-5">User Login</h2>

              <form method="POST" action="">

       

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" >Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="pass" class="form-control form-control-lg" />
                  <label class="form-label" >Password</label>
                </div>

              
                

                <div class="d-flex justify-content-center">
                  <input href="dashboard.php" type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Login">
                </div>

                <p class="text-center text-muted mt-5 mb-0">New User? <a href="register.php"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>