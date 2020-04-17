<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vessel Entity
 *
 * @property int $id_vessel
 * @property int $mmsi
 * @property string|null $callsign
 * @property int $imo
 * @property float $length
 * @property float $width
 * @property int $draught
 *
 * @property \App\Model\Entity\Status[] $statuses
 * @property \App\Model\Entity\Type[] $types
 */
class Vessel extends Entity
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
        'mmsi' => true,
        'callsign' => true,
        'imo' => true,
        'length' => true,
        'width' => true,
        'draught' => true,
        'statuses' => true,
        'types' => true,
    ];
}
