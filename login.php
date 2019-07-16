<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>

<body>

	<div class="container-fluid">
		<div class="container">
			<!-- <div class="row"> -->
			<div class="login ">
				<div class="row">
					<h1 id="titre-appli" class="col-12">TITRE</h1>
					<div class="header-form offset-6 col-6">
						<h2 id="btn_connection">Connection</h2>
					</div>
					<form class="form-login col-6" method="post" action="login.php">

						<?php echo display_error(); ?>

						<div class="input-group">
							<label>Pseudo</label>
							<input type="text" name="username">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>
						<div class="input-group">
							<label>Mot de passe</label>
							<input type="password" name="password">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>
						<div class="input-group">
							<button type="submit" class="btn btn-login " name="login_btn">Login</button>
						</div>
					</form>
				</div>
				<!-- </div> -->
			</div>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>