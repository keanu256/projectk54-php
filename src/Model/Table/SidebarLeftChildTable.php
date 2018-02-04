<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SidebarLeftChild Model
 *
 * @method \App\Model\Entity\SidebarLeftChild get($primaryKey, $options = [])
 * @method \App\Model\Entity\SidebarLeftChild newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SidebarLeftChild[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SidebarLeftChild|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SidebarLeftChild patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SidebarLeftChild[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SidebarLeftChild findOrCreate($search, callable $callback = null, $options = [])
 */
class SidebarLeftChildTable extends Table
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

        $this->setTable('sidebar_left_child');
        $this->setDisplayField('name');

        $this->belongsTo('SidebarMenuLeft', [
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
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        return $validator;
    }
}
