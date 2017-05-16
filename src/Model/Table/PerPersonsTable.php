<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerPersons Model
 *
 * @method \App\Model\Entity\PerPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerPerson findOrCreate($search, callable $callback = null, $options = [])
 */
class PerPersonsTable extends Table
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

        $this->setTable('per_persons');
        $this->setDisplayField('name');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->integer('id_doc_type')
            ->requirePresence('id_doc_type', 'create')
            ->notEmpty('id_doc_type');

        $validator
            ->integer('doc_num')
            ->requirePresence('doc_num', 'create')
            ->notEmpty('doc_num');

        $validator
            ->date('birth_date')
            ->requirePresence('birth_date', 'create')
            ->notEmpty('birth_date');

        $validator
            ->integer('id_gender')
            ->requirePresence('id_gender', 'create')
            ->notEmpty('id_gender');

        $validator
            ->integer('id_nationality')
            ->requirePresence('id_nationality', 'create')
            ->notEmpty('id_nationality');

        $validator
            ->integer('id_marital_status')
            ->requirePresence('id_marital_status', 'create')
            ->notEmpty('id_marital_status');

        $validator
            ->integer('id_status')
            ->requirePresence('id_status', 'create')
            ->notEmpty('id_status');

        return $validator;
    }
}
