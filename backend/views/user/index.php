<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>User Accounts </header>
                <small> <?= Html::a('Create User', ['create'], ['class' => 'btn btn-flat btn-sm btn-default ink-reaction pull-right btn-loading-state','style'=>'margin-top: 15px;color: white;margin-right: 10px;']) ?></small>
            </div>
            <div class="card-body floating-label">
                <!-- <div class="table-responsive"> -->
                <?php $temp='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{update}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{delete}';?>

                <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'username',
                        'email',
                        // 'password_hash',
                        // 'password_reset_token',
                        // 'email:email',
                        // 'status',
                        // 'created_at',
                        // 'updated_at',

                        ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,
                          'contentOptions' => ['style' => 'width:10%']
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
