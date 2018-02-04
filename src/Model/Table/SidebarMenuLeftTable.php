<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SidebarMenuLeft Model
 *
 * @method \App\Model\Entity\SidebarMenuLeft get($primaryKey, $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SidebarMenuLeft findOrCreate($search, callable $callback = null, $options = [])
 */
class SidebarMenuLeftTable extends Table
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

        $this->setTable('sidebar_menu_left');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('SidebarLeftChild', [
            'foreignKey' => 'child_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 255)
            ->allowEmpty('icon');

        return $validator;
    }
}
