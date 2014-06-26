<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

    <table width="700px" style="position: absolute; margin-left: -200px;">
    <tr>
        <td width="25%" style="text-align:right;">E-mail:</td>
        <td  valign="top"><?php echo $model->email ?></td>
    </tr>
    <tr>
        <td width="25%" style="text-align:right;">Телефон:</td>
        <td  valign="top"><?php echo $model->phone ?></td>
    </tr>
    <tr>
        <td width="25%" style="text-align:right;">Тип запроса:</td>
        <td  valign="top"><?php if($model->request_type=='quest_free') echo "Бронь"; else echo "Оценка";?></td>
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
