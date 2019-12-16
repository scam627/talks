<?php include("./router.php"); ?>
<?php include("./templates/header.php"); ?>
<section id="render" class="container-fluid">
	<div class="col-12 col-md-7 mt-5">
		<h1 class="text-center my-3">Escalando hacia una vida extraordinaria</h1>
		<div class="card mx-1 text-center">
			<div class="card-header">
				Bienvenid@ <span class="badge badge-success"><?php echo $_SESSION["name"]?></span>
			</div>
			<div class="card-body">
				<h5 class="card-title">Preparate para iniciar tu viaje</h5>
				<p class="card-text">Tomate Tu Tiempo, piensa, medita, lee, lee mucho.....en un libro puedes encontrar
					la sabiduría o la respuesta que estas buscando.....</p>
				<a href="response.php" class="btn btn-primary">Iniciar</a>
			</div>
			<div class="card-footer text-muted">
				<span>Copyirght&#x00A9; Andrés Mauricio Jaramillo Alvarez 2019</span>
			</div>
		</div>
	</div>
</section>

<?php include("./templates/footer.php"); ?>