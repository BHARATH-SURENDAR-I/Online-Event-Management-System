<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $pageTitle; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/fullcalendar/fullcalendar.print.css" media="print">
<script src="<?php echo WEB_ROOT; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/fastclick/fastclick.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>dist/js/app.js"></script>
<script src="<?php echo WEB_ROOT; ?>dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/fullcalendar/fullcalendar.min.js"></script>
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-yellow">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu"> 
            <a><span class="hidden-xs"></i>Welcome, <?php echo strtoupper($_SESSION['calendar_fd_user']['name']); ?></span></a>
          </li>
            <li class="dropdown user user-menu"> 
          <a href="<?php echo WEB_ROOT; ?>?logout"> 
          <span class="hidden-xs"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log Out</span> 
          </a>
            </li>
          </ul>
        </div>
    </nav>
  </header>
  <aside class="main-sidebar">
   <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="treeview"> 
        <a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Calendar</span></a>
      </li>
        <li class="treeview"> 
        <a href="<?php echo WEB_ROOT; ?>views/?v=LIST"><i class="fa fa-newspaper-o"></i><span>Trip Booking</span></a>
      </li>
      <li class="treeview"> 
        <a href="<?php echo WEB_ROOT; ?>views/?v=USERS"><i class="fa fa-users"></i><span>User Details</span></a>
      </li>
      <?php 
      $type = $_SESSION['calendar_fd_user']['type'];
      if($type == 'admin') {
      ?>
      <li class="treeview"> 
        <a href="<?php echo WEB_ROOT; ?>views/?v=HOLY"><i class="fa fa-plane"></i><span>Holidays</span></a>
      </li>
      <?php
      }
      ?>
      </ul>
</section>
  </aside>
  <div class="content-wrapper">
    <section class="content">
	  <div class="row">
	  	<?php
			require_once $content;	 
		?>
      </div>
    </section>
  </div>
  <footer class="main-footer">
		<strong>Bharath, Padmaja, Hariprasad</strong>
	</footer>
</div>
</body>
</html>