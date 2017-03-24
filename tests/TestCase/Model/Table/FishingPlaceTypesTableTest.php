<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\FishingPlaceTypesTable;

/**
 * FishDiary\Model\Table\FishingPlaceTypesTable Test Case
 */
class FishingPlaceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\FishingPlaceTypesTable
     */
    public $FishingPlaceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fishing_place_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FishingPlaceTypes') ? [] : ['className' => 'FishDiary\Model\Table\FishingPlaceTypesTable'];
        $this->FishingPlaceTypes = TableRegistry::get('FishingPlaceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FishingPlaceTypes);

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
