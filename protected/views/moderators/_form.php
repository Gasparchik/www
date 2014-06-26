<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'moderators-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля помеченные <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'is_super',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'deleted',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'deleted_denied',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
