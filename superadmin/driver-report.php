<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['SadminName'])==0)
  { 
header('location:../admin/login');
}
else{

include('../db/config.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CPB.CarPool</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />



        <script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 600 + ',height=' + 780 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>


    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <?php include('common/navbar.php'); ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <!-- partial:partials/_sidebar.html -->
                <?php include('common/sidebar.php'); ?>
                <!-- partial -->
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">


                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title">All Booked Information </h4> -->
                                        <button class="card-title btn btn-outline btn-block ">All Driver Leave Report</button>
                                        <div class="table-responsive ">
                                            <table id="example" class="table table-striped table-bordered table-responsive-md col-lg-12">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Driver</th>
                                                        <th>Phone</th>
                                                        <th>License</th>
                                                        <th>NID</th>                                                        
                                                       <th>Leave Start</th>
                                                        <th>Leave Ends</th>
                                                        <th>Status</th>
                                                        <th>Reg. Date</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
    $query=mysqli_query($con,"SELECT * FROM `driver_leave`");

    while($row=mysqli_fetch_array($query))
    {

?>
                                                    <tr>

                                                        <td>
                                                            <?php echo htmlentities($row['driver_leave_id']); ?> </td>

                                                        <td>
                                             <?php
                  $driver_id=$row['driver_id'];
                  $sql=mysqli_query($con,"SELECT * FROM `car_driver` WHERE `driver_id`='$driver_id' ");
                  $row2=$sql->fetch_assoc();


                  ?>
                <a href="javascript:void(0);" onClick="popUpWindow('driver-profile.php?driver_id=<?php echo $driver_id;?>');" title="View Driver Info.">

                    <?php echo htmlentities($row2['driver_name']); ?> </a>


                                                        </td>

                                        <td><?php echo htmlentities($row2['driver_phone']); ?></td>
                                        <td><?php echo htmlentities($row2['driver_license']);?> </td>
                                         <td><?php echo htmlentities($row2['driver_nid']); ?></td>
                                          
                                        
                                                        <td>
                                     <?php echo date("M j, Y", strtotime($row['driver_leave_start'])); ?>
                                                        </td>

                                                        <td class="center">
                                        <?php echo date("M j, Y", strtotime($row['driver_leave_end'])); ?>
                                                        </td>


                                                        <td class="center">
                                                            <?php
                                                            if ($row['leave_status']=='1') {
                                                                echo "Ok";
                                                            }
                                                            else{
                                                                echo "Canceled";
                                                            }?>
                                                             
                                                        </td>

                                                        <td><?php echo date("M j, Y", strtotime($row['Leave_reg'])); ?></td>

                                                        
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
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <?php include('common/footer.php') ?>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <script src="vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    lengthChange: false,
                    buttons: [ 'excel', 'pdf', 'colvis' ]
                });

                table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            });
        </script>

    </body>

    </html>

    <?php } ?>