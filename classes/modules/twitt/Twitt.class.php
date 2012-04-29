<?php
/*
---------------------------------------------------------
*
*	Module "Twitt"
*	Author: Grebenkin Anton
*	Contact e-mail: 4freework@gmail.com
*
---------------------------------------------------------
*/

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));

/**
 * Модуль для работы с твиттером
 *
 */
class PluginTwitt_ModuleTwitt extends Module {	
	public function Init() {
	}

	/**
	 * Получаем данные статуса по имени аккаунта в твиттере
	 * @param $sAccountName string
	 * @return bool|mixed
	 */
	protected function GetTwitterStatus($sAccountName){
		$sTwitterXML = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=".$sAccountName."&count=1"; 
		if ($oXml = @simplexml_load_file($sTwitterXML)) { 
			$oTwitt = Engine::GetEntity('PluginTwitt_Twitt_Twitt');
			$oTwitt->setText((string)$oXml->{"status"}->text);
			return $oTwitt;
		} 
		return false;
	}

	/**
	 * Получаем данные статуса по имени аккаунта используя кэш
	 *
	 * @param $sAccountName string
	 * @return bool|mixed
	 */
	public function GetTwittByName($sAccountName) {
		//$this->Cache_Clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG,array("twitter_status_{$sAccountName}","twitter_update"));
		if (false === ($data = $this->Cache_Get("twitter_status_{$sAccountName}"))) {			
			$data = $this->GetTwitterStatus($sAccountName); 
			$this->Cache_Set($data, "twitter_status_{$sAccountName}", array('twitter_update'), Config::Get('module.twitt.update_rate'));
		}
		return $data;	
	}	
}
?>