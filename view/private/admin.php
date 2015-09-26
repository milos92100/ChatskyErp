<?php
require './../../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Response;
use Slim\Http\Request;

$login = new Login();

$user = $login->isLogedIn();
if ($user == null) {
    header("Location: ./../../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<script
	src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.min.js"></script>
<script
	src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular-route.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>



<script
	src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js"
	type="text/javascript"></script>
<script
	src="http://m-e-conroy.github.io/angular-dialog-service/javascripts/dialogs.min.js"
	type="text/javascript"></script>

<title>Chatsky Admin Page</title>

<!-- Bootstrap Core CSS -->
<link
	href="./../../component/startbootstrap-sb-admin-1.0.3/css/bootstrap.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link
	href="./../../component/startbootstrap-sb-admin-1.0.3/css/sb-admin.css"
	rel="stylesheet">

<!-- Morris Charts CSS -->
<link
	href="./../../component/startbootstrap-sb-admin-1.0.3/css/plugins/morris.css"
	rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="./../../component/startbootstrap-sb-admin-1.0.3/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="./../../component/bootbox/bootbox.js"
	type="text/javascript"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">

/* Fix for Bootstrap 3 with Angular UI Bootstrap */
.modal {
	display: block;
}

/* Custom dialog/modal headers */
.dialog-header-error {
	background-color: #d2322d;
}

.dialog-header-wait {
	background-color: #428bca;
}

.dialog-header-notify {
	background-color: #eeeeee;
}

.dialog-header-confirm {
	background-color: #333333;
}

.dialog-header-error span, .dialog-header-error h4, .dialog-header-wait span,
	.dialog-header-wait h4, .dialog-header-confirm span,
	.dialog-header-confirm h4 {
	color: #ffffff;
}

/* Ease Display */
.pad {
	padding: 25px;
}
</style>
</head>


<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"
			id="main_header" ng-controller="headerCtrl">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin.php">Chatsky Admin</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><i class="fa fa-envelope"></i> <b
						class="caret"></b></a>
					<ul class="dropdown-menu message-dropdown">
						<li class="message-preview"><a href="#">
								<div class="media">
									<span class="pull-left"> <img class="media-object"
										src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>{{user.first_name + ' ' + user.last_name}}</strong>
										</h5>
										<p class="small text-muted">
											<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
										</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
						
						</a></li>
						<li class="message-preview"><a href="#">
								<div class="media">
									<span class="pull-left"> <img class="media-object"
										src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>{{user.first_name + ' ' + user.last_name}}</strong>
										</h5>
										<p class="small text-muted">
											<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
										</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
						</a></li>
						<li class="message-preview"><a href="#">
								<div class="media">
									<span class="pull-left"> <img class="media-object"
										src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>{{user.first_name + ' ' + user.last_name}}</strong>
										</h5>
										<p class="small text-muted">
											<i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
										</p>
										<p>Lorem ipsum dolor sit amet, consectetur...</p>
									</div>
								</div>
						</a></li>
						<li class="message-footer"><a href="#">Read All New Messages</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu alert-dropdown">
						<li><a href="#">Alert Name <span class="label label-default">Alert
									Badge</span></a></li>
						<li><a href="#">Alert Name <span class="label label-primary">Alert
									Badge</span></a></li>
						<li><a href="#">Alert Name <span class="label label-success">Alert
									Badge</span></a></li>
						<li><a href="#">Alert Name <span class="label label-info">Alert
									Badge</span></a></li>
						<li><a href="#">Alert Name <span class="label label-warning">Alert
									Badge</span></a></li>
						<li><a href="#">Alert Name <span class="label label-danger">Alert
									Badge</span></a></li>
						<li class="divider"></li>
						<li><a href="#">View All</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><i class="fa fa-user"></i> {{user.first_name
						+ ' ' + user.last_name}}<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
						<li><a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>
						<li><a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>
						<li><a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="#" ng-click="logOutClick()"><i
								class="fa fa-fw fa-power-off"></i> Log Out</a></li>
					</ul></li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li><a href="#/users"><i class="fa fa-fw fa-table"></i> Users</a></li>
					<li><a href="#/"><i class="fa fa-fw "></i> Tasks</a></li>
					<li><a href="#/"><i class="fa fa-fw "></i> Ebank</a></li>
					<li><a href="#/"><i class="fa fa-fw "></i> Meetings</a></li>

					<!--  <li><a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a></li>
					<li><a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a></li>
					<li><a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a></li>
					<li><a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a></li>
					<li><a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a></li>
					<li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demo" class="collapse">
							<li><a href="#">Dropdown Item</a></li>
							<li><a href="#">Dropdown Item</a></li>
						</ul></li>
					<li><a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a></li>
					<li><a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a></li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="page-wrapper" ng-view style="height: 100%;"></div>



		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->


	<script
		src="./../../component/startbootstrap-sb-admin-1.0.3/js/jquery.js"></script>


	<script
		src="./../../component/startbootstrap-sb-admin-1.0.3/js/bootstrap.min.js"></script>


	<script
		src="./../../component/startbootstrap-sb-admin-1.0.3/js/plugins/morris/raphael.min.js"></script>
	<!--<script src="./../../component/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris.min.js"></script>
	<script src="./../../component/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris-data.js"></script>-->
	<script src="./../../js/admin.js"></script>
	<script src="./../../js/Controllers/usersCtrl.js"></script>
	<script src="./../../js/Controllers/editUserCtrl.js"></script>
	<script src="./../../js/Service/UserService.js"></script>
	<script src="./../../js/Service/OfficeService.js"></script>
	<script src="./../../js/Controllers/officeCtrl.js"></script>

</body>

</html>


?>
