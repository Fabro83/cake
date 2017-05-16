<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerDocumentTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerDocumentTypesTable Test Case
 */
class PerDocumentTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerDocumentTypesTable
     */
    public $PerDocumentTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_document_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerDocumentTypes') ? [] : ['className' => 'App\Model\Table\PerDocumentTypesTable'];
        $this->PerDocumentTypes = TableRegistry::get('PerDocumentTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerDocumentTypes);

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
