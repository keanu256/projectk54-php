<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Isadmin Model
 *
 * @method \App\Model\Entity\Isadmin get($primaryKey, $options = [])
 * @method \App\Model\Entity\Isadmin newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Isadmin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Isadmin|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Isadmin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Isadmin[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Isadmin findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminGroupTable extends Table
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

        $this->setTable('admin_group');
        $this->setDisplayField('userid');
        $this->setPrimaryKey('userid');

        $this->belongsTo('Users', [
            'foreignKey' => 'id',
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
            ->integer('userid')
            ->allowEmpty('userid', 'create');

        return $validator;
    }
}
