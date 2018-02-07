<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Location Model
 *
 * @method \App\Model\Entity\Location get($primaryKey, $options = [])
 * @method \App\Model\Entity\Location newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Location[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Location|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Location patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Location[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Location findOrCreate($search, callable $callback = null, $options = [])
 */
class LocationTable extends Table
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

        $this->setTable('location');
        $this->setDisplayField('location_id');
        $this->setPrimaryKey('location_id');
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
            ->integer('location_id')
            ->allowEmpty('location_id', 'create');

        $validator
            ->scalar('country_code')
            ->maxLength('country_code', 255)
            ->allowEmpty('country_code');

        $validator
            ->scalar('country_name')
            ->maxLength('country_name', 255)
            ->allowEmpty('country_name');

        $validator
            ->scalar('region_code')
            ->maxLength('region_code', 255)
            ->allowEmpty('region_code');

        $validator
            ->scalar('region_name')
            ->maxLength('region_name', 255)
            ->allowEmpty('region_name');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmpty('city');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 255)
            ->allowEmpty('zip_code');

        $validator
            ->scalar('time_zone')
            ->maxLength('time_zone', 255)
            ->allowEmpty('time_zone');

        $validator
            ->scalar('latitude')
            ->maxLength('latitude', 255)
            ->allowEmpty('latitude');

        $validator
            ->scalar('longitude')
            ->maxLength('longitude', 255)
            ->allowEmpty('longitude');

        $validator
            ->scalar('metro_code')
            ->maxLength('metro_code', 255)
            ->allowEmpty('metro_code');

        $validator
            ->scalar('is_proxy')
            ->allowEmpty('is_proxy');

        $validator
            ->scalar('is_tor_node')
            ->allowEmpty('is_tor_node');

        $validator
            ->scalar('is_spam')
            ->allowEmpty('is_spam');

        $validator
            ->scalar('is_suspicious')
            ->allowEmpty('is_suspicious');

        return $validator;
    }
}
