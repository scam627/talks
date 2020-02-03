<?php include("./router.php"); ?>
<?php include("./templates/header.php"); ?>
<section class="container-fluid">
	<div class="row justify-content-center mt-5">
		<div class=" col-12 embed-responsive rounded col-12 col-md-9 embed-responsive-16by9">
			<iframe id="image-questions" class="embed-responsive-item" src="./assets/videos/1.mp4"
				allowfullscreen></iframe>
		</div>
	</div>
	<div>
		<div id="render-query" class="row justify-content-center my-4">
			<div class="col-6 mb-2">
				<center>
					<img id="emoji-questions" src="../assets/emojis/theme-two/0.png" class="img-fluid"
						alt="Responsive image">
				</center>
			</div>
			<form class="p-2 col-10 col-md-7" action="javascript:void(0);">
				<div class="form-row">
					<div class="form-group text-center col-12">
						<input value="0" step="1" min="0" max="9" type="range" class="custom-range" id="content">
					</div>
				</div>
				<center>
					<button type="button" onclick="saveAns()" class="btn btn-dark rounded-pill">Siguiente</button>
				</center>
			</form>
		</div>
	</div>
</section>
<script>
let curr = 0;
document.getElementById("emoji-questions").width = screen.width * 0.1;
document.getElementById("content").addEventListener("change", _ => {
	let num = document.getElementById("content").value;
	document.getElementById("emoji-questions").src = `../assets/emojis/theme-two/${num}.png`;
});


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
			curr = (curr + 1) % 12;
			document.getElementById("image-questions").src = `./assets/videos/${curr + 1}.mp4`;
			console.log(el);
		}
	});
}
</script>
<?php include("./templates/footer.php"); ?>