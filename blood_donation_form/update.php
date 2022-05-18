<? php error_reporting(0); ?>


<?php

include('include/header.php');
if(isset($_SESSION['username'])){

//$sql="SELECT * FROM blooddonor ";
$sql="SELECT * FROM blooddonor WHERE  name='$_SESSION[username]' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    if($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $pno=$row['contact_no'];
        $bg=$row['bloodgroup'];
		

    }
}

if(isset($_POST['submit'])) //to check if user has submit the form
{
	
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

			  //blood group check
			  
			  

if(isset($_POST['blood_group'])  &&  !empty($_POST['blood_group'])){

			  $blood_group=$_POST['blood_group'];
			  
			  }
			  
				  
			  
				  else{
			  //blood group error
			  
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
			  //contact number error
			  
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
				}


if(isset($name) && isset($email)&&isset($contact) && isset($blood_group))
{

$sql="UPDATE blooddonor SET name='$name',email='$email',contact_no='$contact',bloodgroup='$blood_group' WHERE id='$id'";



if(mysqli_query($conn,$sql)) 
{
	$update='<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data  Updated Successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
  header("Location:updated.php");


}

else{
  $updateerror='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data Not Updated
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';

}



}


  


//checkbox error

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
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
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
					<h3>Update Information</h3>
					<hr class="red-bar">
					
        <?php
		if(isset($updateerror)) echo $updateerror;
		if(isset($update)) echo $update;

		?>
				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder=<?php echo $name?> pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
					</div>
					
					
				   
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder=<?php echo $email?> title="Please write correct email" class="form-control">
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder=<?php echo $pno?> class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
            </div>
            <div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group"  required>
                <option value=""><?php echo $bg?></option>
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
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div>
				</form>
		</div>
	</div>
</div>