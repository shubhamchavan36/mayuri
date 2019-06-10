<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\managepages */

$this->title = 'Add Managepage';
$this->params['breadcrumbs'][] = ['label' => 'Managepages', 'url' => ['index']];
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
			        'model' => $model,
			    ]) ?>
			</div>
		</div>
	</div>
</div>
