<?php 

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class IndexController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;

   	public function actionIndex()
   	{
   		// if (!Yii::$app->request->isPost){
     //        return $this->render();
     //    }else{
     //        $username = Yii::$app->request->post('username');
     //        $password = Yii::$app->request->post('password');
     //        $data=Yii::$app->db->createCommand("SELECT * FROM `user` WHERE username = '$username' AND password='$password'")->queryOne();
     //        $data=[];
     //        if ($data){
     //            $_SESSION=Yii::$app->session;
     //            $_SESSION['user_id']=$data['user_id'];
     //            $_SESSION['username']=$data['username'];
     //            $data=[
     //                'code'=>1.
     //            ];
     //        }else{
     //            $data=[
     //                'code'=>2.
     //            ];
     //        }
     //        return json_encode($data);
     //    }
   		return $this->render('index');
   	}

}
