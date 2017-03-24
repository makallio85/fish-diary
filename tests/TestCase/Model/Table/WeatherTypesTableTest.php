<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\WeatherTypesTable;

/**
 * FishDiary\Model\Table\WeatherTypesTable Test Case
 */
class WeatherTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\WeatherTypesTable
     */
    public $WeatherTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weather_types',
        'app.caught_fishes',
        'app.fish_types',
        'app.fishing_places',
        'app.lures',
        'app.lure_types',
        'app.caught_fish_notes',
        'app.caught_fish'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WeatherTypes') ? [] : ['className' => 'FishDiary\Model\Table\WeatherTypesTable'];
        $this->WeatherTypes = TableRegistry::get('WeatherTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeatherTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
