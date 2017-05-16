<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteTypesTable Test Case
 */
class IteTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteTypesTable
     */
    public $IteTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_types',
        'app.ite_classes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteTypes') ? [] : ['className' => 'App\Model\Table\IteTypesTable'];
        $this->IteTypes = TableRegistry::get('IteTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteTypes);

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
