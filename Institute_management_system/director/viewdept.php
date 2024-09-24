<?php
include "db.php";

if(!isset($_SESSION['uid'])){
  header('location:index.php');
  }
  $useremai=$_SESSION['uid'];
  $pemail=$_GET['pemail'];
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
         <a href="logout.php" class="btn btn-success btn-sm gradient-custom-4 text-body m-1">Logout</a>
         <<a href="dashboard.php" class="btn btn-success btn-sm gradient-custom-4 text-body m-1">Home</a>
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
                  <h1 class="text-center">Department Details</h1>
                  <table class="table table-striped" id="myTable">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Department Name</th>
      <th scope="col">Department ID</th>
      <th scope="col">Year of commencement</th>
      <th scope="col">AICTE Approved Intake</th>
      <th scope="col">Duration (in year)</th>
      <th scope="col">NBA Accredation Status</th>
      <th scope="col">Accredation date</th>
      <th scope="col">No of labs</th>
      <th scope="col">No of classrooms</th>
      <th scope="col">No of tutorial rooms</th>
      <th scope="col">No of seminar halls</th>
      <th scope="col">Departmental library</th>
      <th scope="col">Student-computer ratio</th>
      <th scope="col">HOD Name</th>
      <th scope="col">HOD qualification</th>
      <th scope="col">HOD charge</th>
      <th scope="col">Total Students in first year</th>
      <th scope="col">Total Students in second year</th>
      <th scope="col">Total Students in final year</th>
      <th scope="col">Student Faculty Ratio(SFR-2019-20)</th>
      <th scope="col">Number of Regular Faculties in Department</th>
      <th scope="col">Number of vacant posts for faculty</th>
      <th scope="col">Number of vacant posts for HOD</th>
      <th scope="col">Number of PG./PhD faculties</th>
      <th scope="col">Number of Lab Assistants</th>
      <th scope="col">Number of students passed in First class in final year</th>
      <th scope="col">Result of last final year (% passing)</th>
      <th scope="col">Average result of final year of last three years (% passing)</th>
      <th scope="col">Number of Industry oriented/ Application type projects</th>
      <th scope="col">Number of Sponsored projects</th>
      <th scope="col">Placement details</th>
      <th scope="col">Faculty details</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
      $sqldeptdtl=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$pemail'");
      while($rowdb=mysqli_fetch_array($sqldeptdtl)){
      
      ?>
    <tr>
      <th scope="row">1</th>
     
      <td><?php echo $rowdb['department_name']; ?></td>
      <td><?php echo $rowdb['department_id']; ?></td>
      <td><?php echo $rowdb['year_of_commencement']; ?></td>
      <td><?php echo $rowdb['aicte_approved_intake']; ?></td>
      <td><?php echo $rowdb['duration']; ?></td>
      <td><?php echo $rowdb['nba_accredation_status']; ?></td>
      <td><?php echo $rowdb['nba_accredation_date']; ?></td>
      <td><?php echo $rowdb['no_of_labs']; ?></td>
      <td><?php echo $rowdb['no_of_classroom']; ?></td>
      <td><?php echo $rowdb['no_of_tutorial_rooms']; ?></td>
      <td><?php echo $rowdb['no_of_seminar_hall']; ?></td>
      <td><?php echo $rowdb['departmental_library']; ?></td>
      <td><?php echo $rowdb['student_comp_ratio']; ?></td>
      <td><?php echo $rowdb['hod_name']; ?></td>
      <td><?php echo $rowdb['hod_qualification']; ?></td>
      <td><?php echo $rowdb['hod_charge']; ?></td>
      <td><?php echo $rowdb['total_stud_in_first_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_second_yr']; ?></td>
      <td><?php echo $rowdb['total_stud_in_final_yr']; ?></td>
      <td><?php echo $rowdb['student_faculty_ratio']; ?></td>
      <td><?php echo $rowdb['no_of_regular_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_vacant_post_for_faculty']; ?></td>
      <td><?php echo $rowdb['No_of_vacant_post_for_hod']; ?></td>
      <td><?php echo $rowdb['no_of_pg_phd_faculties']; ?></td>
      <td><?php echo $rowdb['no_of_lab_assistants']; ?></td>
   
      <td><?php echo $rowdb['first_class_students_in_final_year']; ?></td>
      <td><?php echo $rowdb['result_of_last_final_year_per_pass']; ?></td>
      <td><?php echo $rowdb['average_result_last_three_year_final_year']; ?></td>
      <td><?php echo $rowdb['no_of_industry_oriented_projects']; ?></td>
      <td><?php echo $rowdb['no_of_sponsered_project']; ?></td>
      <td><a href=<?php echo "../principal/".$rowdb['placement_details']; ?> download>Download</a> </td>
      <td><a href="<?php echo "../principal/".$rowdb['faculty_details']; ?>" download>Download</a> </td>
   
    </tr>
    <?php } ?>
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