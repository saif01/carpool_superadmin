<?php
session_start();
 include('../db/config.php');
 $_SESSION['SadminName']=="";
date_default_timezone_set('Asia/Dhaka');
$ldate=date('Y-d-m h:i:s A', time());
$aa=mysqli_query($con, "UPDATE `loginlog` SET `logOut`='$ldate' WHERE `user_name`= '".$_SESSION['SadminName']."' ORDER BY `login_id` DESC LIMIT 1");
session_unset();
?>
<script language="javascript">
document.location="../admin/login";
</script>
