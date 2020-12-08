<div class="col-md-8">
  <?php include('calendar.php'); ?>
</div>
<div class="col-md-4">
<?php 
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin' || $type == 'teacher') {
	include('eventform.php');
}
else {
	echo "&nbsp;";
}
?>	
</div>