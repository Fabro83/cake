<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelPhoneCompaniesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelPhoneCompaniesTable Test Case
 */
class TelPhoneCompaniesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelPhoneCompaniesTable
     */
    public $TelPhoneCompanies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tel_phone_companies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TelPhoneCompanies') ? [] : ['className' => 'App\Model\Table\TelPhoneCompaniesTable'];
        $this->TelPhoneCompanies = TableRegistry::get('TelPhoneCompanies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelPhoneCompanies);

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
