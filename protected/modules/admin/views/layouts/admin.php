<?php /* @var $this Controller */
//$this->redirect('http://startberry.ru')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link href="/images/rq-favic.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />


    <?php

    //Yii::app()->clientScript->registerScriptFile('/js/jquery-1.10.2.js');
    Yii::app()->clientScript->registerScriptFile('/js/jquery.form.js');

    Yii::app()->clientScript->registerScriptFile('/js/upload.js');
    Yii::app()->clientScript->registerScriptFile('/js/jquery-ui-1.10.4.custom.min.js');
    Yii::app()->clientScript->registerScriptFile('/js/javascript.js');

    ?>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <!--  <link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/main.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>


<div class="container" id="page">

    <div id="header">
    </div><!-- header -->
    <?php
    if(!Yii::app()->getModule('admin')->user->isGuest){
        $user=Moderators::model()->findByPk(Yii::app()->getModule('admin')->user->id);
        $user=($user)?$user->is_super:false;
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'type'=>'inverse', // null or 'inverse'
            'brand'=>Yii::app()->name,
            'brandUrl'=>'/',
            'collapse'=>false, // requires bootstrap-responsive.css
            'items'=>array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('style'=>'width:auto'),
                    'items'=>array(

                        // array('label'=>'Заявки', 'url'=>array('/admin/tenders'),),
                        // array('label'=>'Отклики', 'url'=>array('/admin/tenderRelations'),),
                        // array('label'=>'Агентства', 'url'=>array('/admin/Agencies'),),
                        array('label'=>'Пользователи', 'url'=>array('/admin/users'),),
                        array('label'=>'Бронь', 'url'=>array('/admin/questsfree'),),
//                        array('label'=>'Проекты', 'url'=>array('/admin/projects'),),
//                        array('label'=>'Реклама', 'url'=>array('/admin/advertising'),),
//                        array('label'=>'Пользователи', 'url'=>array('/admin/users'),),
//                        array('label'=>'Оплаты', 'url'=>array('/admin/payments'),),
                        array('label'=>'Справочники',  'url'=>'#','items'=>array(
                            array('label'=>'Города', 'url'=>array('/admin/cities'),),
                            array('label'=>'Модераторы', 'url'=>array('/admin/moderators'),),
                            array('label'=>'Стат. страницы', 'url'=>array('/admin/staticpages'),),
//                            array('label'=>'Список e-mail', 'url'=>array('/admin/email/update'),),
//                            array('label'=>'Сфера деятельности', 'url'=>array('/admin/scopes'),),
//                            array('label'=>'Кого вы желаете найти', 'url'=>array('/admin/searchPeople'),),
//                            array('label'=>'Организационно-правовая форма', 'url'=>array('/admin/organisationForms'),),
//                            array('label'=>'Статические страницы', 'url'=>array('/admin/staticPages'),),
//                            array('label'=>'Баннер на главной', 'url'=>array('/admin/banners'),),
//                            array('label'=>'В нашей команде на главной', 'url'=>array('/admin/inMyTeam'),),
//                            array('label'=>'Почему ты ещё ждёшь на главной', 'url'=>array('/admin/whyWaiting'),),
//                            array('label'=>'Подсказки', 'url'=>array('/admin/helpTooltip'),),
                            //     array('label'=>'Типы туров', 'url'=>array('/admin/tourTypes'),),
                            //     array('label'=>'Стат-страницы', 'url'=>array('/admin/staticPages'),),
                            //      array('label'=>'За чем летим?', 'url'=>array('/admin/reason'),),
                            //     array('label'=>'Города', 'url'=>array('/admin/city'),),
                            //     array('label'=>'Страны', 'url'=>array('/admin/countries'),),
//                            ($user)?
//                                array('label'=>'Модераторы', 'url'=>array('/admin/moderators'),):null,
                        )
                        ),
                    ),
                ),
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items'=>array(

                        array('label'=>Yii::app()->getModule('admin')->user->username, 'icon'=>'user','url'=>'#', 'items'=>array(
                            array('label'=>'Выйти', 'url'=>'/admin/login/logout'),
                        )),
                    ),
                ),
            ),
        )); }?>
    <div class="well">
        <?php echo $content; ?>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    <div class="well" style="text-align: center">

    </div><!-- footer -->

</div><!-- page -->

</body>
</html>
