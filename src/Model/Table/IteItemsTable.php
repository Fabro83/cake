<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IteItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Files
 * @property \Cake\ORM\Association\BelongsTo $Sectors
 * @property \Cake\ORM\Association\BelongsTo $IteBudgets
 * @property \Cake\ORM\Association\BelongsTo $IteAcquisitionTypes
 * @property \Cake\ORM\Association\BelongsTo $IteStatuses
 * @property \Cake\ORM\Association\BelongsTo $IteClasses
 * @property \Cake\ORM\Association\BelongsTo $IteTypes
 *
 * @method \App\Model\Entity\IteItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\IteItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IteItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IteItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IteItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IteItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IteItem findOrCreate($search, callable $callback = null, $options = [])
 */
class IteItemsTable extends Table
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

        $this->setTable('ite_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->belongsTo('Files', [
        //     'foreignKey' => 'file_id'
        // ]);

        $this->belongsTo('IteBudgets', [
            'foreignKey' => 'budget_id'
        ]);
        $this->belongsTo('IteAcquisitionTypes', [
            'foreignKey' => 'acquisition_type_id'
        ]);
        $this->belongsTo('IteStatuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('IteClasses', [
            'foreignKey' => 'item_class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('IteTypes', [
            'foreignKey' => 'item_type_id',
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
            ->integer('year')
            ->allowEmpty('year');

        $validator
            ->integer('decree')
            ->allowEmpty('decree');

        $validator
            ->allowEmpty('comment');

        $validator
            ->integer('price')
            ->allowEmpty('price');

        $validator
            ->allowEmpty('picture');

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
        // $rules->add($rules->existsIn(['file_id'], 'Files'));
        $rules->add($rules->existsIn(['budget_id'], 'IteBudgets'));
        $rules->add($rules->existsIn(['acquisition_type_id'], 'IteAcquisitionTypes'));
        $rules->add($rules->existsIn(['status_id'], 'IteStatuses'));
        $rules->add($rules->existsIn(['item_class_id'], 'IteClasses'));
        $rules->add($rules->existsIn(['item_type_id'], 'IteTypes'));

        return $rules;
    }
}
