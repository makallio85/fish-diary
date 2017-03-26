<?php
/**
 * @var \FishDiary\View\AppView $this
 */
?>

<div class="row" style="margin-top: 40px">
    <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3">
        <div class="users form">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
            <?= $this->Form->button(__('Login')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>