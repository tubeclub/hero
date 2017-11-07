<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="QUIZZ, scripte, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?=base_url()?>admin/img/favicon.png">

    <title>Login Page </title>

    <!-- Bootstrap CSS -->    
    <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url()?>admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?=base_url()?>admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="<?=base_url()?>admin/js/html5shiv.js"></script>
    <script src="<?=base_url()?>admin/js/respond.min.js"></script>
    <![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

  <body class="login-img3-body">

    <div class="container">


 <div><?=$this->session->flashdata('error')?></div>
               <p class="login-box-msg"> <?=validation_errors()?></p>

      <form class="login-form" action="<?=base_url()?>logadmin/index" method="post"> 
       
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>

    </div>


  </body>
</html>