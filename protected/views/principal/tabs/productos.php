<H1>Lista de Empleados</H1>
<?php
 $this->widget('zii.widgets.grid.CGridView', array(
  'dataProvider'=>$products,
  'columns'=>array(
    'id_producto:number:Id',
    'nombre_p:text:Producto',
    'precio_unitario:number:Precio',
    'unidades_existencia:number:Stock',
  ),
 ));