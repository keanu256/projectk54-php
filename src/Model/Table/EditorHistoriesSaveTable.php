<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EditorHistoriesSave Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\EditorHistoriesSave get($primaryKey, $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EditorHistoriesSave findOrCreate($search, callable $callback = null, $options = [])
 */
class EditorHistoriesSaveTable extends Table
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

        $this->setTable('editor_histories_save');
        $this->setDisplayField('url');
        $this->setPrimaryKey(['url', 'user_id']);

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
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url', 'create');

        $validator
            ->scalar('content')
            ->allowEmpty('content');

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
