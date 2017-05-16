<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AsoPersonAddresses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PerPersons
 * @property \Cake\ORM\Association\BelongsTo $AddAddresses
 * @property \Cake\ORM\Association\BelongsTo $AddAddressTypes
 *
 * @method \App\Model\Entity\AsoPersonAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\AsoPersonAddress newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AsoPersonAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AsoPersonAddress|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AsoPersonAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AsoPersonAddress[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AsoPersonAddress findOrCreate($search, callable $callback = null, $options = [])
 */
class AsoPersonAddressesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('aso_person_addresses');
        $this->setDisplayField('person_id');
        $this->setPrimaryKey(['person_id', 'address_id']);

        $this->belongsTo('PerPersons', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AddAddresses', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AddAddressTypes', [
            'foreignKey' => 'address_type_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['person_id'], 'PerPersons'));
        $rules->add($rules->existsIn(['address_id'], 'AddAddresses'));
        $rules->add($rules->existsIn(['address_type_id'], 'AddAddressTypes'));

        return $rules;
    }
}
