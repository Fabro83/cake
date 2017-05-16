<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeoCountries Model
 *
 * @method \App\Model\Entity\GeoCountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeoCountry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeoCountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeoCountry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeoCountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeoCountry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeoCountry findOrCreate($search, callable $callback = null, $options = [])
 */
class GeoCountriesTable extends Table
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

        $this->setTable('geo_countries');
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
