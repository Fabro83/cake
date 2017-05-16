<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IteAcquisitionTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IteAcquisitionTypesTable Test Case
 */
class IteAcquisitionTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IteAcquisitionTypesTable
     */
    public $IteAcquisitionTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ite_acquisition_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IteAcquisitionTypes') ? [] : ['className' => 'App\Model\Table\IteAcquisitionTypesTable'];
        $this->IteAcquisitionTypes = TableRegistry::get('IteAcquisitionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IteAcquisitionTypes);

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
