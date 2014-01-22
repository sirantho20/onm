<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->widget('bootstrap.widgets.TbNavbar', array(
'brandLabel' => '',
'collapse' => true,
'display' => TbHtml::NAVBAR_DISPLAY_FIXEDTOP,
'items' => array(
    array(
    'class' => 'bootstrap.widgets.TbNav',
    'items' => array(
                    array('label' => 'Dashboard', 'url' => '#'),
                    array('label' => 'Reports', 'url' => Yii::app()->createUrl('mcmonthlyreport/create') ),
                    array('label' => 'Issues', 'url' => Yii::app()->createUrl('siteissues/admin') ),
                    array('label' => 'Field Supervisor', 'url' => '#'),
                    ),
            ),

 ),
));