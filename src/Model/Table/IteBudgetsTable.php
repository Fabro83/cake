<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IteBudgets Model
 *
 * @method \App\Model\Entity\IteBudget get($primaryKey, $options = [])
 * @method \App\Model\Entity\IteBudget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IteBudget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IteBudget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IteBudget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IteBudget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IteBudget findOrCreate($search, callable $callback = null, $options = [])
 */
class IteBudgetsTable extends Table
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

        $this->setTable('ite_budgets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
}
