<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteClassesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteClassesTable Test Case
 */
class IteClassesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteClassesTable
     */
    public $IteClasses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('IteClasses') ? [] : ['className' => 'App\Model\Table\IteClassesTable'];
        $this->IteClasses = TableRegistry::get('IteClasses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteClasses);

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
