<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelPhonesFixture
 *
 */
class TelPhonesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'value' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'phone_company_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'phone_company_idx' => ['type' => 'index', 'columns' => ['phone_company_id'], 'length' => []],
            'phone_type_idx' => ['type' => 'index', 'columns' => ['phone_type_id'], 'length' => []],
            'phone_persone_idx' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'phone_company' => ['type' => 'foreign', 'columns' => ['phone_company_id'], 'references' => ['tel_phone_companies', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'phone_persone' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['per_persons', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'phone_type' => ['type' => 'foreign', 'columns' => ['phone_type_id'], 'references' => ['tel_phone_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'value' => 'Lorem ipsum d',
            'phone_type_id' => 1,
            'phone_company_id' => 1,
            'person_id' => 1
        ],
    ];
}
