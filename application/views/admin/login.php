<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rialto</title>
    
	<!---MAP-->
	
	<link rel="stylesheet" href="http://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
	<script src="http://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/circle.js')?>"></script>

	<!---MAP-->
	
	
	<!---Bootstrap--->
	
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<!---<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<!---Bootstrap--->
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url('assets/js/typeahead.js')?>"></script>
</head>
<body>
    <div class="container">
		<br/>
		<br/>
		<br/>
		<br/>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
			<div class="panel-group align-middle"  style="font-size: 12px;">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<img class="text-center" style="width:120px;" src="<? echo site_url('assets/images/logo.png');?>">
						<h2 class="form-signin-heading">Log In to Rialto</h2><hr />
					</div>
					<div class="panel-body">
					
						
						<form class="form-signin" method="post"  action="<?php echo site_url('login/post_login')?>" id="login-form">
      
							
							<div id="error">
							<!-- error will be shown here ! -->
							</div>
							
							<div class="form-group">
							<input type="email" class="form-control" placeholder="Email address" name="EmailInput" id="user_email" />
							<span id="check-e"><?php echo form_error('EmailInput',"<p class='text-danger'>","</p>")?></span>
							
							</div>
							
							<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="PasswordInput" id="password" />
							<span id="check-e"><?php echo form_error('PasswordInput',"<p class='text-danger'>","</p>")?></span>
							</div>
						   
						  <hr />
							
							<div class="form-group col-xs-12 text-center">
								<button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">
						  <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
					   </button> 
							</div>  
						  
						  </form>
					
					</div>			
				</div>			
			</div>

			
        </div>

    </div>

</body>
</html>