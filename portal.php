
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>security solutions</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="text-transform:uppercase;" class="navbar-brand" href="../index.php">Security solutions</a>
            </div>
            <!-- Top Menu Items -->
			<!-- start processing php -->
			<!-- End processing php -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>SETTINGS<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-envelope"></i>Layout</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-gear"></i>Language</a>
                        </li>
                        <li>
                            <a href="portal.php"><i class="fa fa-fw fa-power-off"></i>Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="glyphicon glyphicon-thumbs-up"></i> Homepage</a>
                    </li>
					
					<li>
                        <a href="about.php"><i class="glyphicon glyphicon-thumbs-up"></i> About</a>
                    </li>
					
					<li>
                        <a href="contacts.php"><i class="glyphicon glyphicon-thumbs-down"></i> Contacts</a>
                    </li>
					<li class="active">
                        <a href="portal.php"><i class="glyphicon glyphicon-bullhorn"></i> Portal</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<p style="width:100%;">
						<center>
						<form action="portalconfirm.php" method="post">
						<fieldset style="width:80%;">
						<legend><h1>Login Credentials</h1></legend>
						<p><input style="width:80%;text-align:center;" type="text" name="username" placeholder="your username goes here" required="required"/></p>
						<br/><br/>
						<p><input style="width:80%;text-align:center;" type="password" name="password" placeholder="your password goes here" required="required"/></p>
						<br/>
						<p><input style="width:50%;text-align:center;background-color:green;color:white;" type="submit" required="required"/></p>
						</fieldset>
						</form>
						</center>
						</p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
			<footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="navbar navbar-default navbar-fixed-bottom">
					<div style="text-align:center;" class="container-fluid">&copy; <?php echo date("Y");?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Design by <a href="" target="_blank">enosoft software solutions</a>.</div>
					</footer>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>

</html>
