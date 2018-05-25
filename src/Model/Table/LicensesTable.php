<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licenses Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\License get($primaryKey, $options = [])
 * @method \App\Model\Entity\License newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\License[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\License|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\License patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\License[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\License findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LicensesTable extends Table
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

        $this->setTable('licenses');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);

        $this->hasOne('LicenseName',[
            'foreignKey' => false,
            'queryBuilder' => function ($q) {
                $q->where(['LicenseName.license_type' => 'Licenses.license_type']);
                return $q->select(['name','description']);
            },
            'propertyName' => 'licenseName'
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
            ->integer('license_type')
            ->allowEmpty('license_type');

        $validator
            ->dateTime('expired')
            ->allowEmpty('expired');

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
