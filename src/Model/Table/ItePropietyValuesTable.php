<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItePropietyValues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ItePropieties
 *
 * @method \App\Model\Entity\ItePropietyValue get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItePropietyValue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItePropietyValue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItePropietyValue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItePropietyValue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItePropietyValue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItePropietyValue findOrCreate($search, callable $callback = null, $options = [])
 */
class ItePropietyValuesTable extends Table
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

        $this->setTable('ite_propiety_values');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ItePropieties', [
            'foreignKey' => 'propiety_id',
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
        $rules->add($rules->existsIn(['propiety_id'], 'ItePropieties'));

        return $rules;
    }
}
