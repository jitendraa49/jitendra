<?php
App::uses('AppModel', 'Model');
/**
 * Permission Model
 *
 * @property Role $Role
 * @property PermissionModule $PermissionModule
 */
class Category extends AppModel {
	public $useTable = 'category';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	/*public $belongsTo = array(
		'RoleType' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PermissionModule' => array(
			'className' => 'PermissionModule',
			'foreignKey' => 'module_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
}
