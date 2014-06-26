<?php
$this->breadcrumbs=array(
	'Cities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'К списку городов','url'=>array('index')),

);
?>

<h1>Добавление города</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>