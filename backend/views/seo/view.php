<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Seo */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Seos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>View SEO</header>
            </div>
            <div class="card-body floating-label">
              <?= DetailView::widget([
                  'model' => $model,
                  'attributes' => [
                      'id',
                      'title',
                      'description:ntext',
                      // 'updated_on',
                      // 'updated_by',
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
