<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LoginHistory Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $ip_address
 * @property string $country_code
 * @property string $country_name
 * @property string $region_code
 * @property string $region_name
 * @property string $city
 * @property string $zip_code
 * @property string $time_zone
 * @property string $latitude
 * @property string $longitude
 * @property string $metro_code
 * @property string $suspicious_factors
 * @property string $is_proxy
 * @property string $is_tor_node
 * @property string $is_spam
 * @property string $is_suspicious
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\User $user
 */
class LoginHistory extends Entity
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
        'user_id' => true,
        'ip_address' => true,
        'country_code' => true,
        'country_name' => true,
        'region_code' => true,
        'region_name' => true,
        'city' => true,
        'zip_code' => true,
        'time_zone' => true,
        'latitude' => true,
        'longitude' => true,
        'metro_code' => true,
        'suspicious_factors' => true,
        'is_proxy' => true,
        'is_tor_node' => true,
        'is_spam' => true,
        'is_suspicious' => true,
        'created' => true,
        'user' => true
    ];
}
