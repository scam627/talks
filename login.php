<?php include("./templates/header.php");?>
<section>
	<div class="row justify-content-center">
		<div class="col-12 col-md-5 m-5 card p-5">
			<form action="./services/validation.php" method="post">
				<div class="form-row justify-content-center">
					<div class="form-group col-md-6 col-12">
						<label for="inputEmail">Correo</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="email"
						required>
					</div>
				</div>
				<div class="form-row justify-content-center">
					<div class="form-group col-md-6 col-12">
						<label for="inputPassword">Contraseña del formulario</label>
						<input type="password" class="form-control" id="inputPassword" placeholder="Pass" name="token" required>
					</div>
				</div>
				<center><button type="submit" class="btn btn-primary">Enviar</button></center>
				<br><center><a href="./inscription.php">Inscribirme</a></center>
			</form>
		</div>
	</div>
</section>

<?php include "./templates/footer.php";?>