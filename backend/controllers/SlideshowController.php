<?php

namespace backend\controllers;

use Yii;
use backend\models\Slideshow;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * SlideshowController implements the CRUD actions for slideshow model.
 */
class SlideshowController extends Controller
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
     * Lists all slideshow models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => slideshow::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single slideshow model.
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
     * Creates a new slideshow model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new slideshow();

        if ($model->load(Yii::$app->request->post()) ){

            $name       = $_FILES['Slideshow']['name']['image'];
            if(empty($name)){
              Yii::$app->getSession()->setFlash('msg','Please select Image');
              return $this->render('create', [
                  'model' => $model,
              ]);
            }
            $filename   = pathinfo($name, PATHINFO_FILENAME);
            $ext        = pathinfo($name, PATHINFO_EXTENSION);

            $newName        = "slide-".date("dmys").".".$ext;

            $imagename=UploadedFile::getInstance($model,'image');

            $fname="slideshow".date('dmyhis');

            if (!is_dir(Yii::getAlias('@webroot') . '/images/')) {
                mkdir(Yii::getAlias('@webroot') . '/images' );
            }

            if (!is_dir(Yii::getAlias('@webroot') . '/images/slideshow/')) {
                mkdir(Yii::getAlias('@webroot') . '/images/slideshow');
            }


            if(!empty($imagename))
            {
                 $imagename->saveAs(Yii::getAlias('@webroot') . '/images/slideshow/'.$newName);
                 $model->image=$newName;
            }

            $model->created_by=Yii::$app->user->identity->id;
            $model->created_on=date('Y-m-d');
            $model->save();
            Yii::$app->getSession()->setFlash('msg','Record successfully saved.');
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing slideshow model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $name       = $_FILES['Slideshow']['name']['image'];
            $filename   = pathinfo($name, PATHINFO_FILENAME);
            $ext        = pathinfo($name, PATHINFO_EXTENSION);

            $newName        = "slide-".date("dmys").".".$ext;

            $imagename=UploadedFile::getInstance($model,'image');

            $fname="slideshow".date('dmyhis');

            if (!is_dir(Yii::getAlias('@webroot') . '/images/')) {
                mkdir(Yii::getAlias('@webroot') . '/images' );
            }

            if (!is_dir(Yii::getAlias('@webroot') . '/images/slideshow/')) {
                mkdir(Yii::getAlias('@webroot') . '/images/slideshow');
            }


            if(!empty($imagename))
            {
                 $imagename->saveAs(Yii::getAlias('@webroot') . '/images/slideshow/'.$newName);
                 $model->image=$newName;
            }else{
              $oldmodel=Slideshow::findOne(['id'=>$id]);
              $model->image=$oldmodel->image;
            }

            $model->updated_by=Yii::$app->user->identity->id;
            $model->updated_on=date('Y-m-d');

            $model->save();
            Yii::$app->getSession()->setFlash('msg','Record successfully updated.');
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing slideshow model.
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
     * Finds the slideshow model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return slideshow the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = slideshow::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
