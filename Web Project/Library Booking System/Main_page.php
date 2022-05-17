<?php
include('dbconfig.php');
if ($_SESSION["loggedin"] != 1)
	header("Location: LogIn_Ass.php");

$student_sess = $_SESSION["student_sess"];
$result = mysqli_query($db, "SELECT * from user where User_ID = $student_sess");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>Main Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="login.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="footer.css">
	<style>
	body {font-family: "Raleway", Arial, Helvetica, sans-serif}

	</style>

</head>
<body id="mainpage">

	<div style="width: 100%;">
	  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
	  	<img src="logo.png" width="150" height="50"> 
	    <!-- Right-sided navbar links. Hide them on small screens -->
	    <div class="w3-right w3-hide-small">
	      <a href="Main_page.php" class="w3-bar-item w3-button">Home</a>
	      <a href="#" class="w3-bar-item w3-button"><?php echo $row['User_name'] ?></a>
	      <a href="GLEVEL.php" class="w3-bar-item w3-button">Booking</a>
	      <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
	    </div>
	  </div>
	</div><br>

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      		<div class="container mb-5 bg-white rounded">
				<div class="card border-warning mb-3 bg-light">
				  <h5 class="card-header">Announcement</h5>
				  <div class="card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-light">The library will be closed during MCO season</li>
						<li class="list-group-item bg-light">An2</li>
						<li class="list-group-item bg-light">An3</li>
						<li class="list-group-item bg-light">An3</li>
						<li class="list-group-item bg-light">An3</li>


					</ul>
				  </div>
				</div>
			</div>


    </div>
    <div class="carousel-item">
     
     <div class="container">
	     <div class="card border-warning mb-3 bg-light text-white">
		  <img src="hmain1.jpg" class="card-img" style="height: 50%;">
		</div>
	</div>


    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

	<!--Miscleanneous-->
	<div class="container shadow p-3 mb-5 bg-white rounded">
		<div class="card border-primary mb-3 bg-light">
		  <h5 class="card-header">Miscellaneous</h5>
		  <div class="card-body">

			<div class="accordion accordion-flush" id="accordionFlushExample">
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			        Lost and Found
			      </button>
			    </h2>
			    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">No entries</div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingTwo">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
			        Report a damage
			      </button>
			    </h2>
			    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	
			      	<div class="card bg-light">
					  <div class="card-header">
					    Saw a damaged facilities?
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Help Us Fix It</h5>
					    <ul class="list-group list-group-flush">
						  <li class="list-group-item bg-light">
						  	<p class="lead">Contacts :</p>
						  	<p class="text-muted">+6016-123456 <span class="badge bg-warning">Hotline</span></p>
						  	<p class="text-muted">+603-83125852</p>
						  </li>
						  <li class="list-group-item bg-light">
						  	<p class="lead">Mail your report to :</p>
						  	<p class="text-muted">libfac@mmu.edu.my</p>
						  </li>
						  <li class="list-group-item bg-light">We really appreciate your help. Thanks for your time!.</li>
						</ul>
					  </div>
					</div>

			      </div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingThree">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
			        How does Booked! works?
			      </button>
			    </h2>
			    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">
			      	
			      	<ul class="list-group list-group-flush">
					  <li class="list-group-item bg-light">1. Once you clicked Booked! it will take you to the other side.</li>
					  <li class="list-group-item bg-light">2. Then you need to choose your preferred seats or place with time</li>
					  <li class="list-group-item bg-light">3. Then you Booked!</li>
					  <li class="list-group-item bg-light">4. Done! now you do not need to be worry about not getting a space in library.</li>
					</ul>

			      </div>
			    </div>
			  </div>
			</div>

		  </div>
		</div>
		<button id="btntobook"class="btn btn-outline-primary" type="button" style="width: 100%;">Booked!</button>
	</div>

	<!--operating hrs-->
	<div class="container shadow p-3 mb-5 rounded" id="oph">
		<div class="card text-center border-danger">
		  <div class="card-header">
		    Operating Hours
		  </div>
		  <div class="card-body bg-light">
		    <ul class="list-group list-group-flush bg-light">
		      <li class="list-group-item bg-light">
			  	<p class="lead">Normal Days</p>
			  	<h6 class="display-6">9.00 am - 10.00 pm</h6>
			  	<p class="text-muted">Closed on Public Holiday</p>
			  </li>
			  <li class="list-group-item bg-light">
			  	<p class="lead">Trimester Break</p>
			  	<h6 class="display-6">9.00 am - 5.00 pm</h6>
			  	<p class="text-muted">Closed during weekends</p>
			  </li>
			  <li class="list-group-item bg-light">
			  	<p class="lead">Examination Week</p>
			  	<h6 class="display-6">9.00 am - 12 am</h6>
			  	<p class="text-muted">Everyday</p>
			  </li>
		  </div>
		</div>

	</div>

	<!--Lib info-->
	<div class="container shadow p-3 mb-5 bg-white rounded">
		<div class="card mb-3 border-dark">
		  <div class="row g-0">
		    <div class="col-md-4">
		      <img src="shdl2.jpg" alt="..." style="width: 100%; height: 100%;">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title">Siti Hasmah Digital Library</h5>
		        <ul class="list-group list-group-flush">
				  <li class="list-group-item">
				  	<p class="lead">Location :</p>
				  	<p class="text-muted">Multimedia University, Jalan Multimedia, 63100 Cyberjaya, Selangor, Malaysia</p>
				  </li>
				  <li class="list-group-item">
				  	<p class="lead">Contacts :</p>
				  	<p class="text-muted">+603-83125852</p>
				  	<p class="text-muted">+603-83125842</p>
				  </li>
				  <li class="list-group-item">
				  	<p class="lead">Mail :</p>
				  	<p class="text-muted">libdesk@mmu.edu.my</p>
				  </li>
				</ul>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	 <footer class="site-footer" style="background-color: #21618C;">
	      <div class="container">
	        <div class="row">
	         <div class="Link">
	            <h6>Quick Links</h6>
	            <ul class="footer-links">
	               <li><a href="" style="color: white;">Home</a></li>
	              <li><a href="" style="color: white;">User</a></li>
	              <li><a href="" style="color: white;">Booking</a></li>
	            </ul>
	          </div>
	        </div>
	        <hr>
	      </div>
	      <div class="container">
	        <div class="row">
	          <div class="copyright">
	             <p class="copyright-text"style="color: white;">Copyright &copy; 2021 All Rights Reserved by 
	         <a href="#"style="color: white;">Booked!</a>
	            </p>
	          </div>
	        </div>
	      </div>
	</footer>
</body>
<script type="text/javascript">
    document.getElementById("btntobook").onclick = function () {
        location.href = "GLEVEL.php";
    };
</script>
</html>