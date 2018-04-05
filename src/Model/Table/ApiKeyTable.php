<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;

/**
 * ApiKey Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ApiKey get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApiKey newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ApiKey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApiKey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApiKey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApiKey[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApiKey findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApiKeyTable extends Table
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

        $this->setTable('api_key');
        $this->setDisplayField('api_key');
        $this->setPrimaryKey(['api_key', 'user_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->scalar('api_key')
            ->maxLength('api_key', 255)
            ->allowEmpty('api_key', 'create');

        $validator
            ->dateTime('expried')
            ->allowEmpty('expried');

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

    public function checkKey($key){
        $rs = $this->find()->where(['api_key' => $key, 'expried >=' => Time::now()])->first();
        return !empty($rs);
    }
}
