<?php


namespace app\controllers;

use app\models\InstrumentoSearch;

class CursosController extends \yii\web\Controller
{
   public function actionIndex()
   {	
       
       $this->layout = 'home';

   	   $searchModel = new InstrumentoSearch();
       $dataProvider = $searchModel->search($this->request->queryParams);

       return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
   }


}