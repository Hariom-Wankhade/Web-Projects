<?php
include "db.php";
if(!isset($_SESSION['uid'])){
header('location:index.php');
}
$useremai=$_SESSION['uid'];
$clnm=$_GET['clgnm'];

$sqlreg1=mysqli_query($con,"select * from `institute_details` where `institute_name`='$clnm'");
$rowreg1=mysqli_fetch_array($sqlreg1);
$uregional_office=$rowreg1['regional_office'];
//
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <title>Institute Management System</title>
    <style>
       a{
            margin:40px;
            
            
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
  </head>
  <body class="gradient-custom-3">
  <div class="container-fluid">
     <div class="row">
       <div class="col-md-12" style="text-align:right;">
       <a href="dashboard.php" class="btn btn-success btn-sm gradient-custom-4 text-body m-1">Home</a>
         <a href="logout.php" class="btn btn-success btn-sm gradient-custom-4 text-body m-1">Logout</a>
       </div>
     </div>
   </div>
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 mask d-flex align-items-center h-100 card" style="border-radius: 15px;">
           <div style="margin:auto;width:10%">
              <img src="img/logo.gif" alt="" >
              </div>

              <div class="table-responsive">
                  <h1 class="text-center">Institute Details</h1>
                  <table class="table table-striped" id="myTable">
           
  <thead>
    <tr>
 
      <th scope="col">#</th>
   
      <th scope="col">Institute Name</th>
      <th scope="col">Institute Code</th>
      <th scope="col">Year of Establishment</th>
      <th scope="col">Land Area (in acres)</th>
      <th scope="col">Principal Name</th>
      <th scope="col">Principal Qualification</th>
      <th scope="col">Regional Office</th>
      <th scope="col">Government</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Affiliations By</th>
      <th scope="col">Affiliations approval Date</th>
      <th scope="col">Accredations</th>
      <th scope="col">Intake of boys hostel</th>
      <th scope="col">Intake of girls hostel</th>
      <th scope="col">governmentaided</th>
      <th scope="col">private</th>
      <th scope="col">Autonomous</th>
      <th scope="col">Autonomous_from</th>
      <th scope="col">Autonomous_to</th>
      <th scope="col">View Department</th>
     
   
     

      
    </tr>
  </thead>
  <tbody>
      <?php
        $sqldb=mysqli_query($con,"select * from `institute_details` where `institute_name`='$clnm'");
        while($row=mysqli_fetch_array($sqldb)){    
      ?>
    <tr>  
      <th scope="row">1</th>
      <td><?php echo $row['institute_name']; ?></td>
      <td><?php echo $row['institute_code']; ?></td>
      <td><?php echo $row['year_of_establishment']; ?></td>
      <td><?php echo $row['land_area']; ?></td>
      <td><?php echo $row['principal_name']; ?></td>
      <td><?php echo $row['principal_qualification']; ?></td>
      <td><?php echo $row['regional_office']; ?></td>
      <td><?php echo $row['government']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['institute_contact_number']; ?></td>
      <td><?php echo $row['affiliations_by']; ?></td>
      <td><?php echo $row['affiliations_approval_date']; ?></td>
      <td><?php echo $row['accredations']; ?></td>
      <td><?php echo $row['boys_hostel_intake']; ?></td>
      <td><?php echo $row['girls_hostel_intake']; ?></td>
      <td><?php echo $row['governmentaided']; ?></td>
      <td><?php echo $row['private']; ?></td>
      <td><?php echo $row['autonomous']; ?></td>
      <td><?php echo $row['autonomous_from']; ?></td>
      <td><?php echo $row['autonomous_to']; ?></td>
     <td><a href="viewdept.php?pemail=<?php echo $row['principal_email']; ?>"><i class='fa fa-eye' style='font-size:24px'></i></a></a></td>
    <?php } ?>
    </tr>
    
  </tbody>
</table>

            </div>
           </div>
       </div>
   </div>

   <div class="container-fluid mt-2">
       <div class="row">
           <div class="col-md-12 mask d-flex align-items-center h-100 card" style="border-radius: 15px;">
        

              <div class="table-responsive">
                  
              <table class="table table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activity</th>
      
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">No of Govt. Institute</th>
      <td>
<?php
$sqlgov=mysqli_query($con,"select * from `institute_details` where `government`='Yes' and `regional_office`='$uregional_office'");
echo $countgovt=mysqli_num_rows($sqlgov);
?>

      </td>
    </tr>
    <tr>
      <th scope="row">No of Govt. Autonomous</th>
      <td>
      <?php
$sqlauto=mysqli_query($con,"select * from `institute_details` where `autonomous`='Yes' and `regional_office`='$uregional_office'");
echo $countgaut=mysqli_num_rows($sqlauto);
?>
      </td>
    </tr>
    <tr>
      <th scope="row">No of Govt. Aided</th>
      <td>
      <?php
$sqlautog=mysqli_query($con,"select * from `institute_details` where `governmentaided`='Yes' and `regional_office`='$uregional_office'");
echo $countgautg=mysqli_num_rows($sqlautog);
?>
      </td>
    </tr>
    <tr>
      <th scope="row">No of private Institute</th>
      <td>    <?php
$sqlautogp=mysqli_query($con,"select * from `institute_details` where `private`='Yes' and `regional_office`='$uregional_office'");
echo $countgautgp=mysqli_num_rows($sqlautogp);
?></td>
    </tr>
   

    <tr>
      <th scope="row">No of Accredated Institute</th>
      <td> <?php
$sqlautogpa=mysqli_query($con,"select * from `institute_details` where `accredations`='Yes' and `regional_office`='$uregional_office'");
echo $countgautgpa=mysqli_num_rows($sqlautogpa);
?></td>
    </tr>
    <tr>
      <th scope="row">No of Non Accredated Institute</th>
      <td>
      <?php
$sqlautogpan=mysqli_query($con,"select * from `institute_details` where `accredations`='No' and `regional_office`='$uregional_office'");
echo $countgautgpan=mysqli_num_rows($sqlautogpan);
?>
      </td>
    </tr>
    <tr>
      <th scope="row">Institude Wise vacant post of faculties and HOD's</th>
      <td><?php

$deptregoff=mysqli_query($con,"select * from `institute_details` where `regional_office`='$uregional_office'");
while($deptregoffrow=mysqli_fetch_array($deptregoff)){
$dbinstpemail= $deptregoffrow['principal_email'];
echo $dbinstpemaildb= $deptregoffrow['institute_name'];
echo "<hr>";
$sqlautogpa=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$dbinstpemail'");
while($rowinst=mysqli_fetch_array($sqlautogpa)){
 echo  $no_of_vacant_post_for_facultydb=$rowinst['department_name']." | ".$rowinst['no_of_vacant_post_for_faculty']."<br>";
 echo  $No_of_vacant_post_for_hoddb=$rowinst['department_name']." | ".$rowinst['No_of_vacant_post_for_hod']."<br><br>";

}

}

?></td>  
    </tr>
    <tr>
      <th scope="row">No of PHD Faculties</th>
      <td>
      <?php

$deptregoff1=mysqli_query($con,"select * from `institute_details` where `regional_office`='$uregional_office'");
while($deptregoffrow1=mysqli_fetch_array($deptregoff1)){
$dbinstpemail1= $deptregoffrow1['principal_email'];
echo $dbinstpemaildb1= $deptregoffrow1['institute_name'];
echo "<hr>";
$sqlautogpa1=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$dbinstpemail1'");
while($rowinst1=mysqli_fetch_array($sqlautogpa1)){
 echo  $no_of_vacant_post_for_facultydb1=$rowinst1['department_name']." | ".$rowinst1['no_of_pg_phd_faculties']."<br><br>";
 

}

}

?>

 

  </tbody>
</table>
            </div>
           </div>
       </div>
   </div>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    });
} );
    </script>

    

  </body>
</html>