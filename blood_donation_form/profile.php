<?php
include('include/header.php');
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


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}


    #update{
        margin:100px;
        float:left;
    }

    #logout{
        margin:100px;
        float:right;
    }

    .card{
        margin-left:300px;

    }
</style>
<div class="panel panel-default" style="padding: 50px;">
						<div class="panel-body">

		<div class="heading text-center">
			<h3>Welcome   <?php   echo $_SESSION['username']  ?> </h3>
							</div>


							<p class="text-center">Here you can manage your account update your profile</p>

                            <div class="card" style="width: 18rem;">
  <div class="card-body" id="card">
    <h5 class="card-title"><?php echo $_SESSION['username']
    ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"> </h6>
	
    <p class="card-text">Thanks For Donating Blood</p>
    
  </div>
</div>


							<button style="margin-top: 20px;" name="update" id="update" class="btn btn-lg btn-danger left-aligned "  onclick ="document.location='update.php'">Update </button>
                            <button style="margin-top: 20px;" name="logout" id="logout" class="btn btn-lg btn-danger right-aligned " onclick ="document.location='logout.php'">Logout</button>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here--></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>


