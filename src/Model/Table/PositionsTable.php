<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positions Model
 *
 * @method \App\Model\Entity\Position get($primaryKey, $options = [])
 * @method \App\Model\Entity\Position newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Position[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Position|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Position saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Position patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Position[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Position findOrCreate($search, callable $callback = null, $options = [])
 */
class PositionsTable extends Table
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

        $this->setTable('positions');
        $this->setDisplayField('id_position');
        $this->setPrimaryKey('id_position');
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
            ->integer('id_position')
            ->allowEmptyString('id_position', null, 'create');

        $validator
            ->integer('id_vessel')
            ->requirePresence('id_vessel', 'create')
            ->notEmptyString('id_vessel');

        $validator
            ->decimal('lat')
            ->requirePresence('lat', 'create')
            ->notEmptyString('lat');

        $validator
            ->decimal('lon')
            ->requirePresence('lon', 'create')
            ->notEmptyString('lon');

        $validator
            ->integer('heading')
            ->allowEmptyString('heading');

        $validator
            ->integer('course')
            ->requirePresence('course', 'create')
            ->notEmptyString('course');

        $validator
            ->integer('speed')
            ->requirePresence('speed', 'create')
            ->notEmptyString('speed');

        return $validator;
    }
}
