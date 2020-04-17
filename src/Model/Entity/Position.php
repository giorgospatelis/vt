<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Position Entity
 *
 * @property int $id_position
 * @property int $id_vessel
 * @property float $lat
 * @property float $lon
 * @property int|null $heading
 * @property int $course
 * @property int $speed
 */
class Position extends Entity
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
        'id_vessel' => true,
        'lat' => true,
        'lon' => true,
        'heading' => true,
        'course' => true,
        'speed' => true,
    ];
}
