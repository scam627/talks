<?php include("./router.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
	<title>Andres</title>
	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="../vendor/components/font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../src/css/manage.css" />
	<link rel="stylesheet" href="../src/css/landing.css" />
	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- font familys -->
	<link href="https://fonts.googleapis.com/css?family=Combo|Comfortaa|Coming+Soon&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
	<link rel='stylesheet' id='wp-editor-font-css'
		href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&#038;ver=5.2.3'
		type='text/css' media='all' />
	<!-- jquery nao-input -->
	<link rel="stylesheet" href="./src/css/style.css">
	<link rel="stylesheet" href="./src/css/jquery-ui.min.css">
	<link rel="stylesheet" href="./src/css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="./src/css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="./src/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="./src/css/jquery-pseudo-ripple.css">
	<link rel="stylesheet" href="./src/css/jquery-nao-calendar.css">
	<link rel="stylesheet" href="./src/css/jquery-nao-input.css">
</head>

<body id="cnt" class="bg-white">
	<section class="container-fluid">
		<div class="row justify-content-center mt-md-5">
			<div class=" col-12 embed-responsive rounded col-12 col-md-9 embed-responsive-16by9">
				<iframe id="image-questions" class="embed-responsive-item" src="./assets/videos/1.mp4"
					allowfullscreen></iframe>
			</div>
		</div>
		<div class="border-bottom">
			<div id="render-query" class="row justify-content-center my-4">
				<form class="p-2 col-10 col-md-7" action="javascript:void(0);">
					<div class="form-row">
						<div class="col-12">
								<img id="emoji-questions" src="../assets/emojis/theme-two/0.png" class="img-fluid"
								alt="Responsive image">
						</div>
						<div class="form-group text-center col-12" id="render">
							<input value="1" step="1" min="1" max="10" type="range"  id="content" onchange="emojiDeploy()">
						</div>
					</div>
					<center>
						<div class="col-md-3 col-6">
							<button type="button" onclick="saveAns()" class="btn btn-sm rounded-pill" style="background-color: #343a40; color: white">Siguiente</button>
						</div>
					</center>
				</form>
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="../src/js/jquery-3.2.1.min.js"></script>
	<script src="./src/js/jquery.min.js"></script>
	<script src="./src/js/jquery-ui.min.js"></script>
	<script src="./src/js/jquery-ui-touch-punch.min.js"></script>
	<script src="./src/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./src/js/jquery-pseudo-ripple.js"></script>
	<script src="./src/js/jquery-nao-calendar.js"></script>
	<script src="./src/js/jquery-nao-input.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script>
		$('form').naoInput();
		let curr = 0;
		document.getElementById("emoji-questions").width = screen.width * 0.1;
		function emojiDeploy() {
			let num = document.getElementById("content").value;
			document.getElementById("emoji-questions").src = `../assets/emojis/theme-two/${num}.png`;
		};


		function saveAns() {
			let content = document.getElementById("content").value;
			let user = `<?php echo $_SESSION["user"];?>`;
			$.ajax({
				url: "./services/save_answer.php",
				method: "post",
				data: {
					num: curr + 1,
					content: content,
					user: user
				},
				success: function(el) {
					if(curr == 11) {
						alert("Has terminado la encuesta");
						window.location.replace("https://andresjaramilloalvarez.com/talks/index.php");	
					}
					document.getElementById('render').innerHTML = `<input value="1" step="1" min="1" max="10" type="range"  id="content" onchange="emojiDeploy()">`;
					$('form').naoInput();
					curr = (curr + 1) % 12;
					document.getElementById("image-questions").src = `./assets/videos/${curr + 1}.mp4`;
					console.log(el);
				}
			});
		}
	</script>
</body>
</html>