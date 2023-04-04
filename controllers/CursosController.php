<?php


namespace app\controllers;

use app\models\CursoSearch;

class CursosController extends \yii\web\Controller
{
   public function actionIndex()
   {	
       
       $this->layout = 'home';

   	   $searchModel = new CursoSearch();
       $dataProvider = $searchModel->search($this->request->queryParams);

       return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

   }


}