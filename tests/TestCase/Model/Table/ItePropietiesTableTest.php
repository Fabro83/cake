<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItePropietiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItePropietiesTable Test Case
 */
class ItePropietiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItePropietiesTable
     */
    public $ItePropieties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_propieties',
        'app.ite_types',
        'app.ite_field_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ItePropieties') ? [] : ['className' => 'App\Model\Table\ItePropietiesTable'];
        $this->ItePropieties = TableRegistry::get('ItePropieties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItePropieties);

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
