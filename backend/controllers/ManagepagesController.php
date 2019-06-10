<?php

namespace backend\controllers;

use Yii;
use backend\models\ManagePages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ManagepagesController implements the CRUD actions for managepages model.
 */
class ManagepagesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($action){
      if (Yii::$app->user->isGuest) {
        return $this->redirect(['site/login'])->send();
      }
      return true;
    }

    /**
     * Lists all managepages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => managepages::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single managepages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new managepages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new managepages();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_by=Yii::$app->user->identity->id;
            $model->created_on=date('Y-m-d');
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing managepages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          $cpt = count($_FILES['ManagePages']['name']['image']);

          $name       = $_FILES['ManagePages']['name']['image'];
          $filename   = pathinfo($name, PATHINFO_FILENAME);
          $ext        = pathinfo($name, PATHINFO_EXTENSION);
          // print_r($name);exit;
          $newName        = "about-".date("dmyhs").".".$ext;

          // if($i == 0){
          $imagename=UploadedFile::getInstance($model,'image');
          // }


          if (!is_dir(Yii::getAlias('@webroot') . '/images/')) {
              mkdir(Yii::getAlias('@webroot') . '/images' );
          }

          if (!is_dir(Yii::getAlias('@webroot') . '/images/about/')) {
              mkdir(Yii::getAlias('@webroot') . '/images/about');
          }

          // print_r($imagename);exit;
          if(!empty($imagename))
          {
               $imagename->saveAs(Yii::getAlias('@webroot') . '/images/about/'.$newName);
               $model->image=$newName;
              //  $img_name=(empty($img_name)?'':$img_name.',').$newName;
          }
          $model->created_by=Yii::$app->user->identity->id;
          $model->created_on=date('Y-m-d');

          $model->save();
          Yii::$app->getSession()->setFlash('msg','Record successfully saved.');
          return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing managepages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the managepages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return managepages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = managepages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
