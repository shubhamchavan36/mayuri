<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
          <header><?= Html::encode($this->title) ?></header>
          <small> <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-flat btn-sm btn-default ink-reaction pull-right btn-loading-state','style'=>'margin-top: 15px;color: white;margin-right: 10px;']) ?></small>
      </div>
      <div class="card-body floating-label">
        <?php Pjax::begin(); ?>
         <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                   
                // 'id',
                'title',
                  [
                          'attribute' => 'description',
                          'label' => 'Description',
                          'contentOptions' => ['style' => 'width:7
                          0%']
                        ],
                // 'created_by',
                // 'created_on',
                // 'updated_on',
                // 'updated_by',

                ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>'{view}{update}{delete}',
                  'contentOptions' => ['style' => 'width:10%']
                ],
            ],
          ]); ?>
        <?php Pjax::end(); ?>
      </div>
    </div>
  </div>
</div>
