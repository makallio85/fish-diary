<?php
namespace FishDiary\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FishingPlaces Model
 *
 * @property \Cake\ORM\Association\HasMany $CaughtFishes
 *
 * @method \FishDiary\Model\Entity\FishingPlace get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\FishingPlace findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FishingPlacesTable extends Table
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

        $this->setTable('fishing_places');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CaughtFishes', [
            'foreignKey' => 'fishing_place_id'
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
