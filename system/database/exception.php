<?php namespace System\Database;

/**
 * Nano
 *
 * Just another php framework
 *
 * @package		nano
 * @link		http://madebykieron.co.uk
 * @copyright	Copyright 2013 Kieron Wilson
 * @license		http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use Exception as NativeException;

class Exception extends NativeException {

	public function __construct($sql, $exception) {
		parent::__construct($exception->getMessage() . '<br><code>' . $sql . '</code>', 0, $exception);
	}

}