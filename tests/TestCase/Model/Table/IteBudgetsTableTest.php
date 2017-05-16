<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteBudgetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteBudgetsTable Test Case
 */
class IteBudgetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteBudgetsTable
     */
    public $IteBudgets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_budgets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteBudgets') ? [] : ['className' => 'App\Model\Table\IteBudgetsTable'];
        $this->IteBudgets = TableRegistry::get('IteBudgets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteBudgets);

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
