{if $content == 5}
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


  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>


  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


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

    <div class="login-box-title red">Регистрация</div>
    <div class="login-box-content">
     <form  method="POST" action="register.php" class="basic-form" style="padding-right: 20px;" enctype="multipart/form-data">
       <input type="text" name="name" placeholder="Введите имя..." value="" /> 
       <input type="text" name="login" placeholder="Введите логин..." value="" /> 
       <input type="password" name="password" placeholder="Введите пароль..." value="" /> 
       <input type="password" name="password_reply" placeholder="Повторите пароль..." value="" />
       <input type="text" name="email" placeholder="Введите email..." value="" />
       <input type="text" name="tel" placeholder="Введите телефон..." value="" />
       <label for="photo">Выберите фото профиля</label>
       <input type="file" name="photo" value="Выберите фотографию">
       <select name="rights" id="dropdown">
         <option value="0">Модератор</option>
         <option value="1">Администратор</option>
         <option value="2">Главный администратор</option>
       </select><br />
       <!-- <label>Secret Question: <br/>Your mothers maiden name?</label>
        <input type="secret" name="secret" placeholder="Your Secret Answer..." value="" /> --> 
       <input type="submit" name="register" id="submit" value="Зарегистрироваться!" />
     </form>
     <!-- <div class="half"><a href="forgotten-password.html">Forgot your password?</a></div> -->
     <div class="" style="float: right; margin-bottom: 20px; text-decoration: none !important;"><a href="login.php">Войти</a></div>
    </div>
  </div>

{literal}
<!-- Javascript -->


<script src="assets/jquery/jquery.min.js" type="text/javascript"></script>


<script src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>


<script>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){


  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),


  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)


  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-53707145-1', 'auto');


  ga('send', 'pageview');





</script>
{/literal}

</body>


</html>


{else}
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


  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>


  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


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

    {$content}

  </div>




{literal}
<!-- Javascript -->


<script src="assets/jquery/jquery.min.js" type="text/javascript"></script>


<script src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>


<script>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){


  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),


  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)


  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-53707145-1', 'auto');


  ga('send', 'pageview');





</script>
{/literal}

</body>


</html>



{/if}