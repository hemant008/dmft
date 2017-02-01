<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>DMG-DMF</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/modernizr.js"></script> <!-- for loadingbar -->

<script src="assets/js/loading.js"></script>

</head>
<body>
  <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="col-dm-12 text-center" style="color:darkseagreen;"><label style="font-size:25px">DMFT PORTAL ADMIN PANEL</label></div>
            <div class="col-dm-12 text-center" style="margin-bottom:20px;color:darkseagreen;"><label style="font-size:15px">Goverment of Rajasthan</label></div>
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">DMFT Login</div>

                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">
                                    </div>


                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>



                        <!--    <div class="input-group">
                                    <!--  <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div> -->


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="home.php" class="btn btn-success">Login  </a>
                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->

                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>
        </div>

    </div>
</body>
</html>
