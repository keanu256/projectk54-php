<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ApiRequestLog Entity
 *
 * @property int $id
 * @property string $api_key
 * @property string $target
 * @property string $action
 * @property string $data
 * @property \Cake\I18n\FrozenTime $created
 */
class ApiRequestLog extends Entity
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
        'api_key' => true,
        'target' => true,
        'action' => true,
        'data' => true,
        'created' => true
    ];
}
