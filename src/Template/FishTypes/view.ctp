<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Fish Type'), ['action' => 'edit', $fishType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Fish Type'), ['action' => 'delete', $fishType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fishType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Fish Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Fish Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Caught Fishes'), ['controller' => 'CaughtFishes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Caught Fish'), ['controller' => 'CaughtFishes', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>

<div class="panel panel-default">
    <?php if (!empty($fishType->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Place') ?></th>
                <th><?= __('Time') ?></th>
                <th><?= __('Length') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($fishType->caught_fishes as $caughtFishes): ?>
                <tr>
                    <td><?= h($caughtFishes->fishing_place->name) ?></td>
                    <td><?= h($caughtFishes->caught_time->format('Y-m-d')) ?></td>
                    <td><?= h($caughtFishes->length) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFishes->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
