<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IteItem Entity
 *
 * @property int $id
 * @property int $file_id
 * @property int $year
 * @property int $decree
 * @property string $comment
 * @property int $price
 * @property string $picture
 * @property int $sector_id
 * @property int $budget_id
 * @property int $acquisition_type_id
 * @property int $status_id
 * @property int $item_class_id
 * @property int $item_type_id
 *
 * @property \App\Model\Entity\File $file
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\IteBudget $ite_budget
 * @property \App\Model\Entity\IteAcquisitionType $ite_acquisition_type
 * @property \App\Model\Entity\IteStatus $ite_status
 * @property \App\Model\Entity\IteClass $ite_class
 * @property \App\Model\Entity\IteType $ite_type
 */
class IteItem extends Entity
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
