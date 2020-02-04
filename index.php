<?php include("./router.php"); ?>
<?php include("./templates/header.php"); ?>
<section id="render" class="container-fluid">
	<div class="row justify-content-center">
		<div class="bg-warning col-12 col-md-7">
			<h1 class="text-center my-3">Escalando hacia una vida extraordinaria</h1>
			<div class="embed-responsive embed-responsive-16by9 mb-2" style="border-radius: 10px">
				<iframe id="image-questions" class="embed-responsive-item" src="https://www.powtoon.com/embed/f6cFluO2cNT?autoplay=1"
				allowfullscreen></iframe>
			</div>
		</div>
		<div class="bg-warning col-12 col-md-7">
			<div class="row justify-content-center mt-md-3">
				<div class="col-12 col-md-8">
					<div class="card mx-1 text-center mb-3" style="border-radius: 10px">
						<div class="card-header">
							Bienvenid@ <span class="badge badge-success"><?php echo $_SESSION["name"]?></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Preparate para iniciar tu viaje</h5>
							<p class="card-text">Tomate Tu Tiempo, piensa, medita, lee, lee mucho.....en un libro puedes
								encontrar
								la sabiduría o la respuesta que estas buscando.....</p>
							<a href="response.php" class="btn btn-primary">Iniciar</a>
						</div>
						<div class="card-footer text-muted">
							<span>Copyirght&#x00A9; Andrés Mauricio Jaramillo Alvarez 2019</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("./templates/footer.php"); ?>