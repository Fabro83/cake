<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AddAddressTypes Model
 *
 * @method \App\Model\Entity\AddAddressType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AddAddressType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AddAddressType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AddAddressType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AddAddressType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddressType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddressType findOrCreate($search, callable $callback = null, $options = [])
 */
class AddAddressTypesTable extends Table
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

        $this->setTable('add_address_types');
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
