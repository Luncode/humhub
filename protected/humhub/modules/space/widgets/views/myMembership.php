<?php

use humhub\widgets\PanelMenu;

/**
 * @var string $role
 * @var array $permissions
 * @var string $memberSince
 */
?>

<div class="panel panel-default panel-my-membership" id="my-membership-panel">
    <?= PanelMenu::widget(['id' => 'space-my-membership-panel']); ?>
    <div class="panel-heading"><?= Yii::t('SpaceModule.base', '<strong>About</strong> my membership'); ?></div>
    <div class="panel-body">

        <p><b><?= Yii::t('SpaceModule.base', 'Role') ?>: </b><?= ucfirst($role) ?></p>
        <p><b><?= Yii::t('SpaceModule.base', 'Member since') ?>: </b><?= $memberSince ?></p>
    </div>
</div>
