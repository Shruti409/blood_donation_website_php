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



      <div class="hero-text">
        <h2>Donate Blood.</h2>
        <p>Save Lives.</p>
        <a href="donate.php">Register Here</a>
      </div>
    </section>
  </body>

</html>
<style>
:root {
  --text: 1.5rem;
  --head: calc(1rem + 5vw);
  --bg-color: #f6b93b;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



body {
  font-family: "Poppins", sans-serif;
  background-image: url("https://cdn.pixabay.com/photo/2019/04/29/07/38/blood-donation-4165394_960_720.jpg");
}

.hero-section {
  min-height: 100vh;
  background-color:white;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 2;
  animation: slide 1s ease-in-out;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 10vh;
  padding: 0rem 1.5rem;
  color: white;
  transform: translateY(-100%);
  animation: movedown 850ms ease-in 1s forwards;
}

@keyframes movedown {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0%);
  }
}



.hero-text {
  color: white;
  height: 90vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}



.hero-text::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: white;
  z-index: -1;
  top: 0;
  opacity: 0.6;
}

.hero-text a {
  color: white;
  background: var(--bg-color);
  font-weight: 900;
  font-size: var(--text);
  padding: 0.8rem 1rem;
  margin: 0.8rem auto;
  display: block;
  text-decoration: none;
  transition: opacity 250ms linear;
}

.hero-text a:hover {
  opacity: 0.8;
}

.hero-text h2 {
  font-size: var(--head);
}

.hero-text p {
  font-size: 3rem;
}


    </style>

