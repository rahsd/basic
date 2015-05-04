<?php

namespace app\controllers;
use yii\base\Application;
use \yii\web\Controller;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        /*return 'Our CRM';*/
        return $this->render("homepage");
    }
    public function actionDocs(){
        return $this->render("docindex.md");
    }
    public function actionPublish(){
        list($dir, $url) = Yii::$app->assetManager->publish("@yii/assets/yii.activeForm.js");
        return json_encode(compact('dir','url'));
    }
}