<?php
$this->breadcrumbs=array(
	'Moderators'=>array('index'),
	'Manage',
);

$this->menu=array(

	array('label'=>'Добавить модератора','url'=>array('create')),
);

?>

<h1>Модераторы</h1>

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
//		array('name' => 'is_super',
//        'filter' => array(0 => 'Нет', 1 => 'Да'),
//        'value' => function($data){
//                if($data->is_super == 1)
//                    return "Да";
//                else
//                    return "Нет";
//            }
//        ),
        array(
            'name'=>'login',
            'type'=>'raw',
            'value'=>function($data){
                    return ($data->is_super ? '<i data-toggle="tooltip" title="Супер-пользователь" class="icon-star"></i>&nbsp;' : '').$data->login;
                }
        ),
		'user_name',
		'email',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}',
            'buttons'=>array(
                'delete'=>array(
                    'label'=>'Удалить модератора',
                    'icon'=>'trash',
                    'visible'=>'!$data->deleted_denied',
                ),
                'update'=>array(
                    'label'=>'Редактировать модератора',
                    'icon'=>'pencil',
                    'visible'=>'$data->id!=1',
                ),
            ),
		),
	),
)); ?>
