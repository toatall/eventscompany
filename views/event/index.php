<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'theme',
            'date1',
            'date2',
            'description:ntext',
            //'member_users',
            //'member_organizations',
            //'is_photo',
            //'is_video',
            //'photo_path',
            //'video_path',
            //'date_create',
            //'date_update',
            //'date_delete',
            //'username',
            //'log_change',
            //'tags',
            //'date_activity',
            //'thumbnail',
            //'location',
            //'members_other',
            //'user_on_photo',
            //'user_on_video',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
