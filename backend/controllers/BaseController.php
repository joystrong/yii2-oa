<?php
/**
 * Yii2-OA
 * User: shiqiang
 * Date: 2016/9/21
 * Time: 22:23
 */

namespace backend\controllers;


use yii\web\Controller;
use Yii;
class BaseController extends Controller {

    public function init(){
        if(Yii::$app->user->isGuest)
        {
            return Yii::$app->response->redirect('/site/login');
        }
        //exit('123');
    }
}