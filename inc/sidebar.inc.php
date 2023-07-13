<?php 
if(User::loggedIn()){

	if($userStatus == 1){
	?> 
	<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/adminlogo.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo "$userFirstName";  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "$userRole";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				
				<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon'/>Admin Profile</a></li>
				<li><a href='patients.php'><img class='sidebar-menu-icon'  /> Patients</a></li>
				<li><a href='add-doctors.php'><img class='sidebar-menu-icon'  /> Add Doctors</a></li>
				<li><a href='doctors-record.php'><img class='sidebar-menu-icon' /> Doctors' Records</a></li>
				
				>
				
			</ul> 
		</div> 
	</div>
	<?php 
	
	} else {
	?> 

	<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/doctorlogo.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo "$userFirstName";  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "$userRole";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
			
				<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' /> Profile</a></li>
				<li><a href='patients.php'><img class='sidebar-menu-icon' /> Patients</a></li>
				<li><a href='new-patient.php'><img class='sidebar-menu-icon' /> Add Patient</a></li>
				<li><a href='appointments.php'><img class='sidebar-menu-icon' /> Appointments</a></li>

				
			</ul> 
		</div> 
	</div>

<?php
}

} else if(Patient::isPatientIn() ) {
?> 

<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/patientlogo.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo Patient::getP($_SESSION['patient'], "name");  ?>
					</div>
					
					<div class='user-role'> 
						<?php echo "Patient";  ?>
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='patient-data.php'><img class='sidebar-menu-icon'  /> Personal records</a></li>
				<li><a href='book-appointments.php'><img class='sidebar-menu-icon'  /> Book Appointment</a></li>
				<li><a href='p-sent-appointments.php'><img class='sidebar-menu-icon' />Sent Appointments</a></li>
				<li><a href='p-reply-appointments.php'><img class='sidebar-menu-icon' />Replies</a></li>
				<li><a href='logout.php'><img class='sidebar-menu-icon' /> Logout</a></li>
			</ul> 
		</div> 
	</div>

<?php
}