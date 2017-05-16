<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsoPersonAddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsoPersonAddressesTable Test Case
 */
class AsoPersonAddressesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsoPersonAddressesTable
     */
    public $AsoPersonAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aso_person_addresses',
        'app.per_person',
        'app.add_addresses',
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
        $config = TableRegistry::exists('AsoPersonAddresses') ? [] : ['className' => 'App\Model\Table\AsoPersonAddressesTable'];
        $this->AsoPersonAddresses = TableRegistry::get('AsoPersonAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AsoPersonAddresses);

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
