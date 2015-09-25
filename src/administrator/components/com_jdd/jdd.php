<?php
use FOF30\Container\Container;

// Jexec check
defined('_JEXEC') or die;

// Check if FOF 3.0 is installed
if(!defined('FOF30_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof30/include.php'))
{
	throw new RuntimeException('FOF 3.0 is not installed!', 500);
}

// Dispatch the component
Container::getInstance('com_jdd')->dispatcher->dispatch();