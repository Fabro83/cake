<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AsoPersonAddress Entity
 *
 * @property int $person_id
 * @property int $address_id
 * @property int $address_type_id
 *
 * @property \App\Model\Entity\PerPerson $per_person
 * @property \App\Model\Entity\AddAddress $add_address
 * @property \App\Model\Entity\AddAddressType $add_address_type
 */
class AsoPersonAddress extends Entity
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
        'person_id' => false,
        'address_id' => false
    ];
}
