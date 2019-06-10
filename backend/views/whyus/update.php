<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */

$this->title = 'Update Why Us: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Why uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
