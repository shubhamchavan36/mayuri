<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slideshows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>Manage SlideShows </header>
                <small> <?= Html::a('Create Slideshow', ['create'], ['class' => 'btn btn-flat btn-sm btn-default ink-reaction pull-right btn-loading-state','style'=>'margin-top: 15px;color: white;margin-right: 10px;']) ?></small>
            </div>
            <div class="card-body floating-label">
                <!-- <div class="table-responsive"> -->
                <?php $temp='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{update}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{delete}';?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'title',
                        [
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function($data) { return Html::img(Yii::getAlias('@web').'/images/slideshow/'.$data['image'], ['width'=>'100']); },
                        ],
                        // 'image',
                        // 'created_by',
                        // 'created_on',
                        // 'updated_by',
                        // 'updated_on',

                        ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,
                          'contentOptions' => ['style' => 'width:10%']
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
