<?php
$this->breadcrumbs=array(
	'Questsfrees'=>array('index'),
	'Manage',
);

?>

<h1>Бронь</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'questsfree-grid',
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
		'quest_id',
		array(
            'name' => 'user_id',
            'value' => function($data){
                    return $data->author->email;
                }
        ),
        array(
            'name'=>'date_begin',
            'value'=>function($data){
                    if($data->date_begin and $data->date_begin!='0000-00-00 00:00:00')
                        return date('d.m.Y',strtotime($data->date_begin));
                    else
                        return '---';
                },
            'headerHtmlOptions'=>array('style'=>'width:70px'),
        ),
        array(
            'name'=>'date_end',
            'value'=>function($data){
                    if($data->date_end and $data->date_end!='0000-00-00 00:00:00')
                        return date('d.m.Y',strtotime($data->date_end));
                    else
                        return '---';
                },
            'headerHtmlOptions'=>array('style'=>'width:70px'),
        ),
        array('header' => 'Временные рамки',
              'value' => function($data){
                      return $data->time_begin .' - '. $data->time_end .' минут';
                  }
        ),
        array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}',
		),
	),
)); ?>
