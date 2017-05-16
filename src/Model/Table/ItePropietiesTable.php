<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItePropieties Model
 *
 * @property \Cake\ORM\Association\BelongsTo $IteTypes
 * @property \Cake\ORM\Association\BelongsTo $IteFieldTypes
 *
 * @method \App\Model\Entity\ItePropiety get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItePropiety newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItePropiety[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItePropiety|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItePropiety patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItePropiety[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItePropiety findOrCreate($search, callable $callback = null, $options = [])
 */
class ItePropietiesTable extends Table
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

        $this->setTable('ite_propieties');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('IteTypes', [
            'foreignKey' => 'item_types_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('IteFieldTypes', [
            'foreignKey' => 'field_type_id',
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
        $rules->add($rules->existsIn(['item_types_id'], 'IteTypes'));
        $rules->add($rules->existsIn(['field_type_id'], 'IteFieldTypes'));

        return $rules;
    }
}
