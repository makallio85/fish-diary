<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FishingPlaceTypes Model
 *
 * @method \FishDiary\Model\Entity\FishingPlaceType get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlaceType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FishingPlaceTypesTable extends Table
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

        $this->setTable('fishing_place_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
