<?php
/**
 * @author: KONARD
 * @version: 1.0
 */

namespace fw\modules;


abstract class AbstractProvider
{
	protected $DI;

	public function __construct(\fw\DI\DI $DI)
	{
		$this->DI = $DI;
	}

	abstract public function init();
}