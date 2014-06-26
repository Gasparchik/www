<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

?>

<h1>Пользователи</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-grid',
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
		'email',
		'phone',
		array(
            'name' => 'request_type',
            'value' => function($data){
                    if($data->request_type == 'quest_free')
                        return "Бронь";
                    else
                        return "Оценка";
                },
            'filter' => array('quest_free'=>'Бронь','quest_rating'=>'Оценка')
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}',
		),
	),
)); ?>
