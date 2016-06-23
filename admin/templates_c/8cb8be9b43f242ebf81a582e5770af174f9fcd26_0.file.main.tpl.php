<?php /* Smarty version 3.1.25, created on 2016-03-17 02:24:03
         compiled from "/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15885636356e9f9231a63f7_25433697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb8be9b43f242ebf81a582e5770af174f9fcd26' => 
    array (
      0 => '/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/main.tpl',
      1 => 1458174246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15885636356e9f9231a63f7_25433697',
  'variables' => 
  array (
    'user_name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e9f9231f4c04_66445956',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e9f9231f4c04_66445956')) {
function content_56e9f9231f4c04_66445956 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15885636356e9f9231a63f7_25433697';
?>
<!doctype html>
<html class="fuelux" lang="ru">
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=no" />

	<title>Админ-панель</title>



	
	<!-- Theme Styles -->


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link href="css/tables.css" rel="stylesheet" type="text/css"  media="all"  />
<link href="css/icons.css" rel="stylesheet" type="text/css"  media="all"  />
<link rel="stylesheet" type="text/css" href="/css/buttons.css">





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
 src="assets/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/flotcharts-common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.canvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.image.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.categories.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.crosshair.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.errorbars.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.fillbetween.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.navigate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.pie.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.selection.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.stack.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.symbol.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.colorhelpers.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/jquery.flot.time.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/jquery-ui-1.10.3.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/sidebar.min-height.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/all-pages.js" type="text/javascript"><?php echo '</script'; ?>
>




</body>
</html><?php }
}
?>