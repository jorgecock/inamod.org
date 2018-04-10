<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Inamod</title>
	<link href="https://s3.amazonaws.com/inamod/sena_logo_small.png" rel="shortcut icon" type="image/png">
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/jquery.background-video.css">


	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/materialize.js"></script>



</head>
<body class="teal lighten-5">
	

	<?php include_once 'pages/nav/nav.php'?>



	<div id="content_index">
		<?php include_once 'pages/index/contenido_index.php'?>
	</div>
	
	<div id="main_content"></div>

	
	

	<?php include_once 'pages/footer/footer.php'?>

	
	<!--  Scripts-->
	
	<script src="js/init.js"></script>					
	<script type="text/javascript" src="js/toast.js"></script>

	<script src="js/E-v1.js"></script>

	<script>
		wistiaEmbed = Wistia.embed("e552jbmqyh", {
			videoQuality: "hd-only",
			videoFoam: true
		});
		function setPlaySpeed(speed) {
			wistiaEmbed.playbackRate(speed);
		}

	</script>
	
</body>
</html>

