<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'Y-m-d H:i:s', time () );//H, Time in 24 hours show , h, for 12 hours 
$currentDate=date('Y-m-d');

if(strlen($_SESSION['username'])==0)
  { 
header('location:index');
}
else{ 

 include('include/header.php');
 include('include/social_link_top.php');
 include('include/manu.php');
 
 include('db/config.php');
?>
<!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">

                       <h2> 
                        <?php echo htmlentities($_SESSION['username']) ?>'s Booked car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!--== FAQ Area Start ==-->
    <section id="faq-page-area" class="section-padding">
        <div class="container">
            <div class="row">



                <!-- FAQ Content Start -->
                <div class="col-lg-12">
                    <div class="faq-details-content">
                        <!-- Single FAQ Subject  Start -->
                        <div class="single-faq-sub">
                            <!-- <h3>Booked Info</h3> -->

                            <?php
            $user_id=$_SESSION['user_id'];
                    //$query=mysqli_query($con,"SELECT * FROM `car_booking` WHERE `user_id` = '$user_id' ORDER BY `booking_id` DESC LIMIT 4");
                    $query=mysqli_query($con,"SELECT * FROM `car_booking` WHERE `user_id`='$user_id' AND `start_date` >='$currentDate' ORDER BY`booking_id` DESC ");
                    while($row=mysqli_fetch_array($query))
                    {  

$startDate=$row['start_date'];
$endDate=$row['end_date'];

 $date1 = new DateTime($startDate);
   $date2 = new DateTime($endDate);

$sdate=$date1->format('d.M.Y'); 
$edate=$date2->format('d.M.Y');

$sdate2=$date1->format('d-m-Y h:i:s A ');
$edate2=$date2->format('d-m-Y h:i:s A');


 //Start Time Subtraction and convert to days.
        $ts1    =   strtotime($startDate);
        $ts2    =   strtotime($endDate);
        $seconds    = abs($ts2 - $ts1); # difference will always be positive
        $days = round($seconds/(60*60*24));
  //Start Time Subtraction and convert to days.


                          ?>

                                <div class="single-faq-sub-content ">
                                    <div id="accordion">
                                        <!-- Single FAQ Start -->
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span><?php echo htmlentities($sdate); ?> ---- to ---- <?php echo htmlentities($edate); ?></span>  

                                             <b style="margin-left: 20%"><?php echo $days; ?> Days </b>

                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button></h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">

                                                    <!-- Single Car Start -->
                                                    <div class="single-car-wrap">
                                                        <div class="row">
                                                            <!-- Single Car Thumbnail -->
                                                            <div class="col-lg-4">
                                                                <div class="car-list-thumb-s">
                                                                    <a href="car-details?car_id=<?php echo htmlentities($row['car_id']);?> ">  <img src="admin/p_img/carImg/<?php echo($row['car_img']);?>" class="" alt="Image" /></a>
                                                                </div>
                                                            </div>
                                                            <!-- Single Car Thumbnail -->

                                                            <!-- Single Car Info -->
                                        <div class="col-lg-8">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2>
                                                <a href="#">
                                            <?php echo htmlentities($row['car_name']); ?> --: <?php echo htmlentities($row['car_number']); ?> 

                                                        </a>
                                                    </h2>
                                                <ul class="car-info-list">
                                            <li> Location :<b> <?php echo htmlentities($row['location']); ?></b></li>
                                                </ul>
                                                <ul class="car-info-list">
                                                <li><b><?php echo htmlentities($sdate2); ?></b> --To-- <b> <?php echo htmlentities($edate2); ?></b>
                                                  
                                                </li>
                                                </ul>

                <?php 
            $booking_status=$row['boking_status'];
            $booked_Date = date($endDate);
                if ($booked_Date > $currentTime && $booking_status==1) {?>                   
                    <a href="cancle-booking?booking_id=<?php echo htmlentities($row['booking_id']); ?>" class="rent-btn">Cancle Booking</a>
               <?php
                }
                elseif($booking_status==0){
//echo "Canceled";
?> <button type="button" class="btn btn-info">Booking Canceled</button> <?php

                   }
                else{
?> <button type="button" class="btn btn-danger">Date Expaired</button> <?php
                }

$cost=$row['booking_cost'];
$driver_rating=$row['driver_rating'];
$start_mileage=$row['start_mileage'];
$end_mileage=$row['end_mileage'];



if ($cost !=='' && $driver_rating !=='' && $start_mileage !=='' && $end_mileage !=='' && $booking_status==1 ) {
    
?> <button type="button" class="btn btn-success">Thank You For Comment</button> <?php
}
elseif($booking_status==0 ){

}
else{

    $car_id=$row['car_id'];
     $query2=mysqli_query($con,"SELECT `driver_id` FROM `car_driver` WHERE `car_id`='$car_id' ");
    $row2=$query2->fetch_assoc();
                        
?><a href="user-comment?booking_id=<?php echo htmlentities($row['booking_id']); ?> &driver_id=<?php echo htmlentities($row2['driver_id']); ?>" class="rent-btn">Comment</a> <?php

}
                 ?>


                       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Single Car info -->

                                                        </div>
                                                    </div>
                                                    <!-- Single Car End -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single FAQ End -->
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== FAQ Area End ==-->

    <!--== Footer and Common js File start ==-->
    <?php include('include/footer.php'); ?>
    <!--== Footer and Common js File end ==-->

    <?php } ?>