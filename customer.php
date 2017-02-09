
<html>
	<head>
		
		
		<title>assignment 2</title>
		
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
                
	</head>
	<body>
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="home.html"><img src="images/logo.jpg" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="home.html">Home</a>
							</li>
                                                        
                                                        <li>
								<a href="customer.php">Customers</a>
							</li>
							
						</ul>
					
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			
                        <div class="container">





<?php

// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

/* for ($j = 0 ; $j < $rows ; ++$j)
{
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  
  echo $row['firstName'] . '<br>';
  echo $row['lastName'] . '<br>';
	echo $row['address'] . '<br>';
  echo $row['city'] . '<br>';
	echo $row['state'] . '<br>';
	echo $row['zip'] . '<br>';
	echo $row['email'] . '<br>';
	echo $row['phone'] . '<br><br>';
}

$result->close();
$conn->close(); */

?>
<table>
<tr><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Email</th><th>Phone</th></tr>

<?php for ($j = 0 ; $j < $rows ; ++$j)
{
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC); ?>
<tr><td><?php  echo $row['firstName']  ?></td><td><?php  echo $row['lastName']  ?></td><td><?php  echo $row['address']  ?></td>
<td><?php  echo $row['city']  ?></td><td><?php  echo $row['state']  ?></td><td><?php  echo $row['zip']  ?></td>
<td><?php  echo $row['email']  ?></td><td><?php  echo $row['phone']  ?></td>
</tr>
<?php
}

$result->close();
$conn->close();

?>
</table>
</div>
                        		   
                        
	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>
