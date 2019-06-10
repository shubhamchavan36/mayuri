<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Enquiry;
use backend\models\Slideshow;
use backend\models\ManagePages;
use backend\models\Products;
use backend\models\ProductImages;
use backend\models\WhyUs;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['logout', 'signup'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['signup'],
    //                     'allow' => true,
    //                     'roles' => ['?'],
    //                 ],
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
      $slideshow = Slideshow::find()->all();
      $pages = ManagePages::find()->orderby(['id' => SORT_ASC])->all();
      $products = Products::find()->limit(6)->orderby(['id' => SORT_ASC])->all();
      // $why = WhyUs::find()->orderby(['id' => SORT_ASC])->all();
       
       $model = new Enquiry();
        if ($model->load(Yii::$app->request->post()) )
        {
             //print_r($model);exit;
        $model->save();

        
        Yii::$app->getSession()->setFlash('msg','Success! We will Contact With You Soon.');
        $model = new Enquiry();
        }
        return $this->render('index',['slideshow' => $slideshow,'pages' => $pages,'products'=>$products,'model'=>$model]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();

    }

    public function actionEnquiry()
    {
          // date_default_timezone_set('Asia/Kolkata');
      $model = new Enquiry();

        if($model->load(Yii::$app->request->post()))
        {
          // $model->enquired_on = date('Y-m-d H:i:m');
          $model->save();

      }
           return $this->render('Feedback',['model' => $model]);

    }

    public function actionEnq()
    {
        date_default_timezone_set('Asia/Kolkata');
       // print_r($_POST);exit;
       
       $model= new Enquiry();
        $model->name=$_POST['name'];
        $model->email=$_POST['email'];
        $model->message=$_POST['message'];
        $model->enquired_on = date('Y-m-d H:i:m');
      
       if($model->save())
       {
        // $msg = "Thank you. We will get back to you soon.";
        Yii::$app->session->setFlash('success', 'Thank you. We will get back to you soon.');

          return $this->redirect('index');
        }
        // return $this->redirect(array('index', $msg));
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    
    // public function actionContact()
    // {
        
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) 
    //     {
            
    //         $data = $_POST['ContactForm'];
            
    //         $to ="vschilkatowel@dataone.in";
				// 	$subject = "Enquiry from chilkatowel.com";

				// 	$message = '<!DOCTYPE html><html><body>';

				// 	$message .= '<body style="max-width:500px;margin:0 auto;"><header style="width:100%;"><div style="margin-left:0px;text-align:center;"></div></header>';
				// 	$message .= '<div style="background-color:#4184F3;text-align:center;color:#fff;height:50px;line-height:40px;"><h3>You have one enquiry request, details of enquiry are as below</h3></div>';
				// 	$message .= '<div style=""><br /><br />Name: <b>'.  $data['name'];
				// 	$message .= '</b><br /><br />Email: <b>'. $data['email'].'</b><br /><br />Contact:  <b>'. $data['subject'].'</b></div></br><br />Message:  <b>'. $data['body'].'</b></div>';
				// 	$message .= "</body></html>";

				// 	// Always set content-type when sending HTML email
				// 	$headers = "MIME-Version: 1.0" . "\r\n";
				// 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
    //         if (@mail($to,$subject,$message,$headers))
    //         {
    //             Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
    //         } else 
    //         {
    //             Yii::$app->session->setFlash('error', 'There was an error sending your message.');
    //         }

    //         return $this->refresh();
    //     } else {
    //         return $this->render('contact', [
    //             'model' => $model,
    //         ]);
    //     }
    // }


public function actionContactUs()
{


return $this->render('contact_us');

}

public function actionOurProducts()
{
     $products = Products::find()->limit(6)->orderby(['id' => SORT_ASC])->all();

  return $this->render('our_products',['products'=>$products]);
}

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAboutUs()
    {
         $pages = ManagePages::find()->orderby(['id' => SORT_ASC])->all();
        return $this->render('about_us',['pages'=>$pages]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionProducts()
    {
       $products = Products::find()->orderby(['id' => SORT_ASC])->all();    
        return $this->render('products',['products'=>$products]);
    } 

    // public function actionSocialActivities()
    // {
    //    $socialactivities = SocialActivities::find()->orderby(['id' => SORT_ASC])->all();    
    //     return $this->render('socialactivities',['socialactivities'=>$socialactivities]);
    // } 
    // public function actionWhyUs()
    // {   
    //     $socialactivities = WhyUs::find()->orderby(['id' => SORT_ASC])->all();    
    //      return $this->render('socialactivities',['socialactivities'=>$socialactivities]);
    // }
    
        // 
     //     public function actionCategory($id)
     // {
     //    $productdetail = Products::find()->where(['id' => explode("-",$id)[0]])->one();
     //     return $this->render('product_detail',['value'=>$productdetail]);
     // } 

       public function actionCategory($id)
     {
         $data=ProductImages::find()->where(['product_id'=>$id])->all();
         return $this->render('product_detail',['data'=>$data]);
     }

     public function actionFeedback()
     {
            date_default_timezone_set('Asia/Kolkata');
         $model = new Enquiry();

         if ($model->load(Yii::$app->request->post()) )
         {
             $model->enquired_on = date('Y-m-d H:i:m');
             // print_r($model);exit;
         $model->save();
         Yii::$app->getSession()->setFlash('msg','Success! We will Contact With You Soon.');
         $model = new Enquiry();
         return $this->render('Feedback',['model'=>$model]);
         }

         else {
             return $this->render('Feedback',['model'=>$model]);
            }

        

   }

    public function actionSlideshow()
    {
        $slideshow = Slideshow::find()->all();
        $data='';
        foreach ($slideshow as $key => $value) {
          $data[$key]['city'] = $value['title'];
          $data[$key]['country'] = $value['sub_title'];
          $data[$key]['img'] = Yii::getAlias('@web')."/backend/web/images/slideshow/".$value['image'];
            
        }

      

        return json_encode($data);
    }
}
