<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\FishTypesTable;

/**
 * FishDiary\Model\Table\FishTypesTable Test Case
 */
class FishTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\FishTypesTable
     */
    public $FishTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fish_types',
        'app.caught_fishes',
        'app.fishing_places',
        'app.lures',
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
        $config = TableRegistry::exists('FishTypes') ? [] : ['className' => 'FishDiary\Model\Table\FishTypesTable'];
        $this->FishTypes = TableRegistry::get('FishTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FishTypes);

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
