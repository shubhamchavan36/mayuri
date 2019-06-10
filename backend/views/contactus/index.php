<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactus-index">
    <div class="row">
    <!-- MAIN CONETENT START -->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-head style-primary">

    <header>Manage Contactus </header>

    <!-- <p>
        <?= Html::a('Create Contactus', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
     </div>
     <div class="card-body floating-label">
<?php Pjax::begin(); ?> 
     <?php $temp='{view}{update}';?>
  
   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'phone',
            'address:ntext',

            ['class' => 'yii\grid\ActionColumn','header'=>'Action','template'=>$temp,'contentOptions'=>['style' =>'widht:10%']],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
