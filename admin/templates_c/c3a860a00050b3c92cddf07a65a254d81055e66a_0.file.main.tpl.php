<?php /* Smarty version 3.1.25, created on 2016-05-06 03:16:47
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:858242521572be26fb31053_14285786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a860a00050b3c92cddf07a65a254d81055e66a' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/main.tpl',
      1 => 1462493787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858242521572be26fb31053_14285786',
  'variables' => 
  array (
    'user_photo' => 0,
    'user_name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572be26fb55735_53835341',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572be26fb55735_53835341')) {
function content_572be26fb55735_53835341 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '858242521572be26fb31053_14285786';
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
			<a href="http://vdt.site/" target="_blank"><h1>Yuolla.by</h1></a>
		</div>
		<!-- Logo End -->

		<!-- User Profile Start -->
		<div class="sidebar-user-profile">

			<div class="avatar">
				<img src="../images/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" alt="Jane Doe" style="width: 85px; margin-left: auto; margin-right: auto; background-position: cover;"/>
			</div>

			<div class="ul-icons">
				<span class="user-info" style="font-size: 13px !important;"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
, добро пожаловать!</span>
				<br />
				<br />
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
						<a href="index.php">Текущий</a>
					</li>
					<!-- <li>
						<a href="index-white-skin.html">Белый дизайн</a>
					</li>
					<li>
						<a href="index-green-skin.html">Зеленый дизайн</a>
					</li>
					<li>
						<a href="index-purple-skin.html">Пурпурный дизайн</a>
					</li> -->
				</ul>
			</li>

			<!-- <li class="has-submenu">
				<a href="#"><i class="fa fa-support"></i><span>Support Center</span></a>
				<ul class="submenu">
					<li><a href="support.html">Support Archive</a></li>
					<li><a href="ticket.html">Ticket Reply</a></li>
				</ul>
			</li> -->
			<li class="has-submenu">
				<a href="view_orders.php"><i class="fa fa-database"></i><span> Заказы</span></a>
				<ul class="submenu">
					<li><a href="view_orders.php">Список заказов</a></li>
					<li><a href="view_archive.php">Архив заказов</a></li>
				</ul>
			</li>
			<li class="has-submenu">
				<a href="view_orders.php"><i class="fa fa-envelope-o"></i><span> Почта</span></a>
				<ul class="submenu">
					<li><a href="request.php">Заявки</a></li>
					<li><a href="video_report.php">Видеоотчет</a></li>
					<li><a href="view_contact.php">Обратная связь</a></li>
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

			<li class="has-submenu">
				<a href=""><i class="fa fa-book"></i><span>Товары</span></a>
				<ul class="submenu">
					<li><a href="view_products.php">Список товаров</a></li>
					<li><a href="add_products.php">Добавление товара</a></li>
				</ul>
			</li>
			<li class="has-submenu">
				<a href=""><i class="fa fa-folder-open-o"></i><span> Категории</span></a>
				<ul class="submenu">
					<li><a href="view_categories.php">Список Категорий</a></li>
					<li><a href="add_categories.php">Добавление категории</a></li>
				</ul>
			</li>


			<li class="has-submenu">
				<a href=""><i class="fa fa-folder-open-o"></i><span> Подкатегории</span></a>
				<ul class="submenu">
					<li><a href="view_sub_categories.php">Список подкатегорий</a></li>
					<li><a href="add_sub_categories.php">Добавление подкатегории</a></li>
				</ul>
			</li>
			<li class="has-submenu">
				<a href=""><i class="fa fa-picture-o"></i><span> Портфолио</span></a>
				<ul class="submenu">
					<li><a href="view_portfolio_categories.php">Категории портфолио</a></li>
					<li><a href="add_portfolio_categories.php">Добавление категории портфолио</a></li>
					<li><a href="view_porfolio.php">Все работы</a></li>
					<li><a href="add_portfolio.php">Добавление работы</a></li>
				</ul>
			</li>

			<li class="has-submenu">
				<a href="#" class="close-child">
					<i class="fa fa-newspaper-o"></i>
					<span>Новости</span>
				</a>
				<ul class="submenu" style="display: block;">
					<li>
						<a href="view_news.php">Список новостей</a>
					</li>
					<li>
						<a href="add_news.php">Добавление новости</a>
					</li>
					<!-- <li>
						<a href="index-fixed-sidebar.html">Fixed Sidebar</a>
					</li> -->

				</ul>
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
						<!-- <li>
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
						</li> -->
					</ul>
				</div>

				<div class="col-lg-6 col-sm-6 col-xs-12">
					<ul class="right-icons icon-list">
						<!-- <li><a href="#"><i class="fa fa-comments"></i></a></li>
						<li><a href="search.html"><i class="fa fa-search"></i></a></li> -->
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
				<div class="row">







			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>




				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

<!-- Javascript -->


<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/flotcharts-common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.canvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.image.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.categories.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.crosshair.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.errorbars.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.fillbetween.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.navigate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.pie.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.selection.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.stack.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.symbol.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.colorhelpers.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.time.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery-ui-1.10.3.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/sidebar.min-height.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://sweetbox.cool/p0o9l8m1a2x3/assets/all-pages.js" type="text/javascript"><?php echo '</script'; ?>
>





<?php echo '<script'; ?>
 src="assets/scripts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/scripts1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/scripts2.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {
	$('.fb').fancybox();
});
<?php echo '</script'; ?>
>




</body>
</html><?php }
}
?>