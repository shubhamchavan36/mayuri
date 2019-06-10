<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WhyUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Why uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">
          <header><?= Html::encode($this->title) ?></header>
          <small> <?= Html::a('Add Why Us', ['create'], ['class' => 'btn btn-flat btn-sm btn-default ink-reaction pull-right btn-loading-state','style'=>'margin-top: 15px;color: white;margin-right: 10px;']) ?></small>
      </div>
      <div class="card-body floating-label">
            <?php Pjax::begin(); ?>  
              <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'title',
                        'description:ntext',
                        //'created_by',
                        //'created_on',
                        // 'updated_by',
                        // 'updated_on',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
  </div>
</div>

