<?php
$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$what = ($model->update_date)?'Редактировал':'Добавил';
$when_cr = Yii::app()->dateFormatter->format('d MMMM yyyy в HH:mm:ss',$model->create_date);
$who_cr = Moderators::model()->findByPk($model->create_user_id)->user_name;
$when_up = ($model->update_date)?Yii::app()->dateFormatter->format('d MMMM yyyy в HH:mm:ss',$model->update_date):'';
$who_up = ($model->update_date)?Moderators::model()->findByPk($model->update_user_id)->user_name:'';

$this->menu=array(
    array('label'=>'К списку городов','url'=>array('index')),
    array('label'=>'Удалить город','url'=>array('delete','id'=>$model->id)),
    array('label'=>'Добавил'),
    array('label'=>$who_cr.' '.$when_cr,'icon'=>'user', 'url'=>'')
);
if($model->update_date){
    $this->menu = array_merge($this->menu,array(array('label'=>'Редактировал'),array('label'=>$who_up.' '.$when_up,'icon'=>'user', 'url'=>'')));
}
?>

<h1>Редактирование города <?php echo $model->city_name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>