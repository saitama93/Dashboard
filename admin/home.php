<?php
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="/../assets/css/style.css">

</head>

<body>
	<?php include('headerAdmin.php');  ?>
	<div class="content">
		<div class="btn-header">
			<i class="fas fa-arrow-circle-right open-header"></i>
			<i class="fas fa-arrow-circle-left close-header"></i>
		</div>
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png">

			<div>
				<?php if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
						&nbsp; <a href="create_user.php"> + add user</a> <a href="create_season.php"> + add season</a><a href="create_notif.php"> + add notif</a>
					</small>

				<?php endif ?>

				<?php
				$to      = 'nobody@example.com';
				$subject = 'the subject';
				$message = 'hello';
				$headers = 'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $message, $headers);
				?>

				<form action="home.php">

					<label for="">Votre Message</label>
					<textarea name="" id="" cols="30" rows="10"></textarea>

					<input type="submit" class="btn btn-success" value="Envoyer">

				</form>
			</div>
		</div>

		<?php
// 'muller.jessy.pro@gmail.com igalilmi32@gmail.com' 

global $db;
$recupMail = "";
$theRecupMail = $db->prepare("SELECT `email`, `username` FROM `users`");
if ($theRecupMail->execute(array())) {
$recupMail = $theRecupMail->fetchAll(PDO::FETCH_ASSOC);
}
if ($recupMail != false) {
$mailList = [];
foreach ($recupMail as $row) {
echo $row['email'];
?> <input class="<?php echo $row['username']; ?>" type="checkbox" name="<?php echo $row['username']; ?>" value="<?php echo $row['email']; ?>"><?php echo $row['username']; ?> <br> <?php
$mailList[] = $row['email'];
?>
<script>
	
var test = document.querySelector('.<?php echo $row['username']; ?>');


// test.addEventListener('change', azerty);

// function azerty(){

// 	for (let i = 0; i < myArray.length; i++) {
	
		
	
// if (test.checked) {
	
	// <?php //$_POST['textarea']?> = test;

	console.log(test.value);
// }

// }


</script>
<?php
}
}
// function send_mail()
// {
global $mailList;
$email_array = implode(',', $mailList);

$to = $email_array;
$subject = 'Nouveau Match';
$message = $_POST['textarea'];
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: entraineur' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
// }
?>
	</div>

	<!-- 

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/../assets/vendor/js/mdb.min.js"></script>
	<script type="text/javascript" src="/../assets/js/script.js"></script> -->
</body>

</html>