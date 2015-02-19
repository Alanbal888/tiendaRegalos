<?php
return array(
  'title'=>'Datos de productos',
  'description'=>'Ingrese la siguiente información:',
  'elements'=>array(

    'nombre_p'=>array(
      'type'=>'text',
      'maxlength'=>40,
      'label'=>'Producto'
    ),
    'precio_unitario'=>array(
      'type'=>'text',
      'maxlength'=>40,
      'label'=>'Precio'
    ),
    'unidades_existencia'=>array(
     'type'=>'text',
      'maxlength'=>40,
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