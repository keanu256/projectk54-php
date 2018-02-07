<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LoginHistories Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\LoginHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\LoginHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LoginHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LoginHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoginHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LoginHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LoginHistory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LoginHistoriesTable extends Table
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

        $this->setTable('login_histories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->scalar('ip_address')
            ->maxLength('ip_address', 255)
            ->allowEmpty('ip_address');

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
            ->scalar('suspicious_factors')
            ->maxLength('suspicious_factors', 255)
            ->allowEmpty('suspicious_factors');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
