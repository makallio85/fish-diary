<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $user->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User']) ?></legend>
    <?php
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
