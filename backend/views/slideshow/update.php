<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\slideshow */

$this->title = 'Update Slideshow: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Slideshows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>Update Slideshow</header>
            </div>
            <div class="card-body floating-label">

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
			</div>
		</div>
	</div>
</div>
