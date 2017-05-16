<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerStatuses Model
 *
 * @method \App\Model\Entity\PerStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class PerStatusesTable extends Table
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

        $this->setTable('per_statuses');
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
