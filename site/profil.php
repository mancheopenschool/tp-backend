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
	<?php
	include("functions.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col s9">
				<?php
				$liste = get_profiles_infos();
				for ($i = 0; $i < count($liste); $i++){
				$avatar = $liste[$i]['avatar'];
				?>
				<div class="public_profile">
					<a href="detail_profil.php?id=<?php echo $liste[$i]['id'];?>"><p class="avatar">
						<img src="<?php echo $IMG_PATH.$avatar; ?>" />
					</p>
					<p class="name">
						<?php echo $liste[$i]['prenom']." " .$liste[$i]['nom']; ?>
					</p>
				</a>
			</div>
			<?php
		}
		?>
	</div>
	<div class="col s3">
		<?php
		$infos = get_my_profile($_SESSION['user_id']);
		
		?>
			<div class="row">
				<div class="col s6">
					<img src="<?php echo $infos['avatar']; ?>"/>
				</div>
			</div>
	</div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>