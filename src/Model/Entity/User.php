<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $phone
 * @property string $email
 * @property \Cake\I18n\FrozenDate $dob
 * @property int $sex
 * @property string $facebook
 * @property string $google
 * @property string $token
 * @property int $verify
 * @property string $sociallogged
 * @property string $passcode
 * @property string $isadmin
 * @property int $flag
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'fullname' => true,
        'phone' => true,
        'email' => true,
        'dob' => true,
        'sex' => true,
        'facebook' => true,
        'google' => true,
        'token' => true,
        'verify' => true,
        'sociallogged' => true,
        'passcode' => true,
        'isadmin' => true,
        'flag' => true,
        'created' => true,
        'updated' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];
}
