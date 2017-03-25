<?php
namespace FishDiary\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FishDiary\Model\Table\CaughtFishPhotosTable;

/**
 * FishDiary\Model\Table\CaughtFishPhotosTable Test Case
 */
class CaughtFishPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FishDiary\Model\Table\CaughtFishPhotosTable
     */
    public $CaughtFishPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.caught_fish_photos',
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
        $config = TableRegistry::exists('CaughtFishPhotos') ? [] : ['className' => 'FishDiary\Model\Table\CaughtFishPhotosTable'];
        $this->CaughtFishPhotos = TableRegistry::get('CaughtFishPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CaughtFishPhotos);

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
