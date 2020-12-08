<?php 
$records = getBookingRecords();
$utype = '';
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin') {
	$utype = 'on';
}
else if($type=='student'){
  $utype='off';
}
?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Event Booking Details</h3>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Booking Date</th>
          <th style="width: 140px">Number of People</th>
          <th style="width: 100px">Status</th>
          <?php if($utype == 'on') { ?>
		  <th >Action</th>
		  <?php } ?>
      <?php if($utype == 'off') { ?>
      <th >Register</th>
      <?php } ?>
        </tr>
        <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
		$stat = '';
		if($status == "PENDING") {$stat = 'warning';}
		else if ($status == "APPROVED") {$stat = 'success';}
		else if($status == "DENIED") {$stat = 'danger';}
		?>
        <tr>
          <td><?php echo $idx++; ?></td>
          <td><a href="<?php echo WEB_ROOT; ?>views/?v=USER&ID=<?php echo $user_id; ?>"><?php echo strtoupper($user_name); ?></a></td>
          <td><?php echo $user_email; ?></td>
          <td><?php echo $user_phone; ?></td>
          <td><?php echo $res_date; ?></td>
          <td><?php echo $count; ?></td>
          <td><span class="label label-<?php echo $stat; ?>"><?php echo $status; ?></span></td>
          <?php if($utype == 'on') { ?>
		  <td><?php if($status == "PENDING") {?>
            <a href="javascript:approve('<?php echo $user_id ?>');">Approve</a>&nbsp;/
			&nbsp;<a href="javascript:decline('<?php echo $user_id ?>');">Denied</a>&nbsp;/
			&nbsp;<a href="javascript:deleteUser('<?php echo $user_id ?>');">Delete</a>
            <?php } else { ?>
			<a href="javascript:deleteUser('<?php echo $user_id ?>');">Delete</a>
			<?php }//else ?>
          </td>
		  <?php } ?>
      <?php if($utype == 'off') { ?>
      <td><?php if($status == "APPROVED") {?>
            <a href="javascript:register('<?php echo $user_id ?>','<?php echo $rid ?>');">Register</a>&nbsp;
      <?php }//else ?>
          </td>
      <?php } ?>
        </tr>
        <?php } ?>
      </table>
    </div>
    <div class="box-footer clearfix">
      <?php echo generatePagination(); ?> </div>
  </div>
</div>
<script language="javascript">
function approve(userId) {
	if(confirm('Confirm approve?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=approve&userId='+userId;
	}
}
function decline(userId) {
	if(confirm('Confirm decline?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=denide&userId='+userId;
	}
}
function deleteUser(userId) {
	if(confirm('Deleting user will also delete it\'s booking from calendar.\n\nProceed?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=delete&userId='+userId;
	}
}
function register(userId,rid){
    if(confirm('confirm register?')){

      var res=userId.toString().concat("&rid=",rid.toString());
      console.log(res);
      window.location.href='<?php echo WEB_ROOT; ?>api/process.php?cmd=userreg&userId='+res;
    }
  }
</script>