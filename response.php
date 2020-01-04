<?php include("./router.php"); ?>
<?php include("./templates/header.php"); ?>
<section id="render" class="row justify-content-center">
	<div class="container mt-2 pt-5 border rounded">
		<div class="row p-5 justify-content-center">
			<div class="embed-responsive rounded col-9 embed-responsive-16by9">
				<iframe id="image-questions" class="embed-responsive-item" src="./assets/videos/1.mp4"
					allowfullscreen></iframe>
			</div>
			<!-- <div class="col-11 col-md-11">
				<img id="image-questions" src="./assets/images/1.png" class="img-fluid" style="border-radius: 15px"
					alt="Responsive image">
			</div> -->
		</div>
		<div id="render-query" class="row my-4 justify-content-center">
			<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
				<div class="form-row">
					<div class="form-group text-center col-12">
						<input value="0" step="1" min="0" max="9" type="range" class="custom-range" id="content">
					</div>
				</div>
				<center>
					<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
				</center>
			</form>
		</div>
	</div>
</section>
<script>
let curr = 0;

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