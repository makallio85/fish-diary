<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LureTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Lures
 *
 * @method \FishDiary\Model\Entity\LureType get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\LureType newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\LureType[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\LureType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\LureType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\LureType[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\LureType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LureTypesTable extends Table
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

        $this->setTable('lure_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Lures', [
            'foreignKey' => 'lure_type_id'
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
