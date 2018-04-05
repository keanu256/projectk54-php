<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use App\Model\Entity\ApiRequestLog;

/**
 * ApiRequestLog Model
 *
 * @method \App\Model\Entity\ApiRequestLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApiRequestLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ApiRequestLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApiRequestLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApiRequestLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApiRequestLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApiRequestLog findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApiRequestLogTable extends Table
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

        $this->setTable('api_request_log');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('api_key')
            ->maxLength('api_key', 255)
            ->allowEmpty('api_key');

        $validator
            ->scalar('target')
            ->maxLength('target', 255)
            ->allowEmpty('target');

        $validator
            ->scalar('action')
            ->maxLength('action', 255)
            ->allowEmpty('action');

        $validator
            ->scalar('data')
            ->allowEmpty('data');

        return $validator;
    }

    public function logData(ApiRequestLog $entity){  
       $this->save($entity);
    }
}