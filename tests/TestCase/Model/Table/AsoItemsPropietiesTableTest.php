<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsoItemsPropietiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsoItemsPropietiesTable Test Case
 */
class AsoItemsPropietiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsoItemsPropietiesTable
     */
    public $AsoItemsPropieties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aso_items_propieties',
        'app.ite_items',
        'app.ite_propieties',
        'app.ite_propiety_values'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AsoItemsPropieties') ? [] : ['className' => 'App\Model\Table\AsoItemsPropietiesTable'];
        $this->AsoItemsPropieties = TableRegistry::get('AsoItemsPropieties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AsoItemsPropieties);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
