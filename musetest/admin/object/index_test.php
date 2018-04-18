<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Administration</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body >
<table  border="0" cellpadding="0" cellspacing="0" valign="top" align="center" >
<tr>
	<td><img src="../images/PHR-RO_01.png" width="21" height="200" border="0" alt=""></td>
	<td><img src="../images/PHR-RO_02.png" width="192" height="200" border="0" alt=""></td>
	<td><img src="../images/PHR-RO_04_ok.jpg" width="624" height="200" border="0" alt=""></td>
	<td><img src="../images/PHR-RO_04_02.png" width="170" height="200" border="0" alt=""></td>
</tr>
</table>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><b>เข้าสู่ระบบบริหารจัดการ PHR </b></h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login_t.php" method="post" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <!-- <input name="remember" type="checkbox" value="Remember Me">Remember Me -->
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<input type="submit" name="Login" value="Login"  class="btn btn-lg btn-success btn-block">
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                            </fieldset>
                        </form>
                        <center><BR><a href="chp_view_osm.php"> เปลี่ยนรหัสผ่าน </a><BR></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>-->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
