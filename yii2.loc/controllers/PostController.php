<?php
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of PostController
 *
 * @author dima
 */
class PostController extends AppController{
    public function actionIndex() {
    $hello = 'Hello World';
        return $this->render('index', ['var' => $hello]) ;
    }
    //put your code here
}
