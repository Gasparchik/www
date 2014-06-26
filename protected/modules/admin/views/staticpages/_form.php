<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'staticpages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля помеченные <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

<?php  $this->widget(
    'bootstrap.widgets.TbCKEditor',
    array(
        'model'=>$model,
        'attribute'=>'content',
        'editorOptions' => array(
            'height'=>'650',
            'forcePasteAsPlainText'=>'js:true',
            'filebrowserImageUploadUrl'=>'/files/uploadFromCK',
            'toolbar'=>'js:[["Bold","Italic"],["BulletedList","Link"],["Image","Blockquote"],["Format"]]',//
            'format_tags'=>'h3;h4;h5;h6',
            'removeDialogTabs'=>"image:link;image:advanced",
        )
    )
); ?>

<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
