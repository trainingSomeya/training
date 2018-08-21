<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property User $User
 */
class Post extends AppModel {

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category'
	);

	//hasMany associations
	/*public $hasMany = array(
			'Image' => array(
				'className' => 'Image',
				'foreignKey' => 'Image_id',
				'conditions' => array(
					'Image.model' => 'Post',
					),
				),
			);*/

	//belongToMany associations
	public $hasAndBelongsToMany = array(
			'Tag' => 
			array(
				'className'              => 'tag',
				'joinTable'              => 'posts_tags',
				'foreignKey'             => 'post_id',
				'associationForeignKey'  => 'tag_id',
				'unique'                 => true,
				'conditions'             => '',
				'fields'                 => '',
				'order'                  => '',
				'limit'                  => '',
				'offset'                 => '',
				'finderQuery'            => '',
				'deleteQuery'            => '',
				'insertQuery'            => ''
			     )
			);


	//検索パターンの設定
	public $actsAs = array('Search.Searchable');
	public $filterArgs = array('title' => array('type' => 'like'),
			'categoryname' => array('type' => 'like'));
	/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
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
}
