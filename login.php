<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Performing Arts Theater</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/login.css">




  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */


    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    </style>

</head><body class="hold-transition login-page">


    <div class="container right-panel-active">


    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="controller/loginController.php" method="POST" class="form" id="form2">
            <div>
                <h2 class="form__title">ACCOUNT LOGIN</h2>
            <input type="email" name="email" placeholder="Email" class="input" />
            <input type="password" name="password" placeholder="Password" class="input" />
            <div style="text-align: left;margin-top: 10px;">
                <button type="submit" name="signin" class="btn">LOGIN</button>
            </div>
        </div>
        </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
            </div>
        </div>
    </div>
</div>
	
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>