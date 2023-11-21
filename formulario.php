<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
	<label for="nombre">Nombre:</label>
			<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre">

			<label for="marca">Marca:</label>
			<input class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe la marca">
	
			<label for="codigo">Código de barras:</label>
			<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="color">Color:</label>
			<input class="form-control" name="color" required type="text" id="color" placeholder="Escribe el color">

			<label for="categoria">Categoria:</label>
			<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

			<label for="precio">Precio:</label>
			<input class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="existencia">Existencia:</label>
			<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>