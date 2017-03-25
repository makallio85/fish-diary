<?php
namespace FishDiary\Model\Entity;

use Cake\ORM\Entity;

/**
 * CaughtFishPhoto Entity
 *
 * @property int $id
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $caught_fish_id
 *
 * @property \FishDiary\Model\Entity\CaughtFish $caught_fish
 */
class CaughtFishPhoto extends Entity
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
