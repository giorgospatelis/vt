<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vessels Model
 *
 * @property \App\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsToMany $Statuses
 * @property \App\Model\Table\TypesTable&\Cake\ORM\Association\BelongsToMany $Types
 *
 * @method \App\Model\Entity\Vessel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vessel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vessel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vessel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vessel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vessel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vessel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vessel findOrCreate($search, callable $callback = null, $options = [])
 */
class VesselsTable extends Table
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

        $this->setTable('vessels');
        $this->setDisplayField('id_vessel');
        $this->setPrimaryKey('id_vessel');

        $this->belongsToMany('Statuses', [
            'foreignKey' => 'vessel_id',
            'targetForeignKey' => 'status_id',
            'joinTable' => 'vessels_statuses',
        ]);
        $this->belongsToMany('Types', [
            'foreignKey' => 'vessel_id',
            'targetForeignKey' => 'type_id',
            'joinTable' => 'vessels_types',
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
            ->integer('id_vessel')
            ->allowEmptyString('id_vessel', null, 'create');

        $validator
            ->integer('mmsi')
            ->requirePresence('mmsi', 'create')
            ->notEmptyString('mmsi');

        $validator
            ->scalar('callsign')
            ->maxLength('callsign', 10)
            ->allowEmptyString('callsign');

        $validator
            ->integer('imo')
            ->requirePresence('imo', 'create')
            ->notEmptyString('imo');

        $validator
            ->decimal('length')
            ->requirePresence('length', 'create')
            ->notEmptyString('length');

        $validator
            ->decimal('width')
            ->requirePresence('width', 'create')
            ->notEmptyString('width');

        $validator
            ->integer('draught')
            ->requirePresence('draught', 'create')
            ->notEmptyString('draught');

        return $validator;
    }
}
