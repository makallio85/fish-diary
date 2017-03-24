<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lures Model
 *
 * @property \Cake\ORM\Association\BelongsTo $LureTypes
 * @property \Cake\ORM\Association\HasMany $CaughtFishes
 *
 * @method \FishDiary\Model\Entity\Lure get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\Lure newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\Lure[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\Lure|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\Lure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\Lure[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\Lure findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LuresTable extends Table
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

        $this->setTable('lures');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LureTypes', [
            'foreignKey' => 'lure_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CaughtFishes', [
            'foreignKey' => 'lure_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['lure_type_id'], 'LureTypes'));

        return $rules;
    }
}
