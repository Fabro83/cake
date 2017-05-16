<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AsoItemsPropieties Model
 *
 * @property \Cake\ORM\Association\BelongsTo $IteItems
 * @property \Cake\ORM\Association\BelongsTo $ItePropieties
 * @property \Cake\ORM\Association\BelongsTo $ItePropietyValues
 *
 * @method \App\Model\Entity\AsoItemsPropiety get($primaryKey, $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AsoItemsPropiety findOrCreate($search, callable $callback = null, $options = [])
 */
class AsoItemsPropietiesTable extends Table
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

        $this->setTable('aso_items_propieties');
        $this->setDisplayField('item_id');
        $this->setPrimaryKey(['item_id', 'propiety_id']);

        $this->belongsTo('IteItems', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ItePropieties', [
            'foreignKey' => 'propiety_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ItePropietyValues', [
            'foreignKey' => 'propiety_value_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['item_id'], 'IteItems'));
        $rules->add($rules->existsIn(['propiety_id'], 'ItePropieties'));
        $rules->add($rules->existsIn(['propiety_value_id'], 'ItePropietyValues'));

        return $rules;
    }
}
