<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<?php include('../bootstrap-fontawesome.php')  ?>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/index.css">

</head>

<body>

	<?php include('../headerAdmin.php')  ?>


	<section id="create-user">



		<div class="container">
			<div class="row">
				<div class="intro offset-2 col-8">
					<h1>Hi Admin, ready to create users ?</h1>
				</div>

				<?php echo display_error(); ?>

				<form action="create_user.php" method="post" class="offset-3 col-6">

					<div class="group-input">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo $username; ?>">
					</div>

					<div class="group-input">
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $email; ?>">
					</div>

					<div class="group-input">
						<label>Season</label>
						<select name="season_user" id="season_user">
							<option value=""></option>
							<?php

							$sql = "SELECT * FROM saison";
							$sth = $db->prepare($sql);
							$sth->execute();
							$result = $sth->fetchAll(PDO::FETCH_ASSOC);

							if (count($result) > 0) {
								// output data of each row
								foreach ($result as $saison) {
									?><option><?php echo $saison["date_saison"] ?></option>
								<?php
								}
							}
							?>
						</select>
					</div>

					<div class="group-input">
						<label>User type</label>
						<select name="user_type" id="user_type">
							<option value=""></option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>

					<div class="group-input">
						<label>Password</label>
						<input type="password" name="password_1">
					</div>

					<div class="group-input">
						<label for="password_2">Confirm password</label>
						<input type="password" name="password_2">
					</div>

					<div class="group-input">
						<button type="submit" class="btn" name="register_btn"> + Create user</button>

					</div>


				</form>
			</div>
		</div>


















	</section>
</body>

</html>