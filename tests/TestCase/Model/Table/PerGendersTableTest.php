<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerGendersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerGendersTable Test Case
 */
class PerGendersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerGendersTable
     */
    public $PerGenders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_genders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerGenders') ? [] : ['className' => 'App\Model\Table\PerGendersTable'];
        $this->PerGenders = TableRegistry::get('PerGenders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerGenders);

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
