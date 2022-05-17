<?php
include('dbconfig.php');
if ($_SESSION["admin_loggedin"] != 1)
	header("Location: LogIn_Ass.php");

$admin_sess = $_SESSION["admin_sess"];
$result = mysqli_query($db, "SELECT * from user where User_ID = $admin_sess");
$row = mysqli_fetch_assoc($result);
?>
<html><head>
<title>Booked!</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script> 

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

.center {
  border-collapse: collapse;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #5377AD;
  color: white;
}

.btn {
  background-color: RoyalBlue;;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 16px;
  margin: 20px;
  border-radius: 20px;
}


.btn:hover {
  background-color: #5377AD 
}

hr{
 border-color: white;
}

</style>
</head>


<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
	  	<img src="logo.png" width="150" height="50"> 
	    <!-- Right-sided navbar links. Hide them on small screens -->
	    <div class="w3-right w3-hide-small">
	      <a href="Main_pageAdmin.php" class="w3-bar-item w3-button">Home</a>
	      <a href="BOOKING_LIST_ADMIN.php" class="w3-bar-item w3-button">Booking Info</a>
	      <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
	    </div>
  </div>
</div>
<br>
<h2 class="center">Booking Information</h2>

<table class="center" id="myTable">
  <tr>
    <th>No</th>
    <th>Student ID</th>
    <th>Name</th>
	<th>Date</th>
    <th>Duration (min)</th>
	<th>Seat Code</th>
	<th>Level</th>
  </tr>
  <tr>
  	<?php 
  		$sql="SELECT * FROM (((booking
INNER JOIN tablerow ON booking.booking_table = tablerow.table_id)
INNER JOIN ground ON tablerow.ground_id = ground.ground_id)
INNER JOIN user ON booking.student_id=user.User_id)";
		$result=mysqli_query($db, $sql);
		$i=1;
		while($row=mysqli_fetch_assoc($result)) {
  	 ?>
  	<tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $row['User_ID'] ?></td>
    <td><?php echo $row['User_name'] ?></td>
	<td><?php echo $row['booking_date'] ?></td>
	<td><?php echo $row['booking_duration'] ?></td>
	<td><?php echo $row['table_name'] ?></td>
	<td><?php echo $row['ground_num'] ?></td>
	</tr>
<?php } ?>
  
</table>
<script>
function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}
</script>
<hr>
<hr>



 <footer class="site-footer" style="background-color: #21618C; position: fixed;
  bottom: 0;
  width: 100%;">
	      <div class="container">
	        <div class="row">
	         <div class="Link">
	            <h6>Quick Links</h6>
	            <ul class="footer-links">
	               <li><a href="" style="color: white;">Home</a></li>
	              <li><a href="" style="color: white;">Booking Info</a></li>
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
</html>
