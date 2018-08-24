<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 */
class Image extends AppModel {
	var $actsAs = array(
			'Upload.Upload' => array(
				//画像保存用のフィールド名
				'filename' => array(
					)
				)
			);

	public $belongsTo = array(
			'Post' => array(
				'className' => 'Post',
				'foreighKey' => 'post_id'
				)
			); 
}
