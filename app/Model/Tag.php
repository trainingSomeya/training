<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property PostTag $PostTag
 */
class Tag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
			'Post' =>
			array(
				'className'              => 'Post',
				'joinTable'              => 'posts_tags',
				'foreignKey'             => 'tag_id',
				'associationForeignKey'  => 'post_id',
				'unique'                 => true,
				'with'             => 'PostsTag',
			     )
			);
}
