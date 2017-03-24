<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\CaughtFishesTable;

/**
 * FishDiary\Model\Table\CaughtFishesTable Test Case
 */
class CaughtFishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\CaughtFishesTable
     */
    public $CaughtFishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.caught_fishes',
        'app.fish_types',
        'app.fishing_places',
        'app.lures',
        'app.lure_types',
        'app.weather_types',
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
        $config = TableRegistry::exists('CaughtFishes') ? [] : ['className' => 'FishDiary\Model\Table\CaughtFishesTable'];
        $this->CaughtFishes = TableRegistry::get('CaughtFishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CaughtFishes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
