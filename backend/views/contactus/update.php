<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contactus */

$this->title = 'Update Contactus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">

   <header>Update ContactUs</header>
</div>
 <div class="card-body floating-label">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
		</div>
	</div>
	
