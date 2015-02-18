<?php
class ActualizarProductoForm extends CFormModel {
 public $id_producto;
 public $nombre_p;
 public $precio_unitario;
 public $unidades_existencia;
 public function rules() {
   return array(
     array('id_producto','required'),
     array('nombre_p','required'),
     array('precio_unitario','required'),
     array('unidades_existencia','required'),
   );
 }
}