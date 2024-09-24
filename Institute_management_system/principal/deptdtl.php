<?php
include "db.php";
if(!isset($_SESSION['uid'])){
    header('location:index.php');
    }
    $useremai=$_SESSION['uid'];
if(isset($_POST['submit'])){
   //  department_name department_id year_of_commencement aicte_approved_intake duration nba_accredation_status nba_accredation_date
// no_of_labs no_of_classroom no_of_tutorial_rooms no_of_seminar_hall departmental_library student_comp_ratio hod_name hod_qualification 

//hod_charge total_stud_in_first_yr total_stud_in_second_yr total_stud_in_final_yr student_faculty_ratio no_of_regular_faculties no_of_vacant_post_for_faculty No_of_vacant_post_for_hod no_of_pg_phd_faculties no_of_lab_assistants first_class_students_in_final_year result_of_last_final_year_per_pass average_result_last_three_year_final_year no_of_industry_oriented_projects no_of_sponsered_project  placement_details faculty_details
$department_name=$_POST['department_name'];
$department_id=$_POST['department_id'];
$year_of_commencement=$_POST['year_of_commencement'];
$aicte_approved_intake=$_POST['aicte_approved_intake'];
$duration=$_POST['duration'];
$nba_accredation_status=$_POST['nba_accredation_status'];
$nba_accredation_date=$_POST['nba_accredation_date'];
$no_of_labs=$_POST['no_of_labs'];
$no_of_classroom=$_POST['no_of_classroom'];
$no_of_tutorial_rooms=$_POST['no_of_tutorial_rooms'];
$no_of_seminar_hall=$_POST['no_of_seminar_hall'];
$departmental_library=$_POST['departmental_library'];
$student_comp_ratio=$_POST['student_comp_ratio'];
$hod_name=$_POST['hod_name'];
$hod_qualification=$_POST['hod_qualification'];
$hod_charge=$_POST['hod_charge'];
$total_stud_in_first_yr=$_POST['total_stud_in_first_yr'];
$total_stud_in_second_yr=$_POST['total_stud_in_second_yr'];
$total_stud_in_final_yr=$_POST['total_stud_in_final_yr'];
$student_faculty_ratio=$_POST['student_faculty_ratio'];
$no_of_regular_faculties=$_POST['no_of_regular_faculties'];
$no_of_vacant_post_for_faculty=$_POST['no_of_vacant_post_for_faculty'];
$No_of_vacant_post_for_hod=$_POST['No_of_vacant_post_for_hod'];
$no_of_pg_phd_faculties=$_POST['no_of_pg_phd_faculties'];
$no_of_lab_assistants=$_POST['no_of_lab_assistants'];
$first_class_students_in_final_year=$_POST['first_class_students_in_final_year'];
$result_of_last_final_year_per_pass=$_POST['result_of_last_final_year_per_pass'];
$average_result_last_three_year_final_year=$_POST['average_result_last_three_year_final_year'];
$no_of_industry_oriented_projects=$_POST['no_of_industry_oriented_projects'];
$no_of_sponsered_project=$_POST['no_of_sponsered_project'];
//placement_details faculty_details
$target_dir1 = "placement_details/";
$target_dir2 = "faculty_details/";

$target_file1 = $target_dir1 . basename($_FILES["placement_details"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["faculty_details"]["name"]);

move_uploaded_file($_FILES["placement_details"]["tmp_name"], $target_file1);
move_uploaded_file($_FILES["faculty_details"]["tmp_name"], $target_file2);

$sql=mysqli_query($con,"INSERT INTO `deptdetails`(`department_name`, `department_id`, `year_of_commencement`, `aicte_approved_intake`, `duration`, `nba_accredation_status`, `nba_accredation_date`, `no_of_labs`, `no_of_classroom`, `no_of_tutorial_rooms`, `no_of_seminar_hall`, `departmental_library`, `student_comp_ratio`, `hod_name`, `hod_qualification`, `hod_charge`, `total_stud_in_first_yr`, `total_stud_in_second_yr`, `total_stud_in_final_yr`, `student_faculty_ratio`, `no_of_regular_faculties`, `no_of_vacant_post_for_faculty`, `No_of_vacant_post_for_hod`, `no_of_pg_phd_faculties`, `no_of_lab_assistants`, `first_class_students_in_final_year`, `result_of_last_final_year_per_pass`, `average_result_last_three_year_final_year`, `no_of_industry_oriented_projects`, `no_of_sponsered_project`, `placement_details`, `faculty_details`,`principal_email`) VALUES ('$department_name','$department_id','$year_of_commencement','$aicte_approved_intake','$duration','$nba_accredation_status','$nba_accredation_date','$no_of_labs','$no_of_classroom','$no_of_tutorial_rooms','$no_of_seminar_hall','$departmental_library','$student_comp_ratio','$hod_name','$hod_qualification','$hod_charge','$total_stud_in_first_yr','$total_stud_in_second_yr','$total_stud_in_final_yr','$student_faculty_ratio','$no_of_regular_faculties','$no_of_vacant_post_for_faculty','$No_of_vacant_post_for_hod','$no_of_pg_phd_faculties','$no_of_lab_assistants','$first_class_students_in_final_year','$result_of_last_final_year_per_pass','$average_result_last_three_year_final_year','$no_of_industry_oriented_projects','$no_of_sponsered_project','$target_file1','$target_file2','$useremai')");

if($sql){
echo "<script>alert('Data Inserted Successfully!!')p</script>";
}


}

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <title>Institute Management System</title>
    <style>
       a{
            margin:40px;
            
            
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="js/script.js"></script>
  </head>
  <body class="gradient-custom-3">
  <div class='dashboard'>
    <div class="dashboard-nav" style="z-index: 2;">
    
        <nav class="dashboard-nav-list"><a
                href="dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Institute Details
        </a>

        <a
                href="deptdtl.php" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Department Details
        </a>
            <!-- <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-photo-video"></i> Media </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                        href="#" class="dashboard-nav-dropdown-item">Images</a><a
                        href="#" class="dashboard-nav-dropdown-item">Video</a></div>
            </div> -->
           
           
          <div class="nav-item-divider"></div>
          <a
                    href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container-fluid'>
                <div class='card'>
                    <div class='card-header'>
                    <div style="margin:auto;width:10%">
              <img src="img/logo.gif" alt="" >
              </div>

                    <h1 class="text-center">Department Details</h1>
                    </div>
                    <div class='card-body'>
                    <div class="container card p-2 mb-4">
    <div class="row">
        <div class="col-md-12">
        <form id="contact-form" method="post" action="" enctype="multipart/form-data">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Department Name *</label>
                        
                        <select name="department_name" id="" class="form-control">
                          <option value="">Select value</option>
                          <?php
                          $sqldeptnm=mysqli_query($con,"select * from `department`");
                        while($row=mysqli_fetch_array($sqldeptnm)){
                            $deptnm1=$row['department_name'];
                            echo "<option value='$deptnm1'>$deptnm1</option>";

                        }

                          ?>
                          
                        </select>
                      
                       
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Department Id *</label>
                        <input id="" type="text" name="department_id" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Year of Comencement *</label>
                        <input id="" type="number" name="year_of_commencement" class="form-control" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">AICTE Approved intake *</label>
                        <input id="" type="number" name="aicte_approved_intake" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Duration(In Year) *</label>
                        <input id="" type="number" name="duration" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            
 
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">NBA Accredation Status *</label>

                        <select name="nba_accredation_status" class="form-control" id="" required>
                            <option value="">Select</option>
                            <option value="Accredated">Accredated</option>
                            <option value="Not Accredated">Not Accredated</option>
                            <option value="Applied">Applied</option>
                            <option value="Not Applied">Not Applied</option>
                            <option value="Not Eligible">Not Eligible</option>
                        </select>

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">NBA Accredation Date</label>
                        <input id="" type="date" name="nba_accredation_date" class="form-control" placeholder="">

                        <!-- <input id="" type="text" name="type" class="form-control" placeholder="" required="required" > -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of Labs</label>
                        <input id="" type="number" name="no_of_labs" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of Classroom</label>
                        <input id="" type="number" name="no_of_classroom" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of Tutorial Rooms</label>
                        <input id="" type="number" name="no_of_tutorial_rooms" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of seminar Hall</label>
                        <input id="" type="number" name="no_of_seminar_hall" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
<!-- Institute Name, Institute Code, Year of Establishment,Land Area(in acres),principal Name,principal Qualification,Regional Office,Type,Address,Contact Number,Affiliations By,Affiliations approval Date,Accredations,Intake of boys hostel,Intake of girls hostel -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Departmental Library</label>
                        <select name="departmental_library" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Student Computer Ratio</label>
                        <input id="" type="text" name="student_comp_ratio" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">HOD Name</label>
                        <input id="" type="text" name="hod_name" class="form-control" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <!-- <select name="government" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select> -->
                      
                      <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">HOD Qualification</label>
                        <select name="hod_qualification" id="" class="form-control" required>
                          <option value="">Select value</option>
                          <option value="Under Graduate">Under Graduate</option>
                          <option value="Post Graduate">Post Graduate</option>
                          <option value="PHD">PHD</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">HOD Charge</label>
                       
                      <input type="text" name="hod_charge" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Total Students in First Year</label>
                        <input type="number" name="total_stud_in_first_yr" class="form-control" required>
                      
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Total Students in Second Year</label>
                        <input type="number" name="total_stud_in_second_yr" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Total Students in final Year</label>
                        <input type="number" name="total_stud_in_final_yr" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Student Faculty Ratio(current Year)</label>
                        <input type="text" name="student_faculty_ratio" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Number Of Regular Faculties</label>
                        <input type="number" name="no_of_regular_faculties" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No OF Vacant Post For Faculty</label>
                        <input type="number" name="no_of_vacant_post_for_faculty" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">No OF Vacant Post For HOD</label>
                        <input type="number" name="No_of_vacant_post_for_hod" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of PG/PHD Faculties</label>
                        <input type="number" name="no_of_pg_phd_faculties" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">No Of Lab Assistants</label>
                        <input type="number" name="no_of_lab_assistants" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">No Of First Class student in Final Year</label>
                        <input type="number" name="first_class_students_in_final_year" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                   
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Result Of last final Year(% Passing)</label>
                        <input type="number" name="result_of_last_final_year_per_pass" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Average Result of Final Year Last 3 Years (%p assing)</label>
                        <input type="number" name="average_result_last_three_year_final_year" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">No Of Industry oriented/Application type Project</label>
                        <input type="number" name="no_of_industry_oriented_projects" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Number Of Sponsored Project</label>
                        <input type="number" name="no_of_sponsered_project" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Placement Details(Attach File)</label>
                        <input type="file" name="placement_details" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Faculty details(Attach File)</label>
                        <input type="file" name="faculty_details" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                       
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                       
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="clearfix"></div>

         <div class="row">
            <!--<div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>-->
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-warning btn-send" value="Submit">
            </div>
        </div> 
        
    </form>
        </div>
        </div>
        </div>


                    <div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
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
      <th scope="col">Placement details (attached file)</th>
      <th scope="col">Faculty details (attached file)</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sqldeptdtl=mysqli_query($con,"select * from `deptdetails` where `principal_email`='$useremai'");
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
      <td><a href="<?php echo $rowdb['placement_details']; ?>" download>Download</a> </td>
      <td><a href="<?php echo $rowdb['faculty_details']; ?>" download>Download</a> </td>
     <td><a href="editdept.php?deptid=<?php echo $rowdb['department_id']; ?>"><i class='fas fa-edit' style='font-size:24px'></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</div>
                    </div>
                </div>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
  </body>
</html>