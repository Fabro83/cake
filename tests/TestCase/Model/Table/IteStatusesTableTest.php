<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteStatusesTable Test Case
 */
class IteStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteStatusesTable
     */
    public $IteStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteStatuses') ? [] : ['className' => 'App\Model\Table\IteStatusesTable'];
        $this->IteStatuses = TableRegistry::get('IteStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteStatuses);

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
