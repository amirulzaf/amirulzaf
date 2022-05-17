<?php include("dbconfig.php"); ?>
<!DOCTYPE html>
<html>

<head><title>Logout</title>

<script type="text/javascript">

	setTimeout("window.location='LogIn_Ass.php';", 2000);
	
	history.forward();

</script>

</head>

<body>

<p>Thank you for using our system. </p>

<?php

session_destroy();
?>

</body>

</html>