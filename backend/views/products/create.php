<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Add Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header><?= Html::encode($this->title) ?></header>
            </div>
            <div class="card-body floating-label">

			    <?= $this->render('_form', [
			        'model' => $model,'modelimages'=>$modelimages,
			    ]) ?>
			</div>
		</div>
	</div>
</div>
