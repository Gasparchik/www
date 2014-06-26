<?php
$this->breadcrumbs=array(
	'Staticpages'=>array('index'),
	'Manage',
);

?>

<h1>Стат. страницы</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'staticpages-grid',
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
		'title',
		array(
            'name'=>'content',
            'type'=> 'raw',
            'value'=> function($data) {
                    return DLL::substrText($data->content);
                }
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}',
		),
	),
)); ?>
