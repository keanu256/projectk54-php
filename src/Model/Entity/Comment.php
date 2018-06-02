<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property string $content
 * @property int $blog_id
 * @property int $comment_id
 *
 * @property \App\Model\Entity\Blog $blog
 * @property \App\Model\Entity\Comment[] $comments
 */
class Comment extends Entity
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
        'content' => true,
        'blog_id' => true,
        'comment_id' => true,
        'blog' => true,
        'comments' => true
    ];
}
