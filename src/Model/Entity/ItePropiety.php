<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItePropiety Entity
 *
 * @property int $id
 * @property int $item_types_id
 * @property string $value
 * @property int $field_type_id
 *
 * @property \App\Model\Entity\IteType $ite_type
 * @property \App\Model\Entity\IteFieldType $ite_field_type
 */
class ItePropiety extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
