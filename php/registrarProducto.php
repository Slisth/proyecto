<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/registrarProducto.css">
</head>
<body>
	<main>
		<div class="container">
			<form action="addProduct.php" name="add_product" id="add_product" class="" method="post">

				<div class="header">						
					<h2 class="title">Añadir Producto</h2>
				</div>
					<div>
						<select name="lugar" required>
							<option value=""
									hidden
							>Lugar de venta</option>
							<option value="1">UPB</option>
							<option value="2">Parque Caracolí</option>
							<option value="2">Delacuesta C.C.</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" name="name" placeholder="Nombre" required>
					</div>
					<div class="form-group">
						<input type="number" name="stock" placeholder="Cantidad" required>
					</div>
					<div class="form-group">
						<input type="text" name="price" placeholder="Precio" required>
					</div>
					<div class="form-group">
						<label placeholder="imagen"><input  type="file" name="image"></label>
					</div>
					<div class="form-group">
						<input type="text" name="description" placeholder="Descripción" required>
					</div>
					<br>
					<div>
						<select name="enable" required>
							<option value=""
									hidden
							>Habilitado</option>
							<option value="1">Si</option>
							<option value="2">No</option>
						</select>
					</div>

					<div class="modal-footer">
					<input type="button" name="cancel" class="cancelar" value="Cancelar">
					<input type="submit" name="save" class="registrar" value="Guardar datos">
				</div>
			</form>
		</div>
	</main>
</body>
</html>