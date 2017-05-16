<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TelPhone Entity
 *
 * @property int $id
 * @property string $value
 * @property int $phone_type_id
 * @property int $phone_company_id
 * @property int $person_id
 *
 * @property \App\Model\Entity\TelPhoneType $tel_phone_type
 * @property \App\Model\Entity\TelPhoneCompany $tel_phone_company
 * @property \App\Model\Entity\PerPerson $per_person
 */
class TelPhone extends Entity
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
