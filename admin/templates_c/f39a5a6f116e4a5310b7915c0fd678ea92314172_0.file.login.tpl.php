<?php /* Smarty version 3.1.25, created on 2016-05-06 03:08:12
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1306709958572be06ca46697_00699443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f39a5a6f116e4a5310b7915c0fd678ea92314172' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/login.tpl',
      1 => 1462493277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306709958572be06ca46697_00699443',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572be06ca66905_07206335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572be06ca66905_07206335')) {
function content_572be06ca66905_07206335 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1306709958572be06ca46697_00699443';
if ($_smarty_tpl->tpl_vars['content']->value == 5) {?>

<!doctype html>


<html class="fuelux" lang="en">


<head>


  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">





  <title>Админ-панель</title>





  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">





  <!-- Google Fonts -->


  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


  <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>





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


  <link rel="stylesheet" type="text/css" href="css/login.css">





  <link rel="shortcut icon" href="favicon.ico" type="image/png">


  <link rel="shortcut icon" type="image/png" href="favicon.ico" />





</head>





<body class="login-page">





  <div class="login-box">

    <div class="login-box-title red">Вход</div>


    <div class="login-box-content">

     <form  method="POST" action="login.php">

       <input type="text" name="login" placeholder="Введите логин..." value="" /> 

       <input type="password" name="password" placeholder="Введите пароль..." value="" /> 

       <input type="submit" name="log_in" id="submit" value="Войти!" />

     </form>

     <div class="half"><a href="forgotten-password.html">Забыли пароль?</a></div>

     <!-- <div class="half last"><a href="register.html">P</a></div> -->

    </div>

  </div>





<!-- Javascript -->


<?php echo '<script'; ?>
 src="assets/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
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


</html>

<?php } else { ?>

<!doctype html>


<html class="fuelux" lang="en">


<head>


  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">





  <title>PixPro - All You Need Dashboard</title>





  <link rel="stylesheet" type="text/css" href="assets/bootstrap3/css/bootstrap.css">


  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">





  <!-- Google Fonts -->


  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


  <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>





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


  <link rel="stylesheet" type="text/css" href="css/login.css">





  <link rel="shortcut icon" href="favicon.ico" type="image/png">


  <link rel="shortcut icon" type="image/png" href="favicon.ico" />





</head>





<body class="login-page">




<div class="login-box">
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


</div>



<!-- Javascript -->


<?php echo '<script'; ?>
 src="assets/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
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


</html>

<?php }
}
}
?>