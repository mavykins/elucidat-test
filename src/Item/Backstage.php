<?php

namespace App\Item;

use App\Item;

class Backstage extends Item
{
	
	public function __construct($quality,$sellIn)
    {
		$name = 'Backstage passes to a TAFKAL80ETC concert';
		
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
			
			// 10 or Less Days
			if($this->quality < 50 && $this->sellIn <= 10) {
			
				$this->quality++;
			
			}
			// 5 or Less Days
			if($this->quality < 50 && $this->sellIn <= 5) {
			
				$this->quality++;
			
			}

		
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
		
		if($this->sellIn < 0) {
			
			$this->quality = 0;
			
		}
		
	}
	
	
	
}