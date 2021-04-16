<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>received</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation button -->
<div class="navbar" >
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
		<a class="navbar-logo" href="#"><img src="img/logo.jpg"></a>
	<button class ="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class='navbar-nav'>
			<li class="nav-item">
				<a class="nav-link" href="main.html">Main</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="factor.html">Factor</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="impact.html">Impact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="prevention.html">Prevention</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="news.html">News & Article</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="statistics.html">Statistics</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="organization.html">Organization</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="feedback.html">Feedback</a>
			</li>
		</ul>
		</div>
</div>
</nav>
</div> <!--end of navigation button division-->

<!--Title-->
<div class="title-YS">
	<p><center>Youth Suicide</center></p>
</div><!--end of title-->

<!--PHP FEEDBACK FORM-->

<?php
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "<h1><b><center>Feedback Received</center></b></h2>";
echo "<br>";

//print the submmision details
echo "<center>Thanks for sending us your Feedback.</center>";
echo "<br>";
echo "<center><h3>Submission details: </h3>";

//echo nl2br("\n First Name: $firstname \nLast Name: $lastname \nEmail: $email \nMessage: $message");

?>

	<table width="20%">
			<tbody>
			<tr>
				<td><?php echo "First Name: " ?></td>
				<td><?php echo "<b>$firstname</b>" ?></td>
			</tr>
			<tr>
				<td><?php echo "Last Name: " ?></td>
				<td><?php echo "<b>$lastname</b>" ?></td>
			</tr>
			<tr>
				<td><?php echo "Email: " ?></td>
				<td><?php echo "<b>$email</b>" ?></td>
			</tr>
			<tr>
				<td><?php echo "Message: " ?></td>
				<td><?php echo "<b>$message</b>" ?></td>
			</tr>
			
			</tbody>
	</table>

	<br>

<!--feedback form-->

</body>

<!--- Footer -->
<footer>
			<p><center>Brought to you by students of University of Malaya</center></p>

</footer>

</html>



