<?php
namespace Kaankilic\WTFilter\Facades;
use Illuminate\Support\Facades\Facade;

class WTFilter extends Facade {
	protected static function getFacadeAccessor() { 
		return 'WTFilter'; 
	}
}