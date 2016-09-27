<?php namespace backend\modules\rbac;
use yii\base\Module;

/**
 * Yii2-OA.
 * User: shiqiang.
 * Date: 2016/9/21
 * Time: 21:20
 * 权限管理模块
 */
class RbacModule extends Module
{
    public $controllerNamespace = 'backend\modules\controllers';

    public function init()
    {
        parent::init();
    }
}