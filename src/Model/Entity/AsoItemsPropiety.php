<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AsoItemsPropiety Entity
 *
 * @property int $item_id
 * @property int $propiety_id
 * @property int $propiety_value_id
 *
 * @property \App\Model\Entity\IteItem $ite_item
 * @property \App\Model\Entity\ItePropiety $ite_propiety
 * @property \App\Model\Entity\ItePropietyValue $ite_propiety_value
 */
class AsoItemsPropiety extends Entity
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
        'item_id' => false,
        'propiety_id' => false
    ];
}
