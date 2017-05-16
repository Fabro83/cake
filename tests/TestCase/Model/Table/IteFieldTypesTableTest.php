<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteFieldTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteFieldTypesTable Test Case
 */
class IteFieldTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteFieldTypesTable
     */
    public $IteFieldTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_field_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteFieldTypes') ? [] : ['className' => 'App\Model\Table\IteFieldTypesTable'];
        $this->IteFieldTypes = TableRegistry::get('IteFieldTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteFieldTypes);

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
