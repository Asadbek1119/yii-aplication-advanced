<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductLines */

$this->title = Yii::t('app', 'Create Product Lines');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Lines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lines-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
