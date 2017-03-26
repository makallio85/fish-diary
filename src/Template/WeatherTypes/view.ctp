<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

?>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Caught fishes') ?></h3>
    </div>
    <?php if (!empty($weatherType->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Type') ?></th>
                <th><?= __('Place') ?></th>
                <th><?= __('Time') ?></th>
                <th class="hidden-xs actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($weatherType->caught_fishes as $caughtFish): ?>
                <tr>
                    <td>
                        <?= $caughtFish->has('fish_type') ? $this->Html->link($caughtFish->fish_type->name,
                            ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id]) : '' ?>
                    </td>
                    <td>
                        <?= $caughtFish->has('fishing_place') ? $this->Html->link($caughtFish->fishing_place->name,
                            ['controller' => 'FishingPlaces', 'action' => 'view', $caughtFish->fishing_place->id]) : '' ?>
                    </td>
                    <td><?= h($caughtFish->caught_time->format('Y-m-d')) ?></td>
                    <td class="hidden-xs actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFish->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'edit', $caughtFish->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'CaughtFishes', 'action' => 'delete', $caughtFish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caughtFishes->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CaughtFishes</p>
    <?php endif; ?>
</div>
