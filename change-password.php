<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Change Password<?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					Dashboard <small>dashboard</small>
				</div>
				<?php require_once "inc/alerts.inc.php";  ?> 
				<div class='content-body'> 
					<div class='form-holder'> 
						<?php 
							
							if(isset($_POST['o-p'])){
								$oldPassword = $_POST['o-p'];
								$newPassword = $_POST['n-p']; 
								$confirmPassword = $_POST['c-p']; 
								
								if(strlen($newPassword) < 5){
									Messages::error("password too short");
								} else if($oldPassword == "" || $newPassword == ""){
									Messages::error("Fill in all ");
								} else if($newPassword != $confirmPassword){
									Messages::error("wrong password");
								} else {
									User::changePassword($oldPassword, $newPassword);
								}
								
							}
							
							$form = new Form(2, "post"); 
							$form->init();
							$form->textBox("Old Password", "o-p", "password", "", "");
							$form->textBox("New Password", "n-p", "password", "", ""); 
							$form->textBox("Confirm Password", "c-p", "password", "", "");
							$form->close("Change Password"); 
						?> 
					</div> 
				</div>
				</div> 
				
			</div>

			<div class='col-md-3'>
				<img src='images/maledoc.jpg' class='img-responsive' /> 
			</div> 
				
		</div> 
	</div> 
</body>
</html>
