<?php
return array(
  'title'=>'Datos de productos',
  'description'=>'Ingrese la siguiente información:',
  'elements'=>array(
    'id_producto'=>array(
      'type'=>'number',
      'label'=>'ID'
    ),
    'nombre_p'=>array(
      'type'=>'text',
      'label'=>'Producto'
    ),
    'precio_unitario'=>array(
      'type'=>'number',
      'label'=>'Precio'
    ),
    'unidades_existencia'=>array(
     'type'=>'number',
      'label'=>'Stock'
    ),
  ),
  'buttons'=>array(
    'guardar'=>array(
      'type'=>'submit',
      'label'=>'Guardar',
    ),
  ),
);