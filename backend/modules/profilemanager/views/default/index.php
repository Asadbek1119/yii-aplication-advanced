<?php

use common\models\User;
use yii\helpers\Url;

/** @var \soft\web\View $this */


$this->title = Yii::t('app', 'Personal cabinet');
$this->params['breadcrumbs'][] = $this->title;

// user section start //
$users = User::find()->andWhere(['status' => User::STATUS_ACTIVE])->all();
// user section end //

?>

<div class="profilemanager-default-index">
    <p>
        <a href="<?= Url::to(['change-login']) ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> <?= Yii::t('app', 'Shaxsiy malumotlarni o\'zgartirish') ?>
        </a>
        <a href="<?= Url::to(['change-password']) ?>" class="btn btn-danger">
            <i class="fa fa-key"></i> <?= Yii::t('app', 'Parolni o\'zgartirish') ?>
        </a>
    </p>
</div>

<table class="table table-hover table-bordered">
    <thead>
    <tr class="text-center">
        <th scope="col">№</th>
        <th scope="col">Foydalanvchi nomi</th>
        <th scope="col">Foydalanvchi paroli</th>
        <th scope="col">Elektron pochta</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
    <tr>
        <th scope="row"><?=$user->id?></th>
        <td><?=$user->username?></td>
        <td><?=$user->password_hash?></td>
        <td><?=$user->email?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
