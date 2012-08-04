<?php

class PluginTwitt_BlockLasttwitt extends Block {
    
    public function Exec() {
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