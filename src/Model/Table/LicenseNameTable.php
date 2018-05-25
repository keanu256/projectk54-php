<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LicenseName Model
 *
 * @method \App\Model\Entity\LicenseName get($primaryKey, $options = [])
 * @method \App\Model\Entity\LicenseName newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LicenseName[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LicenseName|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LicenseName patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LicenseName[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LicenseName findOrCreate($search, callable $callback = null, $options = [])
 */
class LicenseNameTable extends Table
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

        $this->setTable('license_name');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('license_type')
            ->allowEmpty('license_type', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');

        return $validator;
    }
}
