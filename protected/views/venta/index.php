
<h1 class="titulo">Ventas</h1>

<section class="content">
		
		<section id="busqueda-almacen-sec">
			<label for="busqueda-almacen">Buscar en almacén</label>
			<input id="busqueda-almacen" type="text" placeHolder="Busque un producto por nombre">
		</section>

		<section id="venta-productos-sec">
			<table id="lista-productos">
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
				</tr>
			</table>

			<table id="carrito-compras">
				<tr>
					<th>Cantidad</th>
					<th>Nombre</th>
					<th>Precio</th>
				</tr>
			</table>
		</section>


		<section id="total-venta">
			<label for="total">Total</label>
			<input id="total" type="number" min="0.00" value="0.00">
		</section>

</section>