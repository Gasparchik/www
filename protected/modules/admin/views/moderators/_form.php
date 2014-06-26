<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'moderators-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля помеченные <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->CheckBoxRow($model,'is_super'); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>25)); ?>

    <?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'user_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>25)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
