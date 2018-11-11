<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['username'])==0)
  { 
header('location:index');
}
else{ 

 include('include/header.php');
 include('include/manu.php');
 include('db/config.php');
  
$driver_id=$_GET['driver_id'];
$query=mysqli_query($con,"SELECT * FROM `car_driver` WHERE `driver_id`= $driver_id ");
$value = $query->fetch_assoc();


?>

 <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About <?php echo $value['driver_name']; ?></h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>This is C.P. BAngladesh Driver Profile</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-8">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content " >
                            	<ul class="package-list">
                            	<li> <h3>Name : <?php echo $value['driver_name']; ?></h3> </li>
                            	<li> Contract Number : <?php echo $value['driver_phone']; ?> </li>
                            	<li> License Number : <?php echo $value['driver_license']; ?> </li>
                            	<li> Contract NID : <?php echo $value['driver_nid']; ?> </li>
                            	<li> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-4">
                    <div class="about-image">
                        
                      <img src="admin/p_img/driverimg/<?php echo($value['driver_img']);?>" class="img-responsive" alt="Image" />
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-12">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Page Content End ==-->



<?php include('include/footer.php');
// session ending bracket
 } ?>