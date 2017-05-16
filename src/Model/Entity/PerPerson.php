<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerPerson Entity
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property int $id_doc_type
 * @property int $doc_num
 * @property \Cake\I18n\FrozenDate $birth_date
 * @property int $id_gender
 * @property int $id_nationality
 * @property int $id_marital_status
 * @property int $id_status
 */
class PerPerson extends Entity
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
