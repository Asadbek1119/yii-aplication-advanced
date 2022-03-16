<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
?>
<div class="products-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'category_name',
        ],
    ]) ?>

</div>
