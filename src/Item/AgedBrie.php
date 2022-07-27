<?php

namespace App\Item;

use App\Item;

class AgedBrie extends Item
{
	
	public function __construct($quality,$sellIn)
    {
		$name = 'Aged Brie';
		
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
		
		$this->updateQuality();
		$this->updateSellIn();
				
	}

	/**
	* Update Quality
	@
	@
	@return void
	*/
	public function updateQuality(): void
	{
		
		if($this->quality < 50) {
		
			$this->quality++;
		
		}
			
	}
	
	/**
	* Update Update Sell In
	@
	@
	@return void
	*/
	public function updateSellIn():void
	{
		
		$this->sellIn--;
		
		if($this->sellIn < 0 && $this->quality < 50) {
			
			$this->quality++;
			
		}
		
	}
	
	
	
}