<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddAddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddAddressesTable Test Case
 */
class AddAddressesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddAddressesTable
     */
    public $AddAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.add_addresses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AddAddresses') ? [] : ['className' => 'App\Model\Table\AddAddressesTable'];
        $this->AddAddresses = TableRegistry::get('AddAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AddAddresses);

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
