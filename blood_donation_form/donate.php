<?php 
  
  include ('include/header.php');
  if(isset($_POST['submit'])) //to check if user has submit the form
  {
      if(isset($_POST['term'])==true){ //whether check box is checked

	if(isset($_POST['name'])  &&  !empty($_POST['name'])){ //name field should not be empty

    if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){ //pattern of name should be correct

	//preg_match is a function that takes twom agrguments one is a pattern and othr a string
	//it will match the pattern with the provided string 
$name=$_POST['name'];
}
else{
//nameerror
	$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Only upper and lower case and space allowed
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
}
}
else{
//nameerror

		$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Please fill the field.
		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	   </div>';

	}

 //check if gender field empty
	if(isset($_POST['gender'])  &&  !empty($_POST['gender'])){
$gender=$_POST['gender'];
		}
		
			else{
		
//gender error
				$genderError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Please select your gender.
				 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>';

			}
			//dateof birth check


			if(isset($_POST['dob'])  &&  !empty($_POST['dob'])){

				$dob=$_POST['dob'];
				
				}
				
					else{
				//dob error
				
						$dobError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please enter your Date of Birth.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}


					//city error check
					if(isset($_POST['city'])  &&  !empty($_POST['city'])){ //name field should not be empty

						if(preg_match('/^[A-Za-z\s]+$/', $_POST['city'])){ //pattern of name should be correct
						$city=$_POST['city'];
						}
						
						else{
						
						//cityerror
							$cityError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Only upper and lower case and space allowed
							 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						   </div>';
						
						
						}
						
							}
						
							else{
						//cityError
						
								$cityError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
								Please fill the city field.
								 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							   </div>';
						
							}
						
			
							// password check
							if(isset($_POST['password'])  &&  !empty($_POST['password'])  && isset($_POST['c_password'])  &&  !empty($_POST['c_password']) ){


								if(strlen($_POST['password'])>=6){


										//checking confirm password

										if($_POST['password']==$_POST['c_password']){

											$password=$_POST['password'];
											//encrypting
											$password=md5($password);
										}


										else
										{
											
										$cpassworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
										Password are not matching.
										 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									   </div>';
										}

								}

								else{

									$passworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Password should be of minimum 6 characters.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

								}


							}
else{

	$passworderror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Please enter password field.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';


}
if(isset($_POST['blood_group'])  &&  !empty($_POST['blood_group'])){

				$blood_group=$_POST['blood_group'];
				
				}
				
					else{
				
				
						$blood_groupError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please select your blood group.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}



					//contact no check



if(isset($_POST['contact_no'])  &&  !empty($_POST['contact_no'])){

	if(preg_match('/\d{10}/', $_POST['contact_no']))

	{
		$contact=$_POST['contact_no'];
	}
			
	

	else{
		$contact_noError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Contact should consist of 10 digits.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
	}
				}
				
					
				
					else{
				
				
						$contact_noError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please provide your contact number.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}

//email id check


if(isset($_POST['email'])  &&  !empty($_POST['email'])){
$pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9]+)*(\.[a-z]{2,3})$/';
	if(preg_match($pattern, $_POST['email']))
//check if email is of valid pattern
	{

		//check if email already existt

		$check_id=$_POST['email'];

		$sql="SELECT email FROM blooddonation WHERE email= '$check_id' ";


		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0)
		{

			$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email already exists .
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
			
		}
		else{
		$email=$_POST['email'];
	}
}
	

	else{
		$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please enter valid  email id .
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
	}
				}
				
					
				
					else{
				//mail id error
				
						$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please provide your email id.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}

///insert data into database
//check   whether useer have given all valid inputs and the variable stores the value given by the user

if(isset($name) && isset($gender) && isset($dob) && isset($city) && isset($password)&&isset($email)&&isset($contact) && isset($blood_group))
{

$sql="INSERT INTO blooddonor (name,email,gender,city,dob,contact_no,bloodgroup,date,password) VALUES('$name','$email','$gender','$city','$dob','$contact','$blood_group',now(),'$password')";


//executing this query
if(mysqli_query($conn,$sql)) //if query execute successfully
{
	$submitsuccessfully='<div class="alert alert-success alert-dismissible fade show" role="alert">
	You have registered successfully.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}

else{
	$submiterror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	oopss!! Something went wrong
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}



}


	
}

//checkbox error

else{

	 $errorr='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Please agree to our terms and conditions.
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

}




  }
?>

<style>
.navbar-brand, .nav-link {
  color: #e74c3c !important;
}


nav{
font-family: 'Roboto', sans-serif;
font-weight: 600;
}
.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	
	.form-container{
		background-color: white;
		border: 2px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		
	}

	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}

</style>

<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">   
					<h3>Register Here To Donate Blood</h3>
					<?php
					//checkbox error display

					if(isset($errorr)) echo $errorr;

					//submit successfully message
					if(isset($submitsuccessfully)) echo $submitsuccessfully;

					//submit error print

					if(isset($submiterror)) echo $submiterror;



?>
					

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Enter your name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" required>
					</div>
					<?php

					//name rrror display
					if(isset($nameError)) echo $nameError;

					?>

					<div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder=" Enter your Email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" required>
					</div>

					<?php
					if(isset($emailError)) echo $emailError;
?>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder="Enter your phone number" class="form-control" required pattern="^\d{10}$" title="11 numeric characters only" maxlength="11"  required>
            </div>

<?php

//printing contact error display
if(isset($contact_noError)) echo $contact_noError;

?>

			<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div>

					<?php

					//printing gender error display
					if(isset($genderError)) echo $genderError;

					?>

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">Select your blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div> 
			<?php
			//display blood grp error

			if(isset($blood_groupError)) echo $blood_groupError;

			?>

<div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob"  placeholder="DOB" class="form-control" >
</div>
<?php
//dob error display


if(isset($dobError)) echo $dobError;
?>




					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Ropar" >Ropar</option><option value="Mohali" >Mohali</option><option value="Chandigarh" >Chandigarh</option><option value="Patiala" >Patiala</option><option value="Rajpura" >Rajpura</option><option value="Ludhiana" >Ludhiana</option><option value="Dhuri" >Dhuri</option><option value="Amritsar" >Amritsar</option><optgroup title="Haryana" label="&raquo; Haryana"></optgroup><option value="Ambala" >Ambala</option><option value="Karnal" >Karnal</option><option value="Panipat" >Panipat</option><option value="sonipat" >Sonipat</option><option value="Rohtak" >Rohtak</option><option value="Gurugram" >Gurugram</option><option value="Hisar" >Hisar</option><option value="Yamunanagar" >YamunaNagar</option><option value="Panchkula" >Panchkula</option><option value="Palwal" >Palwal</option><option value="Sirsa" >Sirsa</option><option value="Pinjore" >Pinjore</option><option value="Kalka" >Kalka</option><option value="Pundri" >Pundri</option><option value="Fatehbad" >Fatehbad</option><option value="Faridabad" >Faridabad</option><option value="Thanesar" >Thanesar</option><option value="Sonipat" >Sonipat</option><option value="Jind" >Jind</option><option value="Rewari" >Rewari</option><option value="Kaithal" >Kaithal</option><option value="Bhiwani">Bhiwani</option><option value="Hansi" >Hansi</option><option value="Kurukshetra" >KurukShetra</option><option value="Maneasr" >Manesar</option><option value="Sohna" >Sohna</option><option value="Samalkha" >Samalkha</option><optgroup title="Himachal Pardesh" label="&raquo; Himachal Pardesh"></optgroup><option value="Shimal" > Shimal</option><option value="Mandi" >Mandi</option><option value="Bilaspur" >Bilaspur</option><option value="Solan" >Solan</option><option value="Manali" >Manali</option><option value="Hamirpur">Hamirpur</option><option value="DharamShala" >DharamShala</option>
	 
            </div>

			<?php
//city error display

if(isset($cityError)) echo $cityError;
			?><br>

			<br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div>
			<?php
			//password error display
			if(isset($passworderror)) echo $passworderror;



?>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
            </div>
			<?php
// display confirm password error

if(isset($cpassworderror)) echo $cpassworderror;

?>

            <div class="form-inline">
              <input type="checkbox" name="term"  required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I  agree to donate my blood and the above provided information is true</b></span>
            </div>
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>