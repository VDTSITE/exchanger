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
<!-- <link rel="stylesheet" type="text/css" href="/css/buttons.css"> -->





	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<link rel="shortcut icon" type="image/png" href="favicon.ico" />

</head>

<body class="no-margin-top">

	<!-- Left Sidebar Start -->
	<div class="sidebar sidebar-left" style="position: fixed">

		<!-- Logo Start -->
		<div class="logo-container">
			<a href="http://vdt.site/" target="_blank"><h1>Shilling.co</h1></a>
		</div>
		<!-- Logo End -->

		<!-- User Profile Start -->
		<!-- <div class="sidebar-user-profile">
		
			<div class="avatar">
				<img src="../images/{$user_photo}" alt="Jane Doe" style="        margin-left: -1%;
		    margin-right: 20%;
		    width: 68px; background-position: cover;"/>
			</div>
		
			<div class="ul-icons">
				<span class="user-info" style="font-size: 13px !important;">{$user_name}, добро пожаловать!</span>
				<br />
				<br />
				<ul class="icon-list">
					
					<li><a href="profile.html"><i class="fa fa-cog"></i></a></li>
					<li><a href="request.php"><i class="fa fa-comments"></i></a></li>
				</ul>
			</div>
		
		</div> -->
		<!-- User Profile End -->

		<!-- Menu Start -->
		<ul class="active main-menu">
			<li>
				<a href="index.php">
					<i class="fa fa-home"></i>
					<span>Страницы</span>
				</a>
			</li>
			<li class="">
				<a href="schedule.php"><i class="fa fa-text-width"></i><span> График работы</span></a>
				
			</li>
		
			<li class="has-submenu">
				<a href="#">
					<i class="fa fa-cog"></i>
					<span>Дизайны</span>
				</a>
				<ul class="submenu">
					<li>
						<a href="index.php">Текущий</a>
					</li>
		
				</ul>
			</li>
			
			

	
			<li class="has-submenu">
				<a href="view_orders.php"><i class="fa fa-envelope-o"></i><span> Почта</span></a>
				<ul class="submenu">
					<li><a href="request.php">Новые заявки </a></li>
					<li><a href="request_archive.php">Архив заявок </a></li>
					<!-- <li><a href="video_report.php">Видеоотчет</a></li>
					<li><a href="view_contact.php">Обратная связь</a></li> -->
				</ul>
			</li>

			<li class="has-submenu">
				<a href=""><i class="fa fa-picture-o"></i><span> Наши спонсоры</span></a>
				<ul class="submenu">
					<!-- <li><a href="view_portfolio_categories.php">Категории портфолио</a></li> -->
					<!-- <li><a href="add_portfolio_categories.php">Добавление категории портфолио</a></li> -->
					<li><a href="view_nails_slider.php">Просмотр </a></li>
					<li><a href="add_nails_slider.php">Добавление </a></li>
				</ul>
			</li>


			<li class="has-submenu">
				<a href=""><i class="fa fa-map-marker"></i><span> Акции</span></a>
				<ul class="submenu">
					<li><a href="view_stock.php">Просмотр акции</a></li>
					<li><a href="add_stock.php">Добавление акции</a></li>
					<!-- <li><a href="video_report.php">Видеоотчет</a></li>
					<li><a href="view_contact.php">Обратная связь</a></li> -->
				</ul>
			</li>
			<li class="has-submenu">
				<a href=""><i class="fa fa-map-marker"></i><span> Клиентская база</span></a>
				<ul class="submenu">
					<li><a href="view_buy.php">Список контактов</a></li>
					<li><a href="add_buy.php">Добавление нового контакта</a></li>
					<!-- <li><a href="video_report.php">Видеоотчет</a></li>
					<li><a href="view_contact.php">Обратная связь</a></li> -->
				</ul>
			</li>
			<li class="">
				<a href="currency.php"><i class="fa fa-map-marker"></i><span> Курсы валют</span></a>
				
			</li>

			<li class="">
				<a href="currency_wm.php"><i class="fa fa-map-marker"></i><span> Курсы валют WEBMONEY</span></a>
				
			</li>


			

		</ul>


	</div>
	<!-- Left Sidebar End -->

	<!-- Top Content Bar Start -->
	<div class="top-bar">
		<div class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-sm-6 hidden-xs">
					<ul class="left-icons" style="    font-size: 19px;
    margin-right: 12px;
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline;
    padding-top: 25px;
    position: absolute;">
						<li style="display: inline; margin-right: 18px;"><a href="#" class="sidebar-collapse"><i class="fa fa-dedent"></i></a></li>
						<li style="display: inline;">
							<a href="request.php" style="color: #ff503f;">
								<i class="fa fa-envelope"></i>
								{if $summ_notification != 0}<span id="sound_notify" class="" style="font-size: 15px; font-weight: 600;">{$summ_notification}</span>{/if}
							</a>
				              <!-- <div class="notification-box">
				                <div class="inner">
				                  <ul class="mail-list">
				                    <li class="starred">Subject example <span>1 hour ago</span></li>
				                    <li>Hey! <span>2 hours ago</span></li>
				                    <li>Welcome back! <span>7 days ago</span></li>
				                  </ul>
				                </div>
				              </div> -->
						</li>
					</ul>
				</div>

				<div class="col-lg-6 col-sm-6 col-xs-12">
					<ul class="right-icons icon-list">
						<li>
							<a href="exit.php"><i class="fa fa-power-off"></i></a>
						</li>
						<li>
							<a href="profile.html" class="welcome-user">Добро пожаловать, {$user_name}</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
		</div>
	</div>

	<div class="content" id="content-container">
		<div class="main-container">

			<div class="container">
				<div class="row">







			{$content}



				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

<!-- Javascript -->
{literal}

<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.min.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/bootstrap.min.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/flotcharts-common.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.resize.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.canvas.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.image.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.categories.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.crosshair.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.errorbars.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.fillbetween.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.navigate.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.pie.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.selection.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.stack.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.symbol.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.colorhelpers.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.time.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/sidebar.min-height.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/all-pages.js" type="text/javascript"></script>





<script src="assets/scripts.js" type="text/javascript"></script>
<script src="assets/scripts1.js" type="text/javascript"></script>
<script src="assets/scripts2.js" type="text/javascript"></script>
<script src="assets/scripts3.js" type="text/javascript"></script>

<!-- <script type="text/javascript">
$(document).ready(function () {
	$('.fb').fancybox();
});
</script> -->








<!-- <script type="text/javascript">


//Добавляем HTML5 Audio тэг в HTML Body
$('<audio id="chatAudio"><source src="../sound/notify.ogg" type="audio/ogg"><source src="../sound/notify.mp3" type="audio/mpeg"><source src="../sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
 
var num_not = $('#sound_notify').text();
if($('#sound_notify').text() > 0) {
$('#chatAudio')[0].play();
}

</script> -->




{/literal}










</body>
</html>