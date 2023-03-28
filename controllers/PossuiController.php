<?php

namespace app\controllers;

use app\models\Possui;
use app\models\PossuiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PossuiController implements the CRUD actions for Possui model.
 */
class PossuiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Possui models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PossuiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Possui model.
     * @param int $id_curso Id Curso
     * @param int $id_videoaula Id Videoaula
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_curso, $id_videoaula)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_curso, $id_videoaula),
        ]);
    }

    /**
     * Creates a new Possui model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Possui();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Possui model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_curso Id Curso
     * @param int $id_videoaula Id Videoaula
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_curso, $id_videoaula)
    {
        $model = $this->findModel($id_curso, $id_videoaula);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Possui model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_curso Id Curso
     * @param int $id_videoaula Id Videoaula
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_curso, $id_videoaula)
    {
        $this->findModel($id_curso, $id_videoaula)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Possui model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_curso Id Curso
     * @param int $id_videoaula Id Videoaula
     * @return Possui the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_curso, $id_videoaula)
    {
        if (($model = Possui::findOne(['id_curso' => $id_curso, 'id_videoaula' => $id_videoaula])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
