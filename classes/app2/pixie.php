<?php

namespace App;

/**
 * Pixie dependency container
 *
 * @property-read \PHPixie\DB $db Database module
 * @property-read \PHPixie\ORM $orm ORM module
 */
class Pixie extends \PHPixie\Pixie {

	//This is how PHPixie modules are enabled
	protected $modules = array(
		'db' => '\PHPixie\DB',
		'orm' => '\PHPixie\ORM'
	);
	
	//Feel free to add any methods
	//and properties to this class.
	
	//You will be able to easily access
	//them using the pixie object.
	
}