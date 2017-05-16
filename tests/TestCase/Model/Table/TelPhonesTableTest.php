<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhonesTable Test Case
 */
class TelPhonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhonesTable
     */
    public $TelPhones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phones',
        'app.tel_phone_types',
        'app.tel_phone_companies',
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
        $config = TableRegistry::exists('TelPhones') ? [] : ['className' => 'App\Model\Table\TelPhonesTable'];
        $this->TelPhones = TableRegistry::get('TelPhones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhones);

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
