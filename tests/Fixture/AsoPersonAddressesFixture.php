<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsoPersonAddressesFixture
 *
 */
class AsoPersonAddressesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'address_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'address_type' => ['type' => 'index', 'columns' => ['address_type_id'], 'length' => []],
            'address' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['person_id', 'address_id'], 'length' => []],
            'address' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['add_addresses', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'address_type' => ['type' => 'foreign', 'columns' => ['address_type_id'], 'references' => ['add_address_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'person' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['per_persons', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'person_id' => 1,
            'address_id' => 1,
            'address_type_id' => 1
        ],
    ];
}
