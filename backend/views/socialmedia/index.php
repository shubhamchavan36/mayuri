<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Media';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
        <header>Manage Social Media </header>
      </div>
      <div class="card-body floating-label">
        <?php $temp='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{view}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{update}';?>
        <?php Pjax::begin(); ?>
          <?= GridView::widget([
              'dataProvider' => $dataProvider,
              'columns' => [
                  ['class' => 'yii\grid\SerialColumn'],

                  'id',
                  'title',
                  // 'logo',
                  'alt',
                  'url:url',

                  ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,
                    'contentOptions' => ['style' => 'width:10%']
                  ],
              ],
          ]); ?>
        <?php Pjax::end(); ?>
      </div>
    </div>
  </div>
<div>
