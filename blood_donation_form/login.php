<?php
 
include('include/header.php');

if(isset($_POST['SignIn']))//whether user clicked on sign in

{
//check if user hvave provided email id or not

	//email check

	if(isset($_POST['email'])  &&  !empty($_POST['email'])){

		$email=$_POST['email'];
		
		}
		
			else{
		
		
				$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Please fill the email field.
				 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			   </div>';

			}


			//password chreck

			if(isset($_POST['password'])  &&  !empty($_POST['password'])){

				$password=$_POST['password'];
				$password=md5($password);
				
				}
				
					else{
				
				
						$passwordError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please fill the password field.
						 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					   </div>';
		
					}


					//login query

					if(isset($email)&&isset($password))
					{
//writing query for checking if credentials matching with  database

						$sql="SELECT * FROM blooddonor WHERE  password='$password' AND email='$email' ";
						// query execution

						$result=mysqli_query($conn,$sql);
//if more than one table rows present then it means credientials matched

						if(mysqli_num_rows($result)>0)

						{

							$email_pass=mysqli_fetch_assoc($result);

							$_SESSION['id']=$email_pass['id'];
							$_SESSION['username']=$email_pass['name'];
							$_SESSION['email']=$email_pass['email'];
							$_SESSION['contact']=$email_pass['contact_no'];
							



header('location:user.php');

}


						}

						else{
							//if credentialls do not match show error
							$loginerror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				No record found Please enter valid username and password.
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
					<h3>Sign in</h3>

					<?php
//print error messages

if(isset($loginerror) ) echo $loginerror;

?>

					
				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Email-id</label>
						<input type="text" name="email" id="fullname" placeholder="Enter your email id" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" required>
					</div>
					<?php
//print error messages

if(isset($emailError) ) echo $emailError;

?>
					<div class="form-group">
              <label for="contact_no">Password</label>
              <input type="text" name="password" value="" placeholder="Enter your password" class="form-control" required pattern="^\d{10}$" title="11 numeric characters only" maxlength="11"  required>
            </div>

			<?php
//print error messages

if(isset($passwordError) ) echo $passwordError;

?>
			<br>
			<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>