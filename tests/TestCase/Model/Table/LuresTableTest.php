<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\LuresTable;

/**
 * FishDiary\Model\Table\LuresTable Test Case
 */
class LuresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\LuresTable
     */
    public $Lures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lures',
        'app.lure_types',
        'app.caught_fishes',
        'app.fish_types',
        'app.fishing_places',
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
        $config = TableRegistry::exists('Lures') ? [] : ['className' => 'FishDiary\Model\Table\LuresTable'];
        $this->Lures = TableRegistry::get('Lures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lures);

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
