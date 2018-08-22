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
				'img' => array(
					)
				)
			);
}
