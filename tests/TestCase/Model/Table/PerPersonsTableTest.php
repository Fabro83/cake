<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerPersonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerPersonsTable Test Case
 */
class PerPersonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerPersonsTable
     */
    public $PerPersons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_persons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerPersons') ? [] : ['className' => 'App\Model\Table\PerPersonsTable'];
        $this->PerPersons = TableRegistry::get('PerPersons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerPersons);

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
