<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
          <header>Products</header>
      </div>
      <div class="card-body floating-label">
        <?php $temp='{view}{update}';?>
        <?php Pjax::begin(); ?>
          <?= GridView::widget([
              'dataProvider' => $dataProvider,
              'columns' => [
                  ['class' => 'yii\grid\SerialColumn'],

                  // 'id',
                  'title',
                  'description:ntext',
                  // 'updated_on',
                  // 'updated_by',

                  ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,
                    'contentOptions' => ['style' => 'width:8%']
                  ],
              ],
          ]); ?>
        <?php Pjax::end(); ?>
      </div>
    </div>
  </div>
</div>
