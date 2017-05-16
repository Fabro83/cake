<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddAddressTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddAddressTypesTable Test Case
 */
class AddAddressTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddAddressTypesTable
     */
    public $AddAddressTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.add_address_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AddAddressTypes') ? [] : ['className' => 'App\Model\Table\AddAddressTypesTable'];
        $this->AddAddressTypes = TableRegistry::get('AddAddressTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AddAddressTypes);

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
