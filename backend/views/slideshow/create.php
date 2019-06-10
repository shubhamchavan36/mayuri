<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\slideshow */

$this->title = 'Create Slideshow';
$this->params['breadcrumbs'][] = ['label' => 'Slideshows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>Create Slideshow</header>
            </div>
            <div class="card-body floating-label">

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
			</div>
		</div>
	</div>
</div>
