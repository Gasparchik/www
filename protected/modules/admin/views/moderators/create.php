<?php
$this->breadcrumbs=array(
	'Moderators'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'К списку модераторов','url'=>array('index')),

);
?>

<h1>Добавление модератора</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>