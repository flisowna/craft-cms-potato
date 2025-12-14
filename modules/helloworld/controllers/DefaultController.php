<?php
namespace modules\helloworld\controllers;

use craft\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{
    protected int|bool|array $allowAnonymous = true;

    public function actionIndex()
    {
        return $this->render(
            'index',
            [
                'message' => 'Hello World aus dem Craft Modul 👋',
            ]
        );
    }
}
