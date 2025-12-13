<?php
namespace modules\helloworld\controllers;

use craft\web\Controller;
use craft\web\Response;

class DefaultController extends Controller
{
    protected int|bool|array $allowAnonymous = true;

    public function actionIndex(): Response
    {
        // Verwende den Modul-Namen als Präfix für das Template
        return $this->renderTemplate(
            'hello-world/index',
            [
                'message' => 'Hello World aus dem Craft Modul 👋',
            ]
        );
    }
}
