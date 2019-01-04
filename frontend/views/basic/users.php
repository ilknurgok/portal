<?php

echo \yii\grid\GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        'email',
        'first_name',
        'last_name',
        'created_at',
        'updated_at'
    ]
]);