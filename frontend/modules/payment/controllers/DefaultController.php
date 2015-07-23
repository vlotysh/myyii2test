<?php

namespace frontend\modules\payment\controllers;

use yii\web\Controller;
use frontend\modules\payment\models\Post;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $post = new Post();
                exit('payment '.__FILE__);
        return $this->render('index');
    }
}
