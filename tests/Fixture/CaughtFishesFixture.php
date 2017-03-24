<?php
namespace FishDiary\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CaughtFishesFixture
 *
 */
class CaughtFishesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fish_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fishing_place_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lure_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'caught_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'released' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'weight' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'length' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'air_pressure' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'air_temperature' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'water_temperature' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'weather_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_FISH_TYPE_ID' => ['type' => 'index', 'columns' => ['fish_type_id'], 'length' => []],
            'BY_FISHING_PLACE_ID' => ['type' => 'index', 'columns' => ['fishing_place_id'], 'length' => []],
            'BY_LURE_ID' => ['type' => 'index', 'columns' => ['lure_id'], 'length' => []],
            'BY_CAUGHT_TIME' => ['type' => 'index', 'columns' => ['caught_time'], 'length' => []],
            'BY_RELEASED' => ['type' => 'index', 'columns' => ['released'], 'length' => []],
            'BY_WEIGHT' => ['type' => 'index', 'columns' => ['weight'], 'length' => []],
            'BY_LENGTH' => ['type' => 'index', 'columns' => ['length'], 'length' => []],
            'BY_AIR_PRESSURE' => ['type' => 'index', 'columns' => ['air_pressure'], 'length' => []],
            'BY_AIR_TEMPERATURE' => ['type' => 'index', 'columns' => ['air_temperature'], 'length' => []],
            'BY_WEATHER_TYPE_ID' => ['type' => 'index', 'columns' => ['weather_type_id'], 'length' => []],
            'BY_WATER_TEMPERATURE' => ['type' => 'index', 'columns' => ['water_temperature'], 'length' => []],
            'BY_CREATED' => ['type' => 'index', 'columns' => ['created'], 'length' => []],
            'BY_MODIFIED' => ['type' => 'index', 'columns' => ['modified'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'fish_type_id' => 1,
            'fishing_place_id' => 1,
            'lure_id' => 1,
            'caught_time' => '2017-03-24 18:26:32',
            'released' => 1,
            'weight' => 1,
            'length' => 1,
            'air_pressure' => 1,
            'air_temperature' => 1,
            'water_temperature' => 1,
            'weather_type_id' => 1,
            'created' => '2017-03-24 18:26:32',
            'modified' => '2017-03-24 18:26:32'
        ],
    ];
}
