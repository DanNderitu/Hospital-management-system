<?php 
require_once "importance.php"; 

if(User::loggedIn()){
	Config::redir("index.php"); 
}
?> 

<html>
<head>
	<title>LOGIN - <?php echo CONFIG::SYSTEM_NAME; ?> </title>
	<?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid' >
		<div class='row'>
			<div class='col-md-3'> 
				<img src='images/smilingpatient.jpeg' class='img-responsive' /> 
			</div>  
			<div class='col-md-9'>
				<div class='content-area'> 
					<div class='content-header'> 
						Login <small>Login</small>
					</div>
					<div class='content-body'> 

						<?php 
							if(isset($_GET['attempt'])){
								

								$status = $_GET['attempt'];

								if($status == 1){
									$header = "Login as an Admin"; 
								} else {
									$header = "Login as a Doctor"; 
								}

								echo "<center><div class='badge-header'>$header</div></center>"; 

								

								if(isset($_POST['login-email'])){
									$email = $_POST['login-email']; 
									$password = $_POST['login-password'];

									if($email == "" || $password == ""){
										Messages::error(" fill all boxes");
									} else {
										User::login($email, $password, $status);
									}

								}

							?> 
							<div class='row'>
								<div class='col-md-3'></div>
								<div class='col-md-6'>
									<div class='form-holder'>
										<?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login"); ?> 
									</div>
								</div> 
								<div class='col-md-3'></div>
							</div> 
							<?php 
								
							} else {

						?>

						<center><div class='badge-header'>Login As:</div></center> 
						<div class='row'>
							<div class='col-md-2'></div>
							<div class='col-md-8'> 
								<div class='row' style='margin-top: 140px;'> 
									<div class='col-md-4'>
										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/administratorlogo.png' alt='login as a doctor' />
											</div>
											<center><a href='login.php?attempt=1'><div class='badge-header'>Admin</div></a></center> 

										</center> 
									</div> 
									<div class='col-md-4'> 

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/doctorlogo.png' alt='login as a doctor' />
											</div>
											<center><a href='login.php?attempt=2'><div class='badge-header'>Doctor</div></a></center> 
										</center>
									</div> 
									
									<div class='col-md-4'> 

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/patientlogo.png' alt='login as a doctor' />
											</div>
											<center><a href='login-patient.php'><div class='badge-header'>Patient</div></a></center> 
										</center>
									</div> 
									
								</div> 
							</div> 
							<div class='col-md-2'></div>
							<?php } ?> 
						</div>
					</div> 
				</div>  
			</div> 
		</div> 
	</div> 
</body>
</html>
