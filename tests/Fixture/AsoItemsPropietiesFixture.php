<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsoItemsPropietiesFixture
 *
 */
class AsoItemsPropietiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'propiety_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'propiety_value_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'aso_propiety_idx' => ['type' => 'index', 'columns' => ['propiety_id'], 'length' => []],
            'aso_propiety_value_idx' => ['type' => 'index', 'columns' => ['propiety_value_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['item_id', 'propiety_id'], 'length' => []],
            'aso_item' => ['type' => 'foreign', 'columns' => ['item_id'], 'references' => ['ite_items', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'aso_propiety' => ['type' => 'foreign', 'columns' => ['propiety_id'], 'references' => ['ite_propieties', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'aso_propiety_value' => ['type' => 'foreign', 'columns' => ['propiety_value_id'], 'references' => ['ite_propiety_values', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'item_id' => 1,
            'propiety_id' => 1,
            'propiety_value_id' => 1
        ],
    ];
}
