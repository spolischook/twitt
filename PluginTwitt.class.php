<?php
class PluginTwitt extends Plugin {
	public function Activate() {
		return true;
	}

	public function Init() {
        /**
         * Получаем последний твитт
         */
        $oTwitt = $this->PluginTwitt_Twitt_GetTwittByName(Config::Get('module.twitt.siteaccount'));

        /**
         * Загружаем переменные в шаблон
         */
        $this->Viewer_Assign("oTwitt", $oTwitt);
	}
}
?>