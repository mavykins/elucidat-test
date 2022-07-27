<?php

namespace App\Item;

use App\Item;

class Sulfuras extends Item
{
	
	public function __construct($quality,$sellIn)
    {
		$name = 'Sulfuras, Hand of Ragnaros';

        parent::__construct($name,$quality,$sellIn);
    }
	
	/**
	* Process Next Day
	@
	@
	@return void
	*/
	public function nextDay(): void
	{
		

				
	}
	
}