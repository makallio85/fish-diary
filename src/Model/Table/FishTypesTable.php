<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FishTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $CaughtFishes
 *
 * @method \FishDiary\Model\Entity\FishType get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\FishType newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\FishType[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\FishType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishType[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FishTypesTable extends Table
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

        $this->setTable('fish_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CaughtFishes', [
            'foreignKey' => 'fish_type_id'
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
}
