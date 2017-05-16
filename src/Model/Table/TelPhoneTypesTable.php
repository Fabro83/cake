<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelPhoneTypes Model
 *
 * @method \App\Model\Entity\TelPhoneType get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelPhoneType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelPhoneType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelPhoneType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelPhoneType findOrCreate($search, callable $callback = null, $options = [])
 */
class TelPhoneTypesTable extends Table
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

        $this->setTable('tel_phone_types');
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
            ->allowEmpty('value');

        return $validator;
    }
}
