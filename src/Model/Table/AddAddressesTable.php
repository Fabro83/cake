<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AddAddresses Model
 *
 * @method \App\Model\Entity\AddAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\AddAddress newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AddAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AddAddress|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AddAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddress[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AddAddress findOrCreate($search, callable $callback = null, $options = [])
 */
class AddAddressesTable extends Table
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

        $this->setTable('add_addresses');
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
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->allowEmpty('cp');

        $validator
            ->allowEmpty('district');

        return $validator;
    }
}
