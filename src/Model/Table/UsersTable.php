<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->hasOne('AdminGroup',[
            'foreignKey' => 'userid',
            'propertyName' => 'adminCheck'
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
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->allowEmpty('fullname');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmpty('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->date('dob')
            ->allowEmpty('dob');

        $validator
            ->integer('sex')
            ->allowEmpty('sex');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmpty('facebook');

        $validator
            ->scalar('google')
            ->maxLength('google', 255)
            ->allowEmpty('google');

        $validator
            ->scalar('token')
            ->maxLength('token', 16777215)
            ->allowEmpty('token');

        $validator
            ->integer('verify')
            ->allowEmpty('verify');

        $validator
            ->scalar('sociallogged')
            ->allowEmpty('sociallogged');

        $validator
            ->scalar('passcode')
            ->maxLength('passcode', 255)
            ->allowEmpty('passcode');

        $validator
            ->scalar('isadmin')
            ->allowEmpty('isadmin');

        $validator
            ->integer('flag')
            ->requirePresence('flag', 'create')
            ->notEmpty('flag');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function getData($data){
        $connectionDB = ConnectionManager::get('default');
        $page = isset($data['page']) ? $data['page'] : 1;
        $page = $page < 1 ? 1 : $page;
        $limit = isset($data['limit']) ? $data['limit'] : 0;
        $limit = $limit > 1000 ? 1000 : $limit;
        $limit = $limit <= 0 ? 20 : $limit;

        $condition = isset($data['where']) ? $data['where'] : null;

        $result = null;

        $offset = ($page - 1);

        if($page != 1 && $page != 0){
            $offset = ($page - 1) * $limit;
        }

        if($condition != null AND !empty($condition)){
            try{
                
                $result = $this->find()
                    ->select(['id','fullname','avatar'])
                    ->limit($limit)
                    ->page($offset + 1)
                    ->where($condition)
                    ->toArray();

            }catch(\Exception $e){
                        
            }
            
        }else{
            $result = $connectionDB->execute(
                'CALL GetUsers(?, ?)', 
                [$offset, $limit]
            )->fetchAll('assoc');
        }   

        return $result;
    }

    public function insertData($data){
        
    }

    public function updateData($data){
        
    }

    public function deleteData($data){
        
    }
}
