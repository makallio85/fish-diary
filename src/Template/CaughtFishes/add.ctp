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
?>
<?= $this->Form->create($caughtFish, ['type' => 'file']); ?>
<fieldset>
    <?php
    echo $this->Form->control('fish_type_id', ['options' => $fishTypes]);
    echo $this->Form->control('fishing_place_id', ['options' => $fishingPlaces]);
    echo $this->Form->control('lure_id', ['options' => $lures]);
    echo $this->Form->control('caught_time');
    echo $this->Form->control('released');
    echo $this->Form->control('weight');
    echo $this->Form->control('length');
    echo $this->Form->control('air_pressure');
    echo $this->Form->control('air_temperature');
    echo $this->Form->control('water_temperature');
    echo $this->Form->control('weather_type_id', ['options' => $weatherTypes]);
    echo $this->Form->control('caught_fish_notes.0.note', ['required' => false]);
    echo $this->Form->control('photos[]', ['type' => 'file', 'multiple' => true, 'label' => 'Photos']);

    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
