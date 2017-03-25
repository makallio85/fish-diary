<?php
namespace FishDiary\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CaughtFishPhotosFixture
 *
 */
class CaughtFishPhotosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'photo' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo_dir' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'caught_fish_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'BY_PHOTO' => ['type' => 'index', 'columns' => ['photo'], 'length' => []],
            'BY_PHOTO_DIR' => ['type' => 'index', 'columns' => ['photo_dir'], 'length' => []],
            'BY_CREATED' => ['type' => 'index', 'columns' => ['created'], 'length' => []],
            'BY_MODIFIED' => ['type' => 'index', 'columns' => ['modified'], 'length' => []],
            'BY_CAUGHT_FISH_ID' => ['type' => 'index', 'columns' => ['caught_fish_id'], 'length' => []],
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
            'photo' => 'Lorem ipsum dolor sit amet',
            'photo_dir' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-03-25 06:16:55',
            'modified' => '2017-03-25 06:16:55',
            'caught_fish_id' => 1
        ],
    ];
}
