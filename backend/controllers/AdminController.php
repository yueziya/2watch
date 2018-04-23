<?php

namespace backend\controllers;

use Yii;
 class AdminController extends BaseController
 {
 	public function actionNode()
 	{
 		return $this->render('admin_Competence');
 	}
 	
 	public function actionLogin(){
 		return $this->render('login');
 	}

 	public function actionAdmin(){
 		return $this->render('administrator_list');
 	}

 	public function actionAdminadd(){
 		return $this->render('add_administrator');
 	}

 	public function actionPersonal(){
 		return $this->render('Personal_info');
 	}
 }