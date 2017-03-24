<?php
/**
  * @var \FishDiary\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Caught Fish Notes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="caughtFishNotes form large-9 medium-8 columns content">
    <?= $this->Form->create($caughtFishNote) ?>
    <fieldset>
        <legend><?= __('Add Caught Fish Note') ?></legend>
        <?php
            echo $this->Form->control('caught_fish_id');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
