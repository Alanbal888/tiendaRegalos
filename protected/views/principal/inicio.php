<input id="tab_actual" type="text">

<div id="tabs">
<dl class="accordion">

        <dt class="accordion__title">Ventas</dt>
        <dd class="accordion__content">
                <div class="inner-content">
                <?php $this->renderPartial('tabs/ventas'); ?>
                </div>
        </dd>

        <dt class="accordion__title">Usuarios</dt>
        <dd class="accordion__content">
        	<div class="inner-content">
        	<?php $this->renderPartial('tabs/usuarios'); ?>
        	</div>
	</dd>

        <dt class="accordion__title">Almacen</dt>
        <dd class="accordion__content">
        	<div class="inner-content">
        	<?php $this->renderPartial('tabs/almacen'); ?>
			</div>
	</dd>

        <dt class="accordion__title">Apartados</dt>
        <dd class="accordion__content">
        	<div class="inner-content">
        	<?php $this->renderPartial('tabs/apartados'); ?>
			</div>
		</dd>

        <dt class="accordion__title">Reportes</dt>
        <dd class="accordion__content">
        	<div class="inner-content">
        	<?php $this->renderPartial('tabs/reportes'); ?>
			</div>
		</dd>         
</dl>
</div>


