<?php include("./templates/header.php");?>
<section>
	<div class="row justify-content-center">
		<div class="col-10 col-md-5 m-5 card p-5">
			<div class="text-center">
				<img src="./assets/images/cool.png" class="img-fluid rounded" style="height: 150px; width: 150px"
					alt="...">
			</div>
			<br>
			<form action="./services/save_client.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-6 col-12">
						<label for="inputName">Nombre</label>
						<input type="text" class="form-control" id="inputName" placeholder="Nombre" name="name"
							required>
					</div>
					<div class="form-group col-md-6 col-12">
						<label for="inputLastname">Apellido</label>
						<input type="text" class="form-control" id="inputLastname" placeholder="Apellido"
							name="lastname">
					</div>
					<div class="form-group col-md-6 col-12">
						<label for="inputEmail">Correo</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="email"
							required>
					</div>
					<div class="form-group col-md-6 col-12">
						<label for="inputPhone">Teléfono</label>
						<input type="text" class="form-control" id="inputPhone" placeholder="Teléfono" name="phone">
					</div>
				</div>
				<center><button type="submit" class="btn btn-primary">Enviar</button></center>
			</form>
		</div>
	</div>
</section>

<?php include "./templates/footer.php";?>