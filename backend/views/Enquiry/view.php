<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model backend\models\Enquiry */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Enquiries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enquiry-view">
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
  <header>View Enquiry</header>
</div>
 <div class="card-body floating-label">
     <?php Pjax::begin(); ?>
    <p>
       <!--  <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?> -->
       <!--  <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'mobile_no',
            'email:email',
            'message:ntext',
            'enquired_on',
        ],
    ]) ?>
    <?php Pjax::end(); ?>
</div>
