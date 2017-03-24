<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\FishingPlacesTable;

/**
 * FishDiary\Model\Table\FishingPlacesTable Test Case
 */
class FishingPlacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\FishingPlacesTable
     */
    public $FishingPlaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fishing_places',
        'app.caught_fishes',
        'app.fish_types',
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
        $config = TableRegistry::exists('FishingPlaces') ? [] : ['className' => 'FishDiary\Model\Table\FishingPlacesTable'];
        $this->FishingPlaces = TableRegistry::get('FishingPlaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FishingPlaces);

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
