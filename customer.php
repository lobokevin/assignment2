
<html>
	<head>
		<title>ASSIGNMENT 2 | View Customers Page </title>
		<meta name="description" content="A responsive website for assignment 2 by Kaiser and Kavin with the new Twitter Bootstrap 3.">

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

					<a class="navbar-brand" href="./home.html"><img src="images/logo.png" alt="Kaiser Ahmed Logo"></a>

					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="./home.html">Home</a>
							</li>
							<li class="active">
								<a href="#">View Customers</a>
							</li>
							<li >
								<a href="./customer_add.html">Add Customers</a>
							</li>
						</ul>

						<ul class="nav navbar-nav pull-right">
							<li>
								<a href="#"><span class="glyphicon glyphicon-wrench"></span> Account</a>
							</li>
							<li>
								<a href="#"><span class="glyphicon glyphicon-lock"></span> Login</a>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->

				</div><!-- end container -->
			</div><!-- end navbar -->
			<div class="row" id="features">

				<div class="col-sm-10 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title text-left">View Customers</h3>
						</div><!-- end panel-heading -->
            <div class="panel-body">
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
					</div><!-- end panel -->
				</div><!-- end feature -->
			</div><!-- end features -->

		</div><!-- end container -->


<footer>
	<div class="container" id="footer">
		<div class="row">
			<div class="col-sm-2">
			<h6>Copyright &copy; <br>2017 Kaiser &amp; Kevin</h6>
			</div><!-- end col-sm-2 -->

			<div class="col-sm-6">
				<h6>About Assignment 2</h6>
				<p>In the course of this assignment two partners will create a couple Bootstrap-formatted, PHP script driven webpages that access database information from MySQL database. One of the pages will add a record to the database and the other page will retrieve the records and display them in a neat Bootstrap table.
				</p>
				<p>The project will be started by cloning the Bootstrap project from GitHub. Along the way one will create a branch for new feature, make various commits to local GitHub repository and an occasional push and pull (fetch and merge) will be needed.</p>

			</div><!-- end col-sm-4 -->



			<div class="col-sm-2">
				<h6>Follow Us</h6>
				<ul class="unstyled">
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Google Plus</a></li>
				</ul>
			</div><!-- end col-sm-2 -->

			<div class="col-sm-2">
				<h6>Coded with Bootstrap 3</h6>
			</div><!-- end col-sm-2 -->
		</div><!-- end row -->
	</div><!-- end container -->
</footer>


<!-- All Javascript at the bottom of the page for faster page loading -->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
