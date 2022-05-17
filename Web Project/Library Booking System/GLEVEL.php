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
<title>Booked!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="footer.css">




<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
 
<style>


body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

.mySlides {display: none}



.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}


.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #D7DBDD;
  border-radius: 50%;
}


.container:hover input ~ .checkmark {
  background-color: #95A5A6 ;
}


.container input:checked ~ .checkmark {
  background-color: #21618C;
}


.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}


.container input:checked ~ .checkmark:after {
  display: block;
}


.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

*:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}


ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.2857142857%;
  padding: 5px;
  position: relative;
}
.seat:nth-child(3) {
  margin-right: 14.2857142857%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 6px 0;
  background: #F42536;
  border-radius: 8px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 85%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}


.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}



.rectangle {
  height: 50px;
  width: 100px;
  background-color: #555;
}


.seat1 input[type=checkbox]:disabled + label:after {
  content: "Bookshelf";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}

.seat1 input[type=checkbox]:disabled + label {
  background: #F5B041;
  text-indent: -9999px;
  overflow: hidden;
}

.seat1 input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}

.seat1 {
  display: flex;
  flex: 0 0 14.2857142857%;
  padding: 5px;
  position: relative;
}
.seat1:nth-child(3) {
  margin-right: 14.2857142857%;
}
.seat1 input[type=checkbox] {
  position: absolute;
  opacity: 0;
}

.seat1 label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 6px 0;
  background: #F42536;
  border-radius: 8px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat1 label:before {
  content: "";
  position: absolute;
  width: 85%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}

#rectangle {
  width: 150px;
  height: 50px;
  background: #7FB3D5;
  -ms-transform: rotate(90deg); /* IE 9 */
  transform: rotate(90deg);
   text-align: center;
   float: left;
}

hr{
 border-color: white;
}

 #trapezoid {
     border-bottom: 100px solid #1ABC9C;
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	height: 0;
	width: 200px;
	float: right;
	-ms-transform: rotate(-90deg); /* IE 9 */
    transform: rotate(-90deg);
	text-align: center;
    }

.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 70px;
  bottom: 0;
  height: inherit;
}


</style>

</head>



<body>
<?php
    if (isset($_GET["bookbtn"]))
    {
      $date = $_GET["date"];
      $date = str_replace('/', '-', $date);
      $time = $_GET["time"];

      $qty = $_GET["qty"];
      $duration = $_GET["radio"];
      $booktable = $_GET["booktable"];

      $sql_admin="INSERT INTO booking (booking_table, booking_date, booking_time, booking_duration, booking_qty, student_id) VALUES ('$booktable', '$date', '$time', '$duration', '$qty', '$student_sess');";
      $result_admin = mysqli_query($db, $sql_admin);

        $message = "The booking is done";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
   <img src="img/logo.png" width="150" height="50"> 
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="MAIN_page.php" class="w3-bar-item w3-button">Home</a>
      <a href="#" class="w3-bar-item w3-button"><?php echo $row['User_name'] ?></a>
      <a href="GLEVEL.php" class="w3-bar-item w3-button">Booking</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>
</div>


<nav class="w3-sidebar w3-light-grey w3-bar-block w3-collapse w3-animate-left"  id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3><b>Pick your</b></h3>
    <h3><b>Seat!</b></h3>
  
    <hr>
    
	<div class="w3-bar-block">
    <a href="GLEVEL.php" class="w3-bar-item w3-button w3-padding-16"><i class="material-icons" style="font-size:16px">weekend</i> LEVEL G</a>
    <a href="1LEVEL.php" class="w3-bar-item w3-button w3-padding-16"><i class="material-icons" style="font-size:16px">weekend</i> LEVEL 1</a>
    <a href="2LEVEL.php" class="w3-bar-item w3-button w3-padding-16"><i class="material-icons" style="font-size:16px">weekend</i> LEVEL 2</a>
  </div>
	
	  <form method="get">
              
      <p><label><i class="fa fa-calendar-o"></i> Date</label></p>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="date" required>

      <label for="appt">Select a time:</label>
      <input type="time" id="time" name="time">       

      <p><label><i class="fa fa-male"></i> People</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="qty" min="1" max="6">

      <p><label><i class="material-icons" style="font-size: 15px">alarm</i> Duration</label></p>
	    <label class="container">10 Minutes
      <input type="radio" name="radio" value="10">
      <span class="checkmark"></span>
      </label>
      <label class="container">30 Minutes
      <input type="radio" name="radio" value="30">
      <span class="checkmark"></span>
      </label>
      <label class="container">1 Hour
      <input type="radio" name="radio" value="60">
      <span class="checkmark"></span>
      </label>
      <label class="container">2 Hours
      <input type="radio" name="radio" value="120">
      <span class="checkmark"></span>
      </label>
      
	  
      <p><input class="w3-button w3-block w3-flat-turquoise w3-left-align" type="submit" name="bookbtn" value="Book" /><i class="far fa-thumbs-up w3-margin-right"></i></p>
  </div>
  
</nav>
<hr>
<hr>
<hr>
<hr>

<div class="w3-content w3-border-left w3-border-right" >
<div class="w3-main w3-white" style="margin-left:260px">

<div class="w3-container"  id="layout">

<?php 
  $tablerow_sql = mysqli_query($db, "SELECT * from tablerow where ground_id=1 GROUP BY table_row");
  $i=0;
  while($table_row=mysqli_fetch_assoc($tablerow_sql )){   
 ?>
  <ol class="cabin fuselage">
    <li class="row">
      <ol class="seats" type="A">
        <?php 
          $i++;
          $table_sql = mysqli_query($db,"SELECT* FROM tablerow where table_row = $i AND ground_id=1");

          while($table_result=mysqli_fetch_assoc($table_sql )){ ?>
          <li class="seat">
            <input type="checkbox" <?php echo $table_result['table_status']; ?> id="<?php echo $table_result['table_name']; ?>" name="booktable" value="<?php echo $table_result['table_id']; ?>" />
            <label for="<?php echo $table_result['table_name']; ?>"><?php echo $table_result['table_name']; ?></label>
          </li>
        <?php } 
        ?>
    </li>
  </ol>
    <?php } ?>
</form>


<br>	
<br>
<hr>

<div id="rectangle"><b>Computer Booth</b></div>

<div id="trapezoid"><b>Service Desk</b></div>
</div>
</div>
</div>

<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>




 <footer class="site-footer" style=" margin-left:250px; background-color: #21618C;
  bottom: 0;
  width: 100%;">
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
           <a href="#"style="color: white;">Booked!</a>.
              </p>
            </div>
          </div>
        </div>
  </footer>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  $('input[type=checkbox]').change(function(e){
   if ($('input[type=checkbox]:checked').length > 1) {
        $(this).prop('checked', false)
        alert("allowed only 1");
   }
})
</script>
</html>