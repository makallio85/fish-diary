<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Caught Fish Note'), ['action' => 'edit', $caughtFishNote->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Caught Fish Note'), ['action' => 'delete', $caughtFishNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNote->id)]) ?> </li>
<li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish Note'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Caught Fish Note'), ['action' => 'edit', $caughtFishNote->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Caught Fish Note'), ['action' => 'delete', $caughtFishNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishNote->id)]) ?> </li>
<li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish Note'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($caughtFishNote->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($caughtFishNote->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Caught Fish Id') ?></td>
            <td><?= $this->Number->format($caughtFishNote->caught_fish_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($caughtFishNote->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($caughtFishNote->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Note') ?></td>
            <td><?= $this->Text->autoParagraph(h($caughtFishNote->note)); ?></td>
        </tr>
    </table>
</div>

