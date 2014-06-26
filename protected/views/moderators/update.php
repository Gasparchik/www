<?php
$this->breadcrumbs=array(
	'Moderators'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'К списку Moderators','url'=>array('index')),
	array('label'=>'Добавить Moderators','url'=>array('create')),
	array('label'=>'Удалить Moderators','url'=>array('delete','id'=>$model->id)),
);
?>

<h1>Редактирование Moderators <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>