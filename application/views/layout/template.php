<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rialto</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
	
	
	<!-----GSM --->
    <link href="<?php echo base_url('assets/bs/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bs/css/iehack.css')?>" rel="stylesheet">
	
	
	 <!-- bootstrap-->
    <link href="<?php echo base_url('assets/datatables/dataTables.min.css')?>" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('assets/datatables/dataTables.min.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>


<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="fa fa-user"></i>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand" href="<?php echo site_url();?>"><img style="width:75px;" src="<? echo site_url('assets/images/logo.png');?>"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           
            <ul class="nav navbar-nav navbar-right" id="dripdown_id">
				<li class="dropdown"> <a href="#">User : Admin </a></li>
                <li class="dropdown"><a href="#">Change password </a></li>
                <li class="dropdown"><a href="<?php echo base_url('logout');?>">Logout	</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

		
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav navbar-left" id="dripdown_id">
                <li><a href="<?php echo base_url('PlottedCellsite/index');?>">PLOTTED CELLSITE</a></li>
                <li><a href="<?php echo base_url('CellTriangulation/index');?>">CELL TRIANGULATION</a></li>
                <li><a href="<?php echo base_url('InfoRequest/index');?>">INFO REQUEST</a></li>
                <li><a href="#">DATA ANALYSIS</a></li>
                <li><a href="#">REPORTS</a></li>
                <li><a href="<?php echo base_url('Admin/index');?>">ADMIN</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">