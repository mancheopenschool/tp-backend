
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="container">
		<form action="index.php" method="GET">
			<label for="login">Login:
				<input type="text" id="login" name="login" placeholder="Entrez votre login" />
			</label><br/>
			<label for="password">Password:
				<input type="password" id="password" name="password" placeholder="Entrez votre password" />
			</label><br/>
			<button class="btn waves-effect waves-light" type="submit" name="submit">Connection
				<i class="material-icons right">send</i>
			</button>
		</form>
		<?php
		ini_set('display_errors', 'On');
		error_reporting(E_ALL);
		if (isset($_GET['submit'])){
			$dsn = 'mysql:host=127.0.0.1;dbname=MOS';
			$username = 'root';
			$password = 'root';
			$pdo = new PDO($dsn, $username, $password);

			$login = $_GET['login'];
			$sql = $pdo->prepare("SELECT id, password FROM utilisateur WHERE login = '$login'");
			$sql->execute();
			$result = $sql->fetch();

			if (!$result || $result['password'] != $_GET['password']){
				echo "<p class='error'>Login ou mdp incorrect</p>";
			}
			else {
				session_start();
				$_SESSION['user_id'] = $result['id'];
				header('Location:profil.php');
			}
		}
		?>
	</div>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>