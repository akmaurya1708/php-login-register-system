<?php include 'include/header.php'; ?>
<div class="cover-container d-flex p-3 mx-auto flex-column w-100" id="top">
	<div class="inner cover p-4 bg-light text-dark">
		<h2>Login Form</h2>
		<?php
		if (isset($_POST['login'])) {
			$userEmail = $_POST['userEmail'];
			$userPass = $_POST['userPass'];
			// checking if form empty or not
			if (empty($userEmail)) {?>
				<div class="alert alert-info">Email cannot be empty</div>
			<?php } elseif(empty($userPass)){?>
				<div class="alert alert-info">Password cannot be empty</div>
			<?php } else{
				//  checking if data store in Database or not
				$checkUser = mysqli_query($con, "SELECT * FROM `users` where userEmail = '$userEmail' and userPass = '$userPass'");
				if (mysqli_num_rows($checkUser) > 0) {
					$row = mysqli_fetch_array($checkUser);
					$_SESSION["userID"] = $row['userID'];
                    $_SESSION["userEmail"] = $row['userEmail'];
					header('Location: admin');
					?>
					<div class="alert alert-success">You are logged in successfully.</div>
				<?php } else {?>
					<div class="alert alert-info">There is some error.</div>
				<?php }
			}
		}
		?>
		<form class="text-left" method="post" action="">
			<div class="form-group">
				<label for="userEmail">Email address</label>
				<input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="userPass">Password</label>
				<input type="password" class="form-control" name="userPass" id="userPass" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary" name="login" id="login">Login</button>
		</form>
	</div>
	<footer class="site-footer">
		Copyright © 2019 Register and Login System By <a href="https://akmaurya.in" target="_blank">AK Maurya</a>. All rights reserved.
	</footer>
</div>
<?php include 'include/footer.php'; ?>
