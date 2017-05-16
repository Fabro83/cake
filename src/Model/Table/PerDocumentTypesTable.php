<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerDocumentTypes Model
 *
 * @method \App\Model\Entity\PerDocumentType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerDocumentType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerDocumentType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerDocumentType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerDocumentType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerDocumentType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerDocumentType findOrCreate($search, callable $callback = null, $options = [])
 */
class PerDocumentTypesTable extends Table
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

        $this->setTable('per_document_types');
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
