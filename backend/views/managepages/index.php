<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Managepages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>User Accounts </header>
<!--                 <small> <?//= Html::a('Create Company', ['create'], ['class' => 'btn btn-flat btn-sm btn-default ink-reaction pull-right btn-loading-state','style'=>'margin-top: 15px;color: white;margin-right: 10px;']) ?></small> -->
            </div>
            <div class="card-body floating-label">
                <!-- <div class="table-responsive"> -->
                <?php $temp='{view}{update}';?>


                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'title',
                        [
                          'attribute' => 'description',
                          'label' => 'Description',
                          'contentOptions' => ['style' => 'width:80%']
                        ],
                        // 'created_by',
                        // 'created_on',
                        // 'updated_by',
                        // 'updated_on',

                        ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,'contentOptions'=>['style' =>'widht:10%']],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
