<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoCountriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoCountriesTable Test Case
 */
class GeoCountriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoCountriesTable
     */
    public $GeoCountries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.geo_countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GeoCountries') ? [] : ['className' => 'App\Model\Table\GeoCountriesTable'];
        $this->GeoCountries = TableRegistry::get('GeoCountries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GeoCountries);

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
