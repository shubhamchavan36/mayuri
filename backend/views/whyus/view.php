<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Why uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
          <header><?= HTML::encode($this->title)?></header>
      </div>
      <div class="card-body floating-label">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'title',
                    'description:ntext',
                ],
            ]) ?>

       <div class="card-actionbar">
            <div class="card-actionbar-row">

                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
