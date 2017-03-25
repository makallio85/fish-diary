<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
echo $this->element('Menu/menu');
$this->end();

$this->start('tb_sidebar');
echo $this->element('Menu/menu');
$this->end();
?>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Caught fishes') ?></h3>
    </div>
    <?php if (!empty($fishingPlace->caught_fishes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Type') ?></th>
                <th><?= __('Time') ?></th>
                <th><?= __('Length') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($fishingPlace->caught_fishes as $caughtFishes): ?>
                <tr>
                    <td><?= h($caughtFishes->fish_type->name) ?></td>
                    <td><?= h($caughtFishes->caught_time->format('Y-m-d')) ?></td>
                    <td><?= h($caughtFishes->length) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'CaughtFishes', 'action' => 'view', $caughtFishes->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related CaughtFishes</p>
    <?php endif; ?>
</div>
