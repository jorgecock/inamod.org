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

	<style>
	body{
		background: url(https://s3.amazonaws.com/inamod/hex.png);
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #e0f2f1;
	}




</style>

</head>
<body>
	

	<?php include_once 'pages/nav/nav.php'?>



	<div id="content_index">
		<?php include_once 'pages/index/contenido_index.php'?>
	</div>
	
	<div id="main_content"></div>

	
	

	<?php include_once 'pages/footer/footer.php'?>

	
	<!--  Scripts-->
	
	<script src="js/init.js"></script>					
	<script type="text/javascript" src="js/toast.js"></script>

	<script src="https://fast.wistia.com/assets/external/E-v1.js"></script>

	<script>



		$(document).ready(function() {

				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					
					$('#video_principal').html('<div id="wistia_38oz3ozh8j"></div>');

					wistiaEmbed = Wistia.embed("38oz3ozh8j", {
						videoQuality: "hd-only",
						videoFoam: true
					});
					function setPlaySpeed(speed) {
						wistiaEmbed.playbackRate(speed);
					}
				}else{
					
					$('#video_principal').html('<div id="wistia_tcroqxnroe"></div>');

					wistiaEmbed = Wistia.embed("tcroqxnroe", {
						videoQuality: "hd-only",
						videoFoam: true
					});
					function setPlaySpeed(speed) {
						wistiaEmbed.playbackRate(speed);
					}

				}


/*


	hay que solucionar el problema con el video en amazon

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

				$('#video_principal').html('<div id="wistia_38oz3ozh8j"></div>');

				wistiaEmbed = Wistia.embed("38oz3ozh8j", {
					videoQuality: "hd-only",
					videoFoam: true
				});
				function setPlaySpeed(speed) {
					wistiaEmbed.playbackRate(speed);
				}

			}else{
				$('#video_principal').html('<video class="responsive-video" loop autoplay controls="false" id="video_ama" muted playsinline><source src="https://s3.amazonaws.com/tutorialespatronessena/inamod/intro.MP4" type="video/mp4"></video>')



				var vids = $("video"); 
				$.each(vids, function(){
					this.controls = false; 
				}); 

			}


 */



		});




	</script>
	
</body>
</html>


