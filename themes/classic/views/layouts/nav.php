<?php

Yii::app()->clientScript->registerScript('search', "

  //  var url = $(location).attr('href');
    
  //alert($('a[href=url]').parent().find('a').attr('href'));



");

?>
<div class="navbar">
    <div class="navbar-inner">
    
     <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
<div class="nav-collapse collapse">
    <ul class="nav">
    <li><a href="#">Dashboard</a></li>
    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('mcmonthlyreport/admin') ?>">Reports</a></li>
    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('siteissues/admin') ?>">Site Issues</a></li>
    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('fieldsupervisor') ?>">Supervisor</a></li>
    </ul>
    
    <ul class="nav">
         
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('accountusers/admin') ?>">Users</a></li>
            </ul>
        </li>
        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('contractoraccounts/admin') ?>">Sys</a></li>
    </ul>
    <ul class="nav pull-right">
        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/logout'); ?>"><?php if(!Yii::app()->user->isGuest){ echo Yii::app()->user->first_name.' - logout';} ?></a></li>
    </ul>
</div>
    </div>
    </div>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$this->widget('bootstrap.widgets.TbNavbar', array(
//'brandLabel' => '',
//'collapse' => true,
//'display' => TbHtml::NAVBAR_DISPLAY_FIXEDTOP,
//'items' => array(
//                array(
//                'class' => 'bootstrap.widgets.TbNav',
//                'items' => array(
//                        array('label' => 'Dashboard', 'url' => '#'),
//                        array('label' => 'Reports', 'url' => Yii::app()->createUrl('mcmonthlyreport/create') ),
//                        array('label' => 'Issues', 'url' => Yii::app()->createUrl('siteissues/admin') ),
//                        array('label' => 'Field Supervisor', 'url' => '#'),
//                        array(
//                            'htmlOptions'=>array('class'=>'pull-right'),
//                            'class'=>'',
//                            'label'=>'Administrator',
//                            'items'=>array(
//                                array('label'=>'Users', 'url'=>  Yii::app()->createAbsoluteUrl('accountusers/admin')),
//                            )
//                        ),
//                        ),
//
//                ),
// ),
//    
//));