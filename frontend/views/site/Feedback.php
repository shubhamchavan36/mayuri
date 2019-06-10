<?php 
use yii\helpers\Url;
use yii\widgets\ActiveForm; 
//use backend\models\ProductImages;
?>

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/bg-5.jpg);">
      <div class="overlay-main bg-white" style="opacity:0.3;"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <h1 class="text-black">Feedback</h1>
		  <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
        </div>
      </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
      <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-1">
          <li><a href="<?=Url::to(['site/index'])?>">Home</a></li>
          <li>Feedback</li>
        </ul>
      </div>
    </div>
<div class="section-full p-t80 p-b50">
                <div class="container">
                
                    <div class="section-content m-b50">
                        <div class="row">
                            <div class="wt-box col-md-8">
                                <h4 class="text-uppercase">Feedback Form </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                
                             <!--    <form class="cons-contact-form" method="post" action="http://thewebmax.com/constrot/form-handler.php"> -->
                                  <?php $form = ActiveForm::begin(); ?>
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                   <!--  <input name="Enquiry[name]" type="text" required class="form-control" placeholder="Name"> -->
                                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'form-control','placeholder' =>'name','autofocus' => true])->label(false) ?>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
<!--                                                     <input name="Enquiry[mobile_no]" type="text" class="form-control" required placeholder="Mobile No"> -->
                                                 <?= $form->field($model, 'mobile_no')->textInput(['maxlength' => true,'class'=>'form-control','placeholder' =>'Mobile Number','autofocus' => true])->label(false) ?>
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <!-- <input name="Enquiry[email]" type="text" class="form-control" required placeholder="Email" -->
                                                     <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class'=>'form-control','placeholder' =>'Email','autofocus' => true])->label(false) ?>
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                                   <!--  <textarea name="Enquiry[message]" rows="4" class="form-control " required placeholder="Message"></textarea> -->
                                                   <?= $form->field($model, 'message')->textarea(['rows' => '4','class'=>'form-control','placeholder' =>'Message','autofocus' => true])->label(false) ?>
                                                      
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button skew-icon-btn m-r15">Submit <i class="fa fa-angle-double-right"></i></button>
                                      <!--       <button name="Resat" type="reset" value="Reset"  class="site-button skew-icon-btn" >Reset <i class="fa fa-angle-double-right"></i></button> -->
                                        </div>
        
                                    </div>

                        	<!-- 	</form> -->
                           <?php ActiveForm::end(); ?> 
                        
                            </div>
                            </div>
							
							<div class="col-md-4">
								<img src="images/abt_img.png" alt="" class="img-responsive">
							</div>
                            
                        
                    </div>
                </div>
           </div>

  </div>
  <!-- CONTENT END -->
  <!-- FOOTER START -->
 
