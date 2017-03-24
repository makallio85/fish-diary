<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Fishing Place Type'), ['action' => 'edit', $fishingPlaceType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fishing Place Type'), ['action' => 'delete', $fishingPlaceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlaceType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fishing Place Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place Type'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Fishing Place Type'), ['action' => 'edit', $fishingPlaceType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fishing Place Type'), ['action' => 'delete', $fishingPlaceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishingPlaceType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fishing Place Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fishing Place Type'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($fishingPlaceType->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($fishingPlaceType->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($fishingPlaceType->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($fishingPlaceType->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($fishingPlaceType->modified) ?></td>
        </tr>
    </table>
</div>

