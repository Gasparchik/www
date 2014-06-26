<?php
$this->breadcrumbs=array(
	'Cities'=>array('index'),
	'Manage',
);

$this->menu=array(

	array('label'=>'Добавить город','url'=>array('create')),
);

?>

<h1>Города</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'cities-grid',
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
		'city_name',
		array('name' => 'is_active',
              'value' => function($data){
            if($data->is_active == 1)
                return "Используется";
            else
                return "Не используется";
        },
        'filter'=>array(1=>'Используется',0=>'Не используется'),
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}',
		),
	),
)); ?>
