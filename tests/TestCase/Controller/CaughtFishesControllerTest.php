<?php
namespace FishDiary\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestCase;
use FishDiary\Controller\CaughtFishesController;

/**
 * FishDiary\Controller\CaughtFishesController Test Case
 */
class CaughtFishesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
