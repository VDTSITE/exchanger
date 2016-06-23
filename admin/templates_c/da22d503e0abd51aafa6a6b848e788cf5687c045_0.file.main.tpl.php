<?php /* Smarty version 3.1.25, created on 2016-03-14 13:48:40
         compiled from "/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57829952556e6a518e6da63_14008032%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da22d503e0abd51aafa6a6b848e788cf5687c045' => 
    array (
      0 => '/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/main.tpl',
      1 => 1457956114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57829952556e6a518e6da63_14008032',
  'variables' => 
  array (
    'user_name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e6a518eb1205_40999180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e6a518eb1205_40999180')) {
function content_56e6a518eb1205_40999180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57829952556e6a518e6da63_14008032';
?>
<!doctype html>
<html class="fuelux" lang="ru">
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=no" />

	<title>Админ-панель</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<!-- Google Fonts -->

	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->

	<!-- Theme Styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link href="css/tables.css" rel="stylesheet" type="text/css"  media="all"  />
	<link href="css/icons.css" rel="stylesheet" type="text/css"  media="all"  />

	<!-- Google Maps -->
	<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"><?php echo '</script'; ?>
>

	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<link rel="shortcut icon" type="image/png" href="favicon.ico" />

</head>

<body class="no-margin-top">

	<!-- Left Sidebar Start -->
	<div class="sidebar sidebar-left">

		<!-- Logo Start -->
		<div class="logo-container">
			<a href="http://vdt.site/index.php" target="_blank"><h1>VDT.site</h1></a>
		</div>
		<!-- Logo End -->

		<!-- User Profile Start -->
		<div class="sidebar-user-profile">

			<div class="avatar">
				<img src="_demo/images/profile-75x75.jpg" alt="Jane Doe" />
			</div>

			<div class="ul-icons">
				<span class="user-info"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span>
				<ul class="icon-list">
					<li><a href="exit.php"><i class="fa fa-power-off"></i></a></li>
					<li><a href="profile.html"><i class="fa fa-cog"></i></a></li>
					<li><a href="#"><i class="fa fa-comments"></i></a></li>
				</ul>
			</div>

		</div>
		<!-- User Profile End -->

		<!-- Menu Start -->
		<ul class="active main-menu">
			<li>
				<a href="index.php">
					<i class="fa fa-home"></i>
					<span>Страницы</span>
				</a>
			</li>
			<!-- <li>
				<a href="index-angular.html#/index">
					<i class="fa fa-home"></i>
					<span>Angular APP</span>
					<span class="menu-notification">new</span>
				</a>
			</li> -->
			<li class="has-submenu">
				<a href="#">
					<i class="fa fa-cog"></i>
					<span>Дизайны</span>
				</a>
				<ul class="submenu">
					<li>
						<a href="index.php">По умолчанию</a>
					</li>
					<li>
						<a href="index-white-skin.html">Белый дизайн</a>
					</li>
					<li>
						<a href="index-green-skin.html">Зеленый дизайн</a>
					</li>
					<li>
						<a href="index-purple-skin.html">Пурпурный дизайн</a>
					</li>
				</ul>
			</li>
			<!-- <li class="has-submenu">
				<a href="#" class="close-child">
					<i class="fa fa-desktop"></i>
					<span>Layouts</span>
				</a>
				<ul class="submenu" style="display: block;">
					<li>
						<a href="index.html">Regular Dashboard</a>
					</li>
					<li>
						<a href="index-fixed-sidebar.html">Fixed Sidebar</a>
					</li>
					<li>
						<a href="index-fixed-header.html">Fixed Header</a>
					</li>
					<li>
						<a href="index-fixed-sidebar-header.html">Fixed Sidebar &amp; Header</a>
					</li>
					<li>
						<a href="index-sidebar-collapsed.html">Collapsed Sidebar</a>
					</li>
				</ul>
			</li> -->
			<!-- <li class="has-submenu">
				<a href="#"><i class="fa fa-support"></i><span>Support Center</span></a>
				<ul class="submenu">
					<li><a href="support.html">Support Archive</a></li>
					<li><a href="ticket.html">Ticket Reply</a></li>
				</ul>
			</li> -->
			<li class="has-submenu">
				<a href="mail.php"><i class="fa fa-envelope-o"></i><span>Входящие сообщения</span></a>
				<ul class="submenu">
					<li><a href="inbox.html">Inbox</a></li>
					<li><a href="message.html">Reply</a></li>
				</ul>
			</li>
			<!-- <li class="has-submenu">
				<a href="#">
					<i class="fa fa-windows"></i>
					<span>Pages</span>
				</a>
				<ul class="submenu">
					<li>
						<a href="404.html">404 Error</a>
					</li>
					<li>
						<a href="500.html">500 Error</a>
					</li>
					<li>
						<a href="login.html">Login</a>
					</li>
					<li>
						<a href="register.html">Register</a>
					</li>
					<li>
						<a href="forgotten-password.html">Forgotten Password</a>
					</li>
					<li>
						<a href="blank.html">Blank Page</a>
					</li>
					<li>
						<a href="profile.html">Profile Page</a>
					</li>
					<li>
						<a href="calendar.html">Calendar</a>
					</li>
					<li>
						<a href="grid.html">Grid Example</a>
					</li>
				</ul>
			</li> -->
			<!-- <li class="has-submenu">
				<a href="#">
					<i class="fa fa-rocket"></i>
					<span>UI Elements</span>
				</a>
				<ul class="submenu">
			          <li>
			            <a href="jquery-ui.html">UI Elements</a>
			          </li>
			          <li>
			            <a href="buttons.html">Buttons</a>
			          </li>
					<li>
						<a href="animated.html">Animated Effects</a>
					</li>
					<li>
						<a href="icons.html">Icons</a>
					</li>
					<li>
						<a href="progress-bars.html">Progress Bars</a>
					</li>
					<li>
						<a href="tables.html">Tables</a>
					</li>
					<li>
						<a href="maps.html">Maps</a>
					</li>
					<li>
						<a href="vector-maps.html">Vector Maps</a>
					</li>
					<li>
						<a href="tabs.html">Tabs</a>
					</li>
					<li>
						<a href="accordion.html">Accordions</a>
					</li>
					<li>
						<a href="modals.html">Modals</a>
					</li>
					<li>
						<a href="wysiwyg.html">Wysiwyg Editor</a>
					</li>
				</ul>
			</li> -->
			<!-- <li class="has-submenu">
				<a href="#">
					<i class="fa fa-book"></i>
					<span>Forms & Form Elements</span>
				</a>
				<ul class="submenu">
					<li><a href="forms.html">Forms</a></li>
					<li><a href="form-validation.html">Form Validation</a></li>
					<li><a href="smart-forms.html">Smart Form Elements</a></li>
				</ul>
			</li> -->
			<li>
				<a href="tasks.html">
					<i class="fa fa-file-text-o"></i>
					<span>Каталог товаров</span>
				</a>
			</li>
			<!-- <li>
				<a href="projects.html">
					<i class="fa fa-folder-open-o"></i>
					<span>Projects</span>
				</a>
			</li>
			<li>
				<a href="invoice.html">
					<i class="fa fa-dollar"></i>
					<span>Invoice</span>
				</a>
			</li> -->
		</ul>
		<!-- Menu End -->

		<!-- <div class="inner">

			Separator
			<div class="separator"></div>

			<ul class="list">

				<li>
					<div class="progress-bar-container">
						<span>Projects</span>
						<div class="progress-bar">
							<div class="progress"></div>
						</div>
						<span>60% Complete</span>
					</div>
				</li>

				<li>
					<div class="progress-bar-container">
						<span>Tasks</span>
						<div class="progress-bar">
							<div class="progress blue"></div>
						</div>
						<span>60% Complete</span>
					</div>
				</li>

				<li>
					<div class="progress-bar-container">
						<span>E-Mail</span>
						<div class="progress-bar">
							<div class="progress orange"></div>
						</div>
						<span>60% Complete</span>
					</div>
				</li>

			</ul>

		</div> -->

	</div>
	<!-- Left Sidebar End -->

	<!-- Top Content Bar Start -->
	<div class="top-bar">
		<div class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-sm-6 hidden-xs">
					<ul class="left-icons icon-list">
						<li><a href="#" class="sidebar-collapse"><i class="fa fa-dedent"></i></a></li>
						<li>
				              <a href="#"><i class="fa fa-bell"></i></a>
				              <div class="notification-box">
				                <div class="inner">
				                  <ul class="notification-list">
				                    <li class="warning">John added new task</li>
				                    <li class="info">Customer support called</li>
				                    <li class="error">Updated to version 2.0.7</li>
				                    <li class="success">Updated to version 2.0.2</li>
				                  </ul>
				                </div>
				              </div>
				            </li>
						<li>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span class="notification"></span>
							</a>
				              <div class="notification-box">
				                <div class="inner">
				                  <ul class="mail-list">
				                    <li class="starred">Subject example <span>1 hour ago</span></li>
				                    <li>Hey! <span>2 hours ago</span></li>
				                    <li>Welcome back! <span>7 days ago</span></li>
				                  </ul>
				                </div>
				              </div>
						</li>
					</ul>
				</div>

				<div class="col-lg-6 col-sm-6 col-xs-12">
					<ul class="right-icons icon-list">
						<li><a href="#"><i class="fa fa-comments"></i></a></li>
						<li><a href="search.html"><i class="fa fa-search"></i></a></li>
						<li>
							<a href="profile.html" class="welcome-user">Добро пожаловать, <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
		</div>
	</div>
	<!-- Top Content Bar End -->

	<!-- Content Start -->
	<div class="content" id="content-container">
		<div class="main-container">

			<div class="container">







			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>







			<!-- Widget Boxes Start
			<div class="row">

				<div class="col-lg-12">

					<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					Widget Box Start
					<div class="widget-box">
						<div class="counter green">155</div>
						<div class="text">
							<div>
								<strong>Registered Users</strong>
								<span>45% more then last month</span>
							</div>
						</div>
					</div>
					Widget Box End
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					Widget Box Start
					<div class="widget-box">
						<div class="counter red">155</div>
						<div class="text">
							<div>
								<strong>Unique Visitors</strong>
								<span>15% more then last month</span>
							</div>
						</div>
					</div>
					Widget Box End
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					Widget Box Start
					<div class="widget-box">
						<div class="counter blue">155</div>
						<div class="text">
							<div>
								<strong>Sales</strong>
								<span>25% more then last month</span>
							</div>
						</div>
					</div>
					Widget Box End
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					Widget Box Start
					<div class="widget-box">
						<div class="counter yellow">155</div>
						<div class="text">
							<div>
								<strong>Projects</strong>
								<span>6% more then last month</span>
							</div>
						</div>
					</div>
					Widget Box End
				</div>
					</div>
				</div>

			</div>
			Widget Boxes End -->


			<!-- <div class="row">

				Left Side Start
				<div class="col-lg-8">

					Box Start
					<div class="box">

						Title Bar Start
						<div class="box-title light-blue">
							<span>Message Analytics</span>
							<span class="subtitle">// Monthly Stats</span>
							<a href="#"><i class="fa fa-times"></i></a>
						</div>
						Title Bar End

						Content Start
						<div class="content">

							<div class="chart-area">
								<div id="revenue-chart" style="height: 250px;"></div>
							</div>

									Chart Table Start
									<div class="chart-table">

										<div class="title-bar">
											<i class="fa fa-bars"></i>
											<h5>Monthly Change</h5>
										</div>

										<div class="row">
											<div class="col-md-3">
												Monthly Sales Summary Table Start
												<div class="monthly-revenue-summary">
													<div class="month">January 2013</div><div class="sales">-</div>
													<div class="month">February 2013</div><div class="sales">+23%</div>
													<div class="month">March 2013</div><div class="sales">+21.8%</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="monthly-revenue-summary">
													<div class="month">April 2013</div><div class="sales">+8.3%</div>
													<div class="month">May 2013</div><div class="sales">+11.5%</div>
													<div class="month">June 2013</div><div class="sales">-4.3%</div>
												</div>
												Monthly Sales Summary Table End
											</div>
											<div class="col-md-3">
												Monthly Sales Summary Table Start
												<div class="monthly-revenue-summary">
													<div class="month">July 2013</div><div class="sales">-3.1%</div>
													<div class="month">August 2013</div><div class="sales">-5.1%</div>
													<div class="month">September 2013</div><div class="sales">-1.3%</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="monthly-revenue-summary">
													<div class="month">October 2013</div><div class="sales">+6.2%</div>
													<div class="month">November 2013</div><div class="sales">+2.3%</div>
													<div class="month">December 2013</div><div class="sales">+7.2%</div>
												</div>
												Monthly Sales Summary Table End
											</div>
										</div>

									</div>
									Chart Table End

						</div>
						Content End

					</div>
					Box End

					Box Start
					<div class="box">

						Title Bar Start
						<div class="box-title red">
							<span>Custom Google Maps</span>
							<span class="subtitle">&nbsp;</span>
							<a href="#"><i class="fa fa-times"></i></a>
						</div>
						Title Bar End

						Content Start
						<div class="content no-padding">

							<div class="google-maps-container">
								<div id="map-canvas-4"></div>
							</div>

						</div>
						Content End

					</div>
					Box End

				</div>
				Left Side End

				Right Side Start
				<div class="col-lg-4">

					Box Start
					<div class="box">

						Title Bar Start
						<div class="box-title gray">
							<span>Weather</span>
							<span class="subtitle">// What can we expect in next 7 days?</span>
							<a href="#"><i class="fa fa-times"></i></a>
						</div>
						Title Bar End

						Content Start
						<div class="content no-padding">
							Weather Start
							<div class="weather-widget big dark" id="step5">

								Weather Icon
								<div class="weather-icon">
									<i class="wi-day-rain-mix"></i>
									<div class="temperatures">
										<span class="max">26 &#176;</span>
										<span class="min">17 &#176;</span>
									</div>
								</div>

								Weather Status
								<div class="weather-status">
									<div class="info">
										<span class="date-time">Sunday, Dec 12, 2014 / 10:54 PM</span>
										<span class="city">Los Angeles</span>
										<span class="location">CA, United States</span>
										<span class="weather-state">Cloudy Gusts</span>
									</div>
								</div>

								Weather Prediction
								<div class="weather-prediction">
									<ul>

										Day 01
										<li>
											<span class="day">Mon</span>
											<span class="icon"><i class="wi-day-cloudy-gusts"></i></span>
											<span class="temperature">17 &#176;</span>
										</li>
										Day 02
										<li>
											<span class="day">Tue</span>
											<span class="icon"><i class="wi-day-sunny"></i></span>
											<span class="temperature">24 &#176;</span>
										</li>
										Day 03
										<li>
											<span class="day">Wed</span>
											<span class="icon"><i class="wi-day-cloudy-windy"></i></span>
											<span class="temperature">14 &#176;</span>
										</li>
										Day 04
										<li>
											<span class="day">Thu</span>
											<span class="icon"><i class="wi-day-sunny-overcast"></i></span>
											<span class="temperature">26 &#176;</span>
										</li>
										Day 04
										<li>
											<span class="day">Fri</span>
											<span class="icon"><i class="wi-day-sunny-overcast"></i></span>
											<span class="temperature">21 &#176;</span>
										</li>

									</ul>
								</div>

							</div>
							Weather End
						</div>
						Content End

					</div>
					Box End

					Box Start
					<div class="box">

						Title Bar Start
						<div class="box-title purple">
							<span>Calendar</span>
							<span class="subtitle">// Monthly Calendar</span>
							<a href="#"><i class="fa fa-times"></i></a>
						</div>
						Title Bar End

						Content Start
						<div class="content">
							<div class="calendar-widget"></div>
						</div>
						Content End

					</div>
					Box End

				</div>
				Right Side End

			</div> -->

			</div>

		</div>
	</div>
	<!-- Content End -->

<!-- Javascript -->
<?php echo '<script'; ?>
 src="assets/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>

<!-- Assets -->
<?php echo '<script'; ?>
 src="assets/flotcharts/flotcharts-common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.canvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.image.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.categories.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.crosshair.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.errorbars.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.fillbetween.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.navigate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.pie.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.selection.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.stack.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.symbol.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.colorhelpers.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts/jquery.flot.time.min.js"><?php echo '</script'; ?>
>

<!-- jQuery UI -->
<?php echo '<script'; ?>
 src="assets/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

	google.load("visualization", "1", {packages:["corechart"]});
	google.load('visualization', '1', {'packages': ['geochart']});

	<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="_demo/sidebar.min-height.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="_demo/all-pages.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="_demo/dashboard-charts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="_demo/custom-google-maps.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-53707145-1', 'auto');
	ga('send', 'pageview');

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>