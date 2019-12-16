<?php include("./router.php"); ?>
<?php include("./templates/header.php"); ?>
<section id="render" class="container-fluid">
	<div class="row justify-content-center">
		<div class="m-5 col-12 col-md-8 embed-responsive embed-responsive-16by9">
			<video id="questions" class="rounded" src="./assets/videos/questions.mp4"></video>
		</div>
	</div>
	<div id="render-query" class="row my-4 justify-content-center">
		<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>
	</div>
</section>
<script>
let curr = 0;
let times = [4, 9, 14, 18, 24, 29, 34, 39, 44, 48, 54, 58];
nextQuery();

function init() {
	let html = getNextComponent();
	document.getElementById("render-query").innerHTML = html;
	document.getElementById("questions").currentTime = times[curr];
}

function pauseVideo() {
	document.getElementById("questions").pause();
}

function playVideo() {
	document.getElementById("questions").play();
}

function nextQuery() {
	document.getElementById("questions").currentTime = times[curr];
	let html = getNextComponent();
	document.getElementById("render-query").innerHTML = html;
	curr = (curr + 1) % 12;
}

function getNextComponent() {
	let elements = [
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<input value="1" step="1" min="0" max="9" type="range" class="custom-range" id="content">
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<input value="1" step="1" min="0" max="9" type="range" class="custom-range" id="content">
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns(1)" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`,
		`<form class="card p-2 col-10 col-md-7" action="javascript:void(0);">
			<div class="form-row">
				<div class="form-group text-center col-12">
					<textarea type="text" class="form-control" id="content"></textarea>
				</div>
			</div>
			<center>
				<button type="button" onclick="saveAns()" class="btn btn-success">Siguiente</button>
			</center>
		</form>`
	]
	return elements[curr];
}

function saveAns() {
	let content = document.getElementById("content").value;
	let user = `<?php echo $_SESSION["user"];?>`;
	$.ajax({
		url: "./services/save_answer.php",
		method: "post",
		data: {
			num: curr,
			content: content,
			user: user
		},
		success: function(el) {
			nextQuery();
			console.log(el);
		}
	});
}
</script>
<?php include("./templates/footer.php"); ?>