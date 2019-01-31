<?php include 'include/header.php'; ?>
<div class="cover-container d-flex p-3 mx-auto flex-column w-100" id="top">
	<div class="inner cover p-4 bg-light text-dark">
		<h2>Register Form</h2>
		<?php
		if (isset($_POST['register'])) {
			$userEmail = $_POST['userEmail'];
			$userPass = $_POST['userPass'];
			$userCPass = $_POST['userCPass'];
			// checking if form empty or not
			if (empty($userEmail)) { ?>
				<div class="alert alert-info">Email cannot be empty</div>
			<?php } elseif(empty($userPass)){ ?>
				<div class="alert alert-info">Password cannot be empty</div>
			<?php } elseif (empty($userCPass)) { ?>
				<div class="alert alert-info">Confirm Password cannot be empty</div>
			<?php } elseif ($userPass !== $userCPass) {?>
				<div class="alert alert-info">Password not match to confirm password</div>
			<?php } else {
				//  checking if Email store in Database or not
				$emailSql = mysqli_query($con, "SELECT * from users where userEmail = '$userEmail'");
				$row = mysqli_fetch_array($emailSql);
				if (is_array($row) > 0) {
					echo "Email already exists";
				} else {
					// inserting data to database
					$addUser = mysqli_query($con, "INSERT INTO `users`(`userID`, `userEmail`, `userPass`) VALUES ('','$userEmail','$userPass')");
					if ($addUser == true) {?>
					<div class="alert alert-success">You are registered successfully.</div>
				<?php } else {?>
					<div class="alert alert-info">There is some error.</div>
				<?php }
				}
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
			<div class="form-group">
				<label for="userCPass">Confirm Password</label>
				<input type="password" class="form-control" name="userCPass" id="userCPass" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary" name="register" id="register">Login</button>
		</form>
	</div>
	<footer class="site-footer">
		Copyright © 2019 Register and Login System By <a href="https://akmaurya.in" target="_blank">AK Maurya</a>. All rights reserved.
	</footer>
</div>
<?php include 'include/footer.php'; ?>
