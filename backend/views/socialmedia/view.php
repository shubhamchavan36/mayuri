<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialMedia */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Social Media', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
        <header>View Social Media</header>
      </div>
      <div class="card-body floating-label">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'alt',
                'url:url',
            ],
        ]) ?>
        <div class="card-actionbar">
          <div class="card-actionbar-row">
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
