<?php
namespace FishDiary\Model\Entity;

use Cake\ORM\Entity;

/**
 * CaughtFish Entity
 *
 * @property int $id
 * @property int $fish_type_id
 * @property int $fishing_place_id
 * @property int $lure_id
 * @property \Cake\I18n\Time $caught_time
 * @property bool $released
 * @property int $weight
 * @property int $length
 * @property int $air_pressure
 * @property int $air_temperature
 * @property int $water_temperature
 * @property int $weather_type_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \FishDiary\Model\Entity\FishType $fish_type
 * @property \FishDiary\Model\Entity\FishingPlace $fishing_place
 * @property \FishDiary\Model\Entity\Lure $lure
 * @property \FishDiary\Model\Entity\WeatherType $weather_type
 * @property \FishDiary\Model\Entity\CaughtFishNote[] $caught_fish_notes
 * @property \FishDiary\Model\Entity\CaughtFishPhoto[] $caught_fish_photos
 */
class CaughtFish extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
