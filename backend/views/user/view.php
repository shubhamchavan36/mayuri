<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-head style-primary">
                <header>View User</header>
            </div>
            <div class="card-body floating-label">
            
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'username',
                        // 'auth_key',
                        // 'password_hash',
                        // 'password_reset_token',
                        'email:email',
                        // 'status',
                        // 'created_at',
                        // 'updated_at',
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
