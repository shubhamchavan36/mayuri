<?php

namespace backend\controllers;

use Yii;
use backend\models\Products;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\ProductImages;
/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Products::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
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
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        $modelimages=new ProductImages(); 


          if ($model->load(Yii::$app->request->post())) 
        {
          //$model->status=1;
          //$name = count($_FILES['Eventimages']['name']['image']);
          // print_r($model);exit;
          if($model->save())
             {

            $nameC = count($_FILES['ProductImages']['name']['image']);
            //print_r($nameC);exit;
            $image_name='';
            for($i=0; $i<$nameC; $i++)
            {

              $model1 = new ProductImages();

              $name       = $_FILES['ProductImages']['name']['image'][$i];
                //print_r($name);exit;
              $filename   = pathinfo($name, PATHINFO_FILENAME);
              $ext        = pathinfo($name, PATHINFO_EXTENSION);
              // print_r($name);exit;
               $newName        = "ProductImages-".date("dmys")."_".$i.".".$ext;
               
              if($i == 0)
              {
                $imagename=UploadedFile::getInstances($model1,'image');
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images' );
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/productimages/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images/productimages');
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/productimages/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images/productimages/');
              }
              // echo "<pre>";
              // print_r($imagename);exit;
              if(!empty($imagename[$i]))
              {
                   $imagename[$i]->saveAs(Yii::getAlias('@webroot') . '/images/productimages/'.$newName);
                   //print_r($imagename[$i]);exit;
                   $model1->image=$newName;
                   //print_r($model1->image);exit;
                   $model1->product_id=$model->id;
                   //print_r($model1);exit;
                   $model1->save(false);
                   //print_r($model1);exit;
                  //  $img_name=(empty($img_name)?'':$img_name.',').$newName;
              }

            }//for loop
          }//model save

          Yii::$app->getSession()->setFlash('msg','Record successfully added.');
          return $this->redirect(['index']);
            }
             else {

        return $this->render('create', [
            'model' => $model,'modelimages'=>$modelimages,
        ]);
      }


    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model1=ProductImages::find()->where(['product_id'=>$id])->all();
        $modelimages=new ProductImages();

       if ($model->load(Yii::$app->request->post())) 
        {
          //$name = count($_FILES['Eventimages']['name']['image']);
          // print_r($model);exit;
          if($model->save())
             {

            $nameC = count($_FILES['ProductImages']['name']['image']);
            //print_r($nameC);exit;
            $image_name='';
            for($i=0; $i<$nameC; $i++)
            {

              $model1 = new ProductImages();

              $name       = $_FILES['ProductImages']['name']['image'][$i];
                //print_r($name);exit;
              $filename   = pathinfo($name, PATHINFO_FILENAME);
              $ext        = pathinfo($name, PATHINFO_EXTENSION);
              // print_r($name);exit;
              $newName        = "ProductImages-".date("dmys")."_".$i.".".$ext;

              if($i == 0)
              {
                $imagename=UploadedFile::getInstances($model1,'image');
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images' );
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/productimages/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images/productimages');
              }

              if (!is_dir(Yii::getAlias('@webroot') . '/images/productimages/')) 
              {
                  mkdir(Yii::getAlias('@webroot') . '/images/productimages/');
              }
              // echo "<pre>";
              // print_r($imagename);exit;
              if(!empty($imagename[$i]))
              {
                   $imagename[$i]->saveAs(Yii::getAlias('@webroot') . '/images/productimages/'.$newName);
                   //print_r($imagename[$i]);exit;
                   $model1->image=$newName;
                   //print_r($model1->image);exit;
                   $model1->product_id=$model->id;
                   //print_r($model1);exit;
                   $model1->save(false);
                   //print_r($model1);exit;
                  //  $img_name=(empty($img_name)?'':$img_name.',').$newName;
              }

            }//for loop
            }//model save

          Yii::$app->getSession()->setFlash('msg','Record successfully updated.');
          return $this->redirect(['index']);

        } else {

        return $this->render('update', [
              'model' => $model, 'modelimages' => $modelimages, 'model1' => $model1,
          ]);
      }

    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

     public function actionDeleteImage()
    {
        //print_r($_REQUEST);exit;
        //$id=$_REQUEST['data'];
        //print_r($id);exit;
        //$model=EventsImages::delete($id);
        //$model = EventsImages::find($id);
        //$model=EventsImages :: find()->where(['id'=>$id])->one();
        //$model1 = $this->findModel($model->event_id);
        //print_r($model);exit;
        //unlink(Yii::getAlias('@web') . '/images/events/'.$model1->title. '/' .$model->image);
        //$model->deleteAll();

        $model = ProductImages::find()->where(['id' => $_POST['data']])->one();
        if(!empty($model)){
          $model->deleteAll(['id' => $_POST['data']]);
        }
  
          echo true;
          // return $this->redirect(['index']);
        
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
