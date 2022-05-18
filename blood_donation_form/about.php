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

    .text-center{

        color:#e74c3c;
    }
    .accordion-button
    {
        color:red;
    }

</style>

<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">About Us</h1>
			
		</div>
	</div>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2  class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Our History
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut fugiat, doloremque nobis eaque eveniet hic neque esse iure ipsa! Dolores, deserunt sequi ipsum excepturi consequatur provident? Earum dicta adipisci vel.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
     Our Achievements
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit incidunt distinctio fugiat, earum veritatis ex ullam quae ut? Enim error, quis iusto aliquam voluptate eius beatae modi architecto quia? Saepe.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Our Mission
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero laboriosam, dolore facilis unde accusantium, vitae consequuntur nisi, eius quasi recusandae rerum repellendus fugit quam laborum dolor amet autem quia?
      </div>
    </div>
  </div>
</div>

<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Meet Our Team</h1>
			
		</div>
	</div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://images.unsplash.com/photo-1573496799652-408c2ac9fe98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ms. ABC</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium perferendis quasi velit soluta quos incidunt minima culpa ex repellendus. Labore officia harum eaque doloremque rem culpa. Deleniti quasi sint expedita?</p>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://media.istockphoto.com/photos/asian-businesswoman-standing-smiling-at-the-camera-picture-id1335295926?s=612x612" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ms. DEF</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, accusamus ad veniam nisi suscipit eius nesciunt dolorem fugit facere atque natus nulla expedita sed autem corrupti molestiae similique rerum optio.</p>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://media.istockphoto.com/photos/shot-of-a-young-businessman-using-a-laptop-in-a-modern-office-picture-id1354898581?s=612x612" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mr.XYZ</h5>
        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio, magni sed harum velit veritatis ullam culpa unde tempore est ut natus? Eos, eum repellendus voluptatem alias rerum ipsam culpa quam!</p>
      </div>
      
    </div>
  </div>
</div>
