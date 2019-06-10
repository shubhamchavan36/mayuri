<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())){
            $model->password_hash = Yii::$app->security->generatePasswordHash($_POST['User']['password_hash']);
            $model->auth_key = Yii::$app->security->generateRandomString();
            $model->created_at=date('Y-m-d');
            $model->save();
            Yii::$app->getSession()->setFlash('msg','User created Successfully');
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->password_hash = Yii::$app->security->generatePasswordHash($_POST['User']['password_hash']);
            $model->auth_key = Yii::$app->security->generateRandomString();
            $model->updated_at=date('Y-m-d');
            $model->save();
            Yii::$app->getSession()->setFlash('msg','User updated Successfully');
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionChangepassword()
    {

        $uname=Yii::$app->user->identity->username;
        $model = User::find()->where(['=','username',$uname])->one();
        // print_r($_POST);exit;
        if ($model->load(Yii::$app->request->post())) {
            $hash = Yii::$app->getSecurity()->generatePasswordHash($model->password_hash);
            $model->password_hash=$hash;
            if($model->save()){
                Yii::$app->getSession()->setFlash('msg','Password chenged Successfully');
                return $this->redirect(['site/index']);
            }
        }

        return $this->render('changepassword', [
                'model' => $model,
            ]);

    }

    public function actionCheckcurrentpass()
    {
      // print_r($_POST);exit;
        $uname=Yii::$app->user->identity->username;
        $model = User::find()->where(['=','username',$uname])->one();

        // $curr_pass=Yii::$app->getSecurity()->generatePasswordHash($_POST['data']);
        //echo Yii::$app->getSecurity()->validatePassword($_POST['data'], $model->password);exit;
        // print_r(Yii::$app->security->validatePassword($_POST['data'], $model->password_hash));exit;
        if (Yii::$app->getSecurity()->validatePassword($_POST['data'], $model->password_hash)) {
            echo 'true';
        }else{
            echo 'false';
        }
        // print_r($_POST['data']);
        // echo $uname;
        // return true;

    }

}
