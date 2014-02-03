<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author aafetsrom
 */
class WebUser extends CWebUser{
   
    private $model;


    public function loadModel()
    {
        $this->model = AccountUsers::model()->find('username = :uname',array('uname'=>  Yii::app()->user->name));
    }
    
    public function getAccount_Id()
    {
        $this->loadModel();
        return $this->model->account->id;
    }
    
    public function getFirst_Name()
    {
        $this->loadModel();
        return $this->model->first_name;
    }
    public function getLast_Name()
    {
        $this->loadModel();
        return $this->model->last_name;
    }
    public function getFull_Name()
    {
        return $this->getFirst_Name().' '.$this->getLast_Name();
    }
    public function getRole()
    {
        $this->loadModel();
        return $this->model->role;
    }
    
}
