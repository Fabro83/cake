<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhoneTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhoneTypesTable Test Case
 */
class TelPhoneTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhoneTypesTable
     */
    public $TelPhoneTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phone_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TelPhoneTypes') ? [] : ['className' => 'App\Model\Table\TelPhoneTypesTable'];
        $this->TelPhoneTypes = TableRegistry::get('TelPhoneTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhoneTypes);

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
