<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CaughtFishNotes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CaughtFish
 *
 * @method \FishDiary\Model\Entity\CaughtFishNote get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFishNote findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CaughtFishNotesTable extends Table
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

        $this->setTable('caught_fish_notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CaughtFish', [
            'foreignKey' => 'caught_fish_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('note', 'create')
            ->notEmpty('note');

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
        $rules->add($rules->existsIn(['caught_fish_id'], 'CaughtFish'));

        return $rules;
    }
}
