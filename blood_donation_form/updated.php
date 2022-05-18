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

.card{


    margin:200px 400px;
}
.card-title{

    color:#e74c3c !important;
}
</style>

<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Hello <?php echo $_SESSION['username']?></h5>
    
    <p class="card-text"><?php  echo "Your information is updated Successfully"?></p>
    
  </div>
</div>