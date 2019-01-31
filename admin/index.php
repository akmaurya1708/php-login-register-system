<?php 
include "../php/config.php";


if (!isset($_SESSION['userID'])) {
  	exit(header('Location: ../login.php'));
} else {
	$userID = $_SESSION["userID"];
	$userEmail = $_SESSION["userEmail"];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="I'm Web Designer/Web Developer. I create Project Management System. Here you can add projects and there task, also assign task to your team member. you can also add new team member to your team.">
    <meta name="author" content="AK Maurya">
    <meta name="DC.title" content="Project Management System By - AK Maurya">
    <meta name="keywords" content="Project Management System , Team Member, Projects , New team, New Project, Task, New Task,PHP, SQL, Web Designer, Front End Developer, Boostrap, SASS, SCSS, Css3, Html5">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Register and Login System By AK Maurya</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top">
      <div class="container">
        <a class="navbar-brand scroll" href="#">Register and Login System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
				<a class="nav-link btn btn-outline-primary" href="../php/signout.php">Signout</a>
            </li>    
                 
          </ul>
        </div>
      </div>
    </nav>
		<div class="cover-container d-flex p-3 mx-auto flex-column w-100" id="top">
		  <div class="inner cover">
		    <h1 class="cover-heading display-4">You are Logged in Successfully</h1>
		    <p>This is built in Php to show how to connect database and create a simple login and register system.</p>
		  </div>
		  <footer class="site-footer">
		  Copyright © 2019 Register and Login System By <a href="https://akmaurya.in" target="_blank">AK Maurya</a>. All rights reserved.
		</footer>
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>