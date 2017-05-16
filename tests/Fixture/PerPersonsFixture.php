<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PerPersonsFixture
 *
 */
class PerPersonsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'surname' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_doc_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'doc_num' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'birth_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'id_gender' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_nationality' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_marital_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'doc_type_idx' => ['type' => 'index', 'columns' => ['id_doc_type'], 'length' => []],
            'gender_idx' => ['type' => 'index', 'columns' => ['id_gender'], 'length' => []],
            'marital_status_idx' => ['type' => 'index', 'columns' => ['id_marital_status'], 'length' => []],
            'status_idx' => ['type' => 'index', 'columns' => ['id_status'], 'length' => []],
            'nationality_idx' => ['type' => 'index', 'columns' => ['id_nationality'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'doc_type' => ['type' => 'foreign', 'columns' => ['id_doc_type'], 'references' => ['per_document_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'gender' => ['type' => 'foreign', 'columns' => ['id_gender'], 'references' => ['per_genders', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'marital_status' => ['type' => 'foreign', 'columns' => ['id_marital_status'], 'references' => ['per_marital_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'nationality' => ['type' => 'foreign', 'columns' => ['id_nationality'], 'references' => ['geo_countries', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'status' => ['type' => 'foreign', 'columns' => ['id_status'], 'references' => ['per_statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'surname' => 'Lorem ipsum dolor sit amet',
            'id_doc_type' => 1,
            'doc_num' => 1,
            'birth_date' => '2017-05-15',
            'id_gender' => 1,
            'id_nationality' => 1,
            'id_marital_status' => 1,
            'id_status' => 1
        ],
    ];
}
