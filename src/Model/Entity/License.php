<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * License Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $license_type
 * @property \Cake\I18n\FrozenTime $expired
 * @property \Cake\I18n\FrozenTime $updated
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\License $license
 */
class License extends Entity
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
        'license_type' => true,
        'expired' => true,
        'updated' => true,
        'created' => true,
        'user' => true,
        'license' => true
    ];
}
