<?php
namespace FishDiary\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * CaughtFishes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FishTypes
 * @property \Cake\ORM\Association\BelongsTo $FishingPlaces
 * @property \Cake\ORM\Association\BelongsTo $Lures
 * @property \Cake\ORM\Association\BelongsTo $WeatherTypes
 * @property \Cake\ORM\Association\HasMany   $CaughtFishNotes
 * @property \Cake\ORM\Association\HasMany   $CaughtFishPhotos
 *
 * @method \FishDiary\Model\Entity\CaughtFish get($primaryKey, $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish newEntity($data = null, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish[] newEntities(array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish|bool
 *          save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish
 *          patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish[] patchEntities($entities, array $data, array $options = [])
 * @method \FishDiary\Model\Entity\CaughtFish findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CaughtFishesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     *
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('caught_fishes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FishTypes', [
            'foreignKey' => 'fish_type_id',
            'joinType'   => 'INNER'
        ]);
        $this->belongsTo('FishingPlaces', [
            'foreignKey' => 'fishing_place_id',
            'joinType'   => 'INNER'
        ]);
        $this->belongsTo('Lures', [
            'foreignKey' => 'lure_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('WeatherTypes', [
            'foreignKey' => 'weather_type_id'
        ]);
        $this->hasMany('CaughtFishNotes', [
            'foreignKey' => 'caught_fish_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('CaughtFishPhotos', [
            'foreignKey' => 'caught_fish_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }


    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     *
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('caught_time')
            ->requirePresence('caught_time', 'create')
            ->notEmpty('caught_time');

        $validator
            ->boolean('released')
            ->requirePresence('released', 'create')
            ->notEmpty('released');

        $validator
            ->integer('weight')
            ->allowEmpty('weight');

        $validator
            ->integer('length')
            ->allowEmpty('length');

        $validator
            ->integer('air_pressure')
            ->allowEmpty('air_pressure');

        $validator
            ->integer('air_temperature')
            ->allowEmpty('air_temperature');

        $validator
            ->integer('water_temperature')
            ->allowEmpty('water_temperature');

        $validator
            ->integer('user_id')
            ->notEmpty('user_id');

        return $validator;
    }


    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     *
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fish_type_id'], 'FishTypes'));
        $rules->add($rules->existsIn(['fishing_place_id'], 'FishingPlaces'));
        $rules->add($rules->existsIn(['lure_id'], 'Lures'));
        $rules->add($rules->existsIn(['weather_type_id'], 'WeatherTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }


    /**
     * @param EntityInterface $entity
     * @param array           $options
     *
     * @return bool
     */
    public function save(EntityInterface $entity, $options = [])
    {
        parent::save($entity, $options);

        if (parent::save($entity, $options) && !empty($entity->get('photos'))) {
            $photosTable = TableRegistry::get('CaughtFishPhotos');
            foreach ($entity->get('photos') as $photo) {
                $tmp = explode('.', $photo['name']);
                $ext = end($tmp);
                $fileName = md5($photo['name']) . '.' . $ext;

                $ent = $photosTable->newEntity([
                    'caught_fish_id' => $entity->id,
                    'photo'          => $fileName,
                    'photo_dir'      => WWW_ROOT . 'img' . DS . 'caught-fishes',
                ]);
                if (!$photosTable->save($ent)) {
                    return false;
                }
                move_uploaded_file($photo['tmp_name'], WWW_ROOT . 'img' . DS . 'caught-fishes' . DS . $fileName);
            }
        }

        return true;
    }
}
