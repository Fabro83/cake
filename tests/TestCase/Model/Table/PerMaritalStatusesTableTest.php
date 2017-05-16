<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerMaritalStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerMaritalStatusesTable Test Case
 */
class PerMaritalStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerMaritalStatusesTable
     */
    public $PerMaritalStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_marital_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerMaritalStatuses') ? [] : ['className' => 'App\Model\Table\PerMaritalStatusesTable'];
        $this->PerMaritalStatuses = TableRegistry::get('PerMaritalStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerMaritalStatuses);

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
