<?php

namespace App\Item;

use App\Item;

class ConjuredManaCake extends Item
{
	
	public function __construct($quality,$sellIn)
    {
		$name = 'Conjured Mana Cake';
		
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
	
		if($this->quality > 0) {
		
			$this->quality -= 2;
		
		}
		
		if($this->quality < 0)
		{
			$this->quality = 0;
		
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
		
		if($this->sellIn < 0 && $this->quality > 0) {
			
			$this->quality -= 2;
			
		}
		
		if($this->quality < 0)
		{
			$this->quality = 0;
		
		}
			
	}
	
	
	
}