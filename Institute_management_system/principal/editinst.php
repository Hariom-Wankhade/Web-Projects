<?php
include "db.php";
if(!isset($_SESSION['uid'])){
header('location:index.php');
}

   //    institute_name institute_code year_of_establishment land_area principal_name principal_qualification regional_office government address institute_contact_number affiliations_by affiliations_approval_date accredations boys_hostel_intake girls_hostel_intake governmentaided private autonomous autonomous_from autonomous_to submit

$useremai=$_SESSION['uid'];
$pemail=$_GET['pemail'];

$selprindet=mysqli_query($con,"select * from `institute_details` where `principal_email`='$pemail'");
$rowpde=mysqli_fetch_array($selprindet);


if(isset($_POST['submit'])){
$institute_name=$_POST['institute_name'];
$institute_code=$_POST['institute_code'];
$year_of_establishment=$_POST['year_of_establishment'];
$land_area=$_POST['land_area'];
$principal_name=$_POST['principal_name'];
$principal_qualification=$_POST['principal_qualification'];
$regional_office=$_POST['regional_office'];
$government=$_POST['government'];
$address=$_POST['address'];
$institute_contact_number=$_POST['institute_contact_number'];
$affiliations_by=$_POST['affiliations_by'];
$affiliations_approval_date=$_POST['affiliations_approval_date'];
$accredations=$_POST['accredations'];
$boys_hostel_intake=$_POST['boys_hostel_intake'];
$girls_hostel_intake=$_POST['girls_hostel_intake'];
$governmentaided=$_POST['governmentaided'];
$private=$_POST['private'];
$autonomous=$_POST['autonomous'];
$autonomous_from=$_POST['autonomous_from'];
$autonomous_to=$_POST['autonomous_to'];

  // $sql= mysqli_query($con,"INSERT INTO `institute_details`(`institute_name`, `institute_code`, `year_of_establishment`, `land_area`, `principal_name`, `principal_qualification`, `regional_office`, `government`, `address`, `institute_contact_number`, `affiliations_by`, `affiliations_approval_date`, `accredations`, `boys_hostel_intake`, `girls_hostel_intake`, `governmentaided`, `private`, `autonomous`, `autonomous_from`, `autonomous_to`,`principal_email`) VALUES ('$institute_name','$institute_code','$year_of_establishment','$land_area','$principal_name','$principal_qualification','$regional_office','$government','$address','$institute_contact_number','$affiliations_by','$affiliations_approval_date','$accredations','$boys_hostel_intake','$girls_hostel_intake','$governmentaided','$private','$autonomous','$autonomous_from','$autonomous_to','$useremai')");

    $sql=mysqli_query($con,"UPDATE `institute_details` SET `institute_name`='$institute_name',`institute_code`='$institute_code',`year_of_establishment`='$year_of_establishment',`land_area`='$land_area',`principal_name`='$principal_name',`principal_qualification`='$principal_qualification',`regional_office`='$regional_office',`government`='$government',`address`='$address',`institute_contact_number`='$institute_contact_number',`affiliations_by`='$affiliations_by',`affiliations_approval_date`='$affiliations_approval_date',`accredations`='$accredations',`boys_hostel_intake`='$boys_hostel_intake',`girls_hostel_intake`='$girls_hostel_intake',`governmentaided`='$governmentaided',`private`='$private',`autonomous`='$autonomous',`autonomous_from`='$autonomous_from',`autonomous_to`='$autonomous_to' WHERE `principal_email`='$pemail'");

   if($sql){
    echo "<script>alert('data Updated Successfully!!');</script>";
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

                    <h1 class="text-center">Institute Details</h1>
                    </div>
                    <div class='card-body'>
                    <div class="container card p-2 mb-4">
    <div class="row">
        <div class="col-md-12">
        <form id="contact-form" method="post" action="">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Institute Name</label>
                        <input id="" type="text" name="institute_name" class="form-control" placeholder="" value="<?php echo $rowpde['institute_name'];?>" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Institute Code</label>
                        <input id="" type="text" name="institute_code" class="form-control" placeholder=""  value="<?php echo $rowpde['institute_code'];?>" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Year of Establishment</label>
                        <input id="" type="number" name="year_of_establishment" value="<?php echo $rowpde['year_of_establishment'];?>" class="form-control" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Land Area(in acres)</label>
                        <input id="" type="number" name="land_area" value="<?php echo $rowpde['land_area'];?>" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">principal Name</label>
                        <input id="" type="text" name="principal_name" value="<?php echo $rowpde['principal_name'];?>"  class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">principal Qualification</label>
                        <input id="" type="text" name="principal_qualification" value="<?php echo $rowpde['principal_qualification'];?>" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            
 
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Regional Office</label>

                        <select name="regional_office" class="form-control" id="" required>
                            <option value="">Select Regional Office</option>
                           <?php
                           $reg=mysqli_query($con,"select * from `regions`");
                           
                           while($row=mysqli_fetch_array($reg)){
                               $region=$row['region'];//db region details
                               $roff=$rowpde['regional_office'];//db dept details
                              
                              // 
?>
                        <option value='<?php echo $region; ?>' <?php if($region==$roff){ echo 'selected';  } ?>><?php echo $region; ?></option>";
                      <?php      } 
                           ?>
                        </select>

                        <!-- <input id="" type="text" name="regional_office" class="form-control" placeholder="" required="required" data-error="Regional Office is required."> -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Government </label>
                      <select name="government" id="" class="form-control">
                          <option value="">Select value</option>
                          <?php 
                                $governmentval=$rowpde['government'];
                              
                                $govtyes='';
                                $govtno='';
                                if($governmentval=="Yes"){
                                    $govtyes='selected';
                                }else 
                                if($governmentval=="No"){
                                    $govtno='selected';
                                }
                          ?>
                          <option value="Yes" <?php echo $govtyes; ?>>Yes</option>
                          <option value="No" <?php echo $govtno; ?>>No</option>
                      </select>

                        <!-- <input id="" type="text" name="type" class="form-control" placeholder="" required="required" > -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input id="" type="text" name="address" class="form-control" value='<?php echo $rowpde['address']; ?>' placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Institute Contact Number</label>
                        <input id="" type="text" value='<?php echo $rowpde['institute_contact_number']; ?>' name="institute_contact_number" class="form-control" placeholder="" required="required" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
               
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Affiliations By</label>
                        <?php 
               $affiliations_byval= $rowpde['affiliations_by'];
                                $seleaffai='';
                                $seleaffpc='';
                                $seleaffot='';
                        if($affiliations_byval=="AICTE"){
                            $seleaffai='selected';
                        }else if($affiliations_byval=="PCI"){
                            $seleaffpc='selected';
                        }else if($affiliations_byval=="OTHER"){
                            $seleaffot='selected';
                        }

                        ?>
                        <select name="affiliations_by" id="" class="form-control">
                          <option value="">Select</option>
                          <option value="AICTE" <?php echo $seleaffai; ?>>AICTE</option>
                          <option value="PCI" <?php echo $seleaffpc; ?>>PCI</option>
                          <option value="OTHER" <?php echo $seleaffot; ?>>OTHER</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Affiliations approval Date</label>
                        <input id="" type="date" name="affiliations_approval_date" value="<?php echo $rowpde['affiliations_approval_date'];?>" class="form-control" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
<!-- Institute Name, Institute Code, Year of Establishment,Land Area(in acres),principal Name,principal Qualification,Regional Office,Type,Address,Contact Number,Affiliations By,Affiliations approval Date,Accredations,Intake of boys hostel,Intake of girls hostel -->


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Is NBA Accredated Institute</label>
                        <select name="accredations" id="" class="form-control" required>
                            <?php 
                                $accredationsval=$rowpde['accredations'];
                                $accredationsvalyes="";
                                $accredationsvalno="";
                                if($accredationsval=="Yes"){
                                    $accredationsvalyes="selected";
                                }else {
                                        $accredationsvalno="selected";
                                }
                            ?>
                          <option value="">Select</option>
                          <option value="Yes" <?php echo $accredationsvalyes; ?>>Yes</option>
                          <option value="No" <?php echo $accredationsvalno; ?>>No</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Intake of boys hostel</label>
                        <input id="" type="text" name="boys_hostel_intake" value="<?php echo $rowpde['boys_hostel_intake'];?>" class="form-control" placeholder="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Intake of girls hostel</label>
                        <input id="" type="text" name="girls_hostel_intake" value="<?php echo $rowpde['girls_hostel_intake'];?>" class="form-control" placeholder="">
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
                        <label for="">Government Aided</label>
                        <?php 
                                $governmentaidedval=$rowpde['governmentaided'];
                                $governmentaidedvalyes="";
                                $governmentaidedvalno="";
                                if($governmentaidedval=="Yes"){
                                    $governmentaidedvalyes="selected";
                                }else {
                                        $governmentaidedvalno="selected";
                                }
                            ?>
                        <select name="governmentaided" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes" <?php echo $governmentaidedvalyes; ?>>Yes</option>
                          <option value="No" <?php echo $governmentaidedvalno; ?>>No</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Private Institute</label>
                        <?php 
                                $privateval=$rowpde['private'];
                                $privatevalyes="";
                                $privatevalno="";
                                if($privateval=="Yes"){
                                    $privatevalyes="selected";
                                }else {
                                        $privatevalno="selected";
                                }
                            ?>
                        <select name="private" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes" <?php echo $privatevalyes; ?>>Yes</option>
                          <option value="No" <?php echo $privatevalno; ?>>No</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Autonomous</label>
                        <?php 
                                $autonomousval=$rowpde['autonomous'];
                                $autonomousvalyes="";
                                $autonomousvalno="";
                                if($autonomousval=="Yes"){
                                    $autonomousvalyes="selected";
                                }else {
                                        $autonomousvalno="selected";
                                }
                            ?>
                        <select name="autonomous" id="" class="form-control">
                          <option value="">Select value</option>
                          <option value="Yes" <?php echo $autonomousvalyes; ?>>Yes</option>
                          <option value="No" <?php echo $autonomousvalno; ?>>No</option>
                      </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">If Autonomous? From?</label>
                        <input type="date" name="autonomous_from" value="<?php echo $rowpde['autonomous_from'];?>" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">If Autonomous? To?</label>
                        <input type="date" name="autonomous_to" value="<?php echo $rowpde['autonomous_to'];?>" class="form-control">
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
                <input type="submit" name="submit" class="btn btn-warning btn-send" value="Update">
            </div>
        </div> 
        
    </form>
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