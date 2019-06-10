<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\slideshow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slideshow-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data'],'id'=>'slideshow-form']); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
	    	<?= $form->field($model, 'image')->fileInput(['accept' => 'image/*']) ?>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
			<?php if(!$model->isNewRecord){?>
				<img src="<?= Yii::getAlias('@web'); ?>/images/slideshow/<?= $model['image']?>" alt="" class="img-responsive" style="height: 75px !important;">
			<?php } ?>
		</div>
	</div>
    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
