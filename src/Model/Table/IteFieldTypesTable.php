<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IteFieldTypes Model
 *
 * @method \App\Model\Entity\IteFieldType get($primaryKey, $options = [])
 * @method \App\Model\Entity\IteFieldType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IteFieldType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IteFieldType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IteFieldType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IteFieldType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IteFieldType findOrCreate($search, callable $callback = null, $options = [])
 */
class IteFieldTypesTable extends Table
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

        $this->setTable('ite_field_types');
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
