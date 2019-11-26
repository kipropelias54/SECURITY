<?php
session_start();
if(!isset($_SESSION['ologin']))
{
	header("location:portal.php");
}
?>
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
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>ADMIN HOME<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="changecredentials.php"><i class="fa fa-fw fa-envelope"></i>Edit Profile</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="officerhome.php"><i class="glyphicon glyphicon-thumbs-up"></i> Admin Home</a>
                    </li>
					
					<li>
                        <a href="addsuspect.php"><i class="glyphicon glyphicon-thumbs-up"></i> Add Suspect</a>
                    </li>
					<li>
                        <a href="viewsuspect.php"><i class="glyphicon glyphicon-thumbs-up"></i> View Suspect(s)</a>
                    </li>
					
					<li class="active">
                        <a href="viewoffences.php"><i class="glyphicon glyphicon-thumbs-down"></i> View Offence(s)</a>
                    </li>
					<li>
                        <a href="logout.php"><i class="glyphicon glyphicon-bullhorn"></i> Logout</a>
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
						<?php
						$suspectid=$_POST['suspectid'];
						if(!isset($suspectid))
						{
							header("location:viewsuspect.php");
						}
						else
						{
						include"connection.php";
						$query=mysqli_query($con,"select * from offence where detailsid='$suspectid'");
						$dquery=mysqli_query($con,"select * from details where id='$suspectid'");
						$ddata=mysqli_fetch_array($dquery);
						echo"<h1 style='color:blue;text-transform:lowercase;'>suspect details for ".$ddata['fullname']."</h1>";
						$num=mysqli_num_rows($query);
						if($num>0)
						{
							echo"<table style='width:100%;' border='2'>
							<tr>
								<th>Offender</th>
								<th>Offence</th>
								<th>Description of Offence</th>
								<th>Time of Offence</th>
								<th>Reporter's Name</th>
								<th>Reporter's ID</th>
							</tr>
							";
							while($data=mysqli_fetch_array($query))
							{
								$detailsid=$data['detailsid'];
								$namequery=mysqli_query($con,"select *  from details where id='$detailsid'");
								$namedata=mysqli_fetch_array($namequery);
								$offender=$namedata['fullname'];
								echo"
								<tr>
									<td>".$offender."</td>
									<td>".$data['offence']."</td>
									<td>".$data['description']."</td>
									<td>".$data['offencedate']."</td>
									<td>".$data['reportername']."</td>
									<td>".$data['reporterid']."</td>
								</tr>
								";
							}
							echo"</table>";
						}
						else
						{
							echo"There are no offence(s) for the suspect in the system currently.You can add the offence <a href='viewsuspect.php'>by clicking here</a>";
						}
						}
						?>
						<p>
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
	<script>
	
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>

</html>
