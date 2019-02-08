<?php
class Magecomp_Cookiecompliance_Helper_Data extends Mage_Core_Helper_Abstract
{
	const ENABLE	  	  =	"cookiecompliance/general/enabled";
	const MSG  			  =	"cookiecompliance/content/massage";
	const BGCOLOR  		  = "cookiecompliance/design/background_color";
	const TEXTCOLOR		  = "cookiecompliance/design/text_color";
	const BTN_BG_COLOR    = "cookiecompliance/design/button_bg_color";
	const BTN_TEXT_COLOR  = "cookiecompliance/design/button_text_color";
	const LINK 			  =	"cookiecompliance/content/link";
	const TEXT 			  =	"cookiecompliance/content/text";
	const FACEBOOK_ID 	  =	"cookiecompliance/content/facebook_pixel_id";
	const GOOGLE_ID 	  =	"cookiecompliance/content/google_analytics_id";
	const GOOGLE_ENABLE   =	"cookiecompliance/content/google";
	const FACEBOOK_ENABLE = "cookiecompliance/content/facebook";
	const POSITION 		  = "cookiecompliance/design/position";
	
	public function isEnable()
	{
		return Mage::getStoreConfig(self::ENABLE);
	}
	public function getMsg()
	{
		return Mage::getStoreConfig(self::MSG);
	}
	public function getBgColor()
	{
		return "#".Mage::getStoreConfig(self::BGCOLOR);
	}
	public function getTextColor()
	{
		return "#".Mage::getStoreConfig(self::TEXTCOLOR);
	}
	public function getBtnBgColor()
	{
		return "#".Mage::getStoreConfig(self::BTN_BG_COLOR);
	}
	public function getBtnColor()
	{
		return "#".Mage::getStoreConfig(self::BTN_TEXT_COLOR);
	}
	public function getText()
	{
		return Mage::getStoreConfig(self::TEXT);
	}
	public function getFacebookId()
	{
		return Mage::getStoreConfig(self::FACEBOOK_ID);
	}
	public function getGoogleId()
	{
		return Mage::getStoreConfig(self::GOOGLE_ID);
	}
	public function isGoogleEnable()
	{
		return Mage::getStoreConfig(self::GOOGLE_ENABLE);
	}
	public function isFacebookEnable()
	{
		return Mage::getStoreConfig(self::FACEBOOK_ENABLE);
	}
	public function getPosition()
	{
		return Mage::getStoreConfig(self::POSITION);
	}
}

