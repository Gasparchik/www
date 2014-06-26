<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'questsfree-form',
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="help-block">Поля помеченные <span class="required">*</span> обязательны к заполнению.</p>-->

	<?php echo $form->errorSummary($model); ?>

    <table width="700px" style="position: absolute; margin-left: -200px; margin-top: -15px;">
        <tr>
            <td width="25%" style="text-align:right;">Квест:</td>
            <td  valign="top"><?php echo $model->quest_id ?></td>
        </tr>
        <tr>
            <td width="25%" style="text-align:right;">Пользователь:</td>
            <td  valign="top"><?php echo $model->author->email ?></td>
        </tr>
        <tr>
            <td width="25%" style="text-align:right;">Дата начала:</td>
            <td  valign="top"><?php echo date('d.m.Y',strtotime($model->date_begin)) ?></td>
        </tr>
        <tr>
            <td width="25%" style="text-align:right;">Дата завершения:</td>
            <td  valign="top"><?php echo date('d.m.Y',strtotime($model->date_end)) ?></td>
        </tr>
        <tr>
            <td width="25%" style="text-align:right;">Время:</td>
            <td  valign="top"><?php echo $model->time_begin .' - '. $model->time_end?> минут</td>
        </tr>
    </table>

<!--	<div class="form-actions">-->
<!--		--><?php //$this->widget('bootstrap.widgets.TbButton', array(
//			'buttonType'=>'submit',
//			'type'=>'primary',
//			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
//		)); ?>
<!--	</div>-->

<?php $this->endWidget(); ?>
