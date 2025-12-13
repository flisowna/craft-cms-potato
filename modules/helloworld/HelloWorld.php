<?php 

namespace modules\helloworld;

use Craft; 
use craft\web\View;
use yii\base\Module;

class HelloWorld extends Module {
    public function init(): void
    {
        parent::init();

        // Controller Namespace setzen
        $this->controllerNamespace = 'modules\\helloworld\\controllers';

        // Template-Pfad setzen, damit Craft die Templates findet
        $this->setBasePath(__DIR__);
        $this->setViewPath(__DIR__ . '/templates');

        // Einfaches Log beim Laden
        Craft::info(
            'HelloWorld Modul wurde geladen 🚀',
            __METHOD__
        );
    }
}

?>