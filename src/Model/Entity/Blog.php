<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $preview
 * @property string $author
 * @property int $viewers
 * @property int $likes
 * @property string $tags
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Category $category
 */
class Blog extends Entity
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
        'title' => true,
        'description' => true,
        'content' => true,
        'preview' => true,
        'author' => true,
        'viewers' => true,
        'likes' => true,
        'tags' => true,
        'category_id' => true,
        'created' => true,
        'category' => true
    ];
}
