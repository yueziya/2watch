<?php 

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class RegController extends Controller
{
	public $enableCsrfValidation = false;
   	public $layout = false;

   	public function actionReg()
   	{
   		if (!Yii::$app->request->isPost){
            return $this->render('reg');
        }else{
            $username = Yii::$app->request->post('username');

            $password = Yii::$app->request->post('password');
            $qrpassword = Yii::$app->request->post('qrpassword');
            $email = Yii::$app->request->post('email');
            $tel = Yii::$app->request->post('tel');
            $add_time = date('Y-m-d:H:i:s');
            $res=Yii::$app->db->createCommand()->insert('user', [
												    'username' => $username,
												    'password' => $password,
												    'qrpassword' => $qrpassword,
												    'email' => $email,
												    'tel' => $tel,
												    'add_time' => $add_time,
												])->execute();
           
   		if ($res){
                $session=Yii::$app->session;
                $session->open();

                $_SESSION['user_id']=Yii::$app->db->getLastInsertId();

                $_SESSION['username']=$username;
                
                $arr=[
                    'code'=>1.
                ];
            }else{
                $arr=[
                    'code'=>2.
                ];
            }
            return json_encode($res);
        }
   		return $this->render('reg');

   	}

}