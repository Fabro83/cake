<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelPhones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TelPhoneTypes
 * @property \Cake\ORM\Association\BelongsTo $TelPhoneCompanies
 * @property \Cake\ORM\Association\BelongsTo $PerPersons
 *
 * @method \App\Model\Entity\TelPhone get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelPhone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelPhone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelPhone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhone findOrCreate($search, callable $callback = null, $options = [])
 */
class TelPhonesTable extends Table
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

        $this->setTable('tel_phones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TelPhoneTypes', [
            'foreignKey' => 'phone_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TelPhoneCompanies', [
            'foreignKey' => 'phone_company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PerPersons', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
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
        $rules->add($rules->existsIn(['phone_type_id'], 'TelPhoneTypes'));
        $rules->add($rules->existsIn(['phone_company_id'], 'TelPhoneCompanies'));
        $rules->add($rules->existsIn(['person_id'], 'PerPersons'));

        return $rules;
    }
}
