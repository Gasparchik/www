<?php
$this->breadcrumbs=array(
	'Cities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cities','url'=>array('index')),
	array('label'=>'Create Cities','url'=>array('create')),
);

?>

<h1>Manage Cities</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'cities-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'city_name',
		'is_active',
		'create_user_id',
		'create_date',
		'update_user_id',
		/*
		'update_date',
		'deleted',
		'deleted_denied',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
