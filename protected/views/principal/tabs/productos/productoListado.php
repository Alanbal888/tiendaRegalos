<?php
 $this->widget('zii.widgets.grid.CGridView', array(
  'dataProvider'=>$profs,
  'columns'=>array(
    'idProfesor:number:Id',
    'cedProfesor:text:Cédula',
    'nomProf:text:Nombre',
    'tituloProf:text:Título',
    array('class'=>'CButtonColumn','header'=>'Operaciones'
    ),
  ),
 ));