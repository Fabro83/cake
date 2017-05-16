<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteItemsTable Test Case
 */
class IteItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteItemsTable
     */
    public $IteItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_items',
        'app.files',
        'app.sectors',
        'app.ite_budgets',
        'app.ite_acquisition_types',
        'app.ite_statuses',
        'app.ite_classes',
        'app.ite_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteItems') ? [] : ['className' => 'App\Model\Table\IteItemsTable'];
        $this->IteItems = TableRegistry::get('IteItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteItems);

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
