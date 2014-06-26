<?php
$this->breadcrumbs=array(
	'Moderators'=>array('index'),
	'Manage',
);

$this->menu=array(

	array('label'=>'Добавить Moderators','url'=>array('create')),
);

?>

<h1>Moderators</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'moderators-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'type'=>'striped',
	'columns'=>array(
		array(
        'header'=>'#',
        'value'=>function($data, $row, $column) {
                /** @var $grid CGridView */
                $grid = $column->grid;
                /** @var $pages CPagination */
                $pages = $grid->dataProvider->getPagination();

                $start = ($grid->enablePagination === false)
                    ? 0
                    : $pages->getCurrentPage(false) * $pages->getPageSize();

                return $start + $row + 1;
            },
        'headerHtmlOptions'=>array('style'=>'width:30px'),
    ),
		'id',
		'is_super',
		'login',
		'password',
		'email',
		'create_user_id',
		/*
		'create_date',
		'update_user_id',
		'update_date',
		'deleted',
		'deleted_denied',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}',
		),
	),
)); ?>
