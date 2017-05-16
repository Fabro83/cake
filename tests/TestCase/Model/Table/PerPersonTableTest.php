<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerPersonTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerPersonTable Test Case
 */
class PerPersonTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerPersonTable
     */
    public $PerPerson;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.per_person'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PerPerson') ? [] : ['className' => 'App\Model\Table\PerPersonTable'];
        $this->PerPerson = TableRegistry::get('PerPerson', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerPerson);

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
