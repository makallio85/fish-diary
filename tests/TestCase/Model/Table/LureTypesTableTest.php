<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\LureTypesTable;

/**
 * FishDiary\Model\Table\LureTypesTable Test Case
 */
class LureTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\LureTypesTable
     */
    public $LureTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lure_types',
        'app.lures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LureTypes') ? [] : ['className' => 'FishDiary\Model\Table\LureTypesTable'];
        $this->LureTypes = TableRegistry::get('LureTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LureTypes);

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
