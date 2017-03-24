<?php
use Migrations\AbstractMigration;

class CreateCaughtFishes extends AbstractMigration
{

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('caught_fishes');
        $table->addColumn('fish_type_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ]);
        $table->addColumn('fishing_place_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ]);
        $table->addColumn('lure_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('caught_time', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('released', 'boolean', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('weight', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('length', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('air_pressure', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('air_temperature', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('water_temperature', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('weather_type_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addIndex([
            'fish_type_id',
        ], [
            'name'   => 'BY_FISH_TYPE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'fishing_place_id',
        ], [
            'name'   => 'BY_FISHING_PLACE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'lure_id',
        ], [
            'name'   => 'BY_LURE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'caught_time',
        ], [
            'name'   => 'BY_CAUGHT_TIME',
            'unique' => false,
        ]);
        $table->addIndex([
            'released',
        ], [
            'name'   => 'BY_RELEASED',
            'unique' => false,
        ]);
        $table->addIndex([
            'weight',
        ], [
            'name'   => 'BY_WEIGHT',
            'unique' => false,
        ]);
        $table->addIndex([
            'length',
        ], [
            'name'   => 'BY_LENGTH',
            'unique' => false,
        ]);
        $table->addIndex([
            'air_pressure',
        ], [
            'name'   => 'BY_AIR_PRESSURE',
            'unique' => false,
        ]);
        $table->addIndex([
            'air_temperature',
        ], [
            'name'   => 'BY_AIR_TEMPERATURE',
            'unique' => false,
        ]);
        $table->addIndex([
            'weather_type_id',
        ], [
            'name'   => 'BY_WEATHER_TYPE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'water_temperature',
        ], [
            'name'   => 'BY_WATER_TEMPERATURE',
            'unique' => false,
        ]);
        $table->addIndex([
            'created',
        ], [
            'name'   => 'BY_CREATED',
            'unique' => false,
        ]);
        $table->addIndex([
            'modified',
        ], [
            'name'   => 'BY_MODIFIED',
            'unique' => false,
        ]);
        $table->create();
    }
}
