<?php
//firstnm lastnm email pass repass submit
include "db.php";

if(isset($_POST['submit'])){
$firstnm=$_POST['firstnm'];
$lastnm=$_POST['lastnm'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

if($pass!=$repass){
echo "<script>alert('password not match!!')</script>";
}else if($firstnm=="" || $lastnm=="" || $email=="" || $pass=="" || $repass==""){
  echo "<script>alert('Please Enter All Fields!!')</script>";
}else{

  $sql=mysqli_query($con,"select * from `principal` where `email`='$email'");
  $count=mysqli_num_rows($sql);
  if($count>0){
    echo "<script>alert('Email Id Already Registered With Us!!')</script>";
  }else{

    $sqmins=mysqli_query($con,"INSERT INTO `principal`(`firstnm`, `lastnm`, `email`, `pass`) VALUES ('$firstnm','$lastnm','$email','$pass')");
    echo "<script>alert('User Registered Successfully!!')</script>";
  }
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
   
  <section class="bg-image"
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
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="firstnm" class="form-control form-control-lg" />
                  <label class="form-label" >First Name</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" name="lastnm" class="form-control form-control-lg" />
                  <label class="form-label" >Last Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" >Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="pass" class="form-control form-control-lg" />
                  <label class="form-label" >Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="repass" class="form-control form-control-lg" />
                  <label class="form-label" >Repeat your password</label>
                </div>

                

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

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