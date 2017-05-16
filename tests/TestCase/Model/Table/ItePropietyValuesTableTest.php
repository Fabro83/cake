<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItePropietyValuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItePropietyValuesTable Test Case
 */
class ItePropietyValuesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItePropietyValuesTable
     */
    public $ItePropietyValues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_propiety_values',
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
        $config = TableRegistry::exists('ItePropietyValues') ? [] : ['className' => 'App\Model\Table\ItePropietyValuesTable'];
        $this->ItePropietyValues = TableRegistry::get('ItePropietyValues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItePropietyValues);

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
