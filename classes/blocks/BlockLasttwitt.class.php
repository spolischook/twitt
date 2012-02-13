<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Обработка блока компаний
 *
 */
class PluginTwitt_BlockLasttwitt extends Block {
    
    public function Exec() {
        /**
		 * Получаем список блогов
		 */
		$oTwitt = $this->PluginTwitt_Twitt_GetTwittByName(Config::Get('module.twitt.siteaccount')); 	
		/**
		 * Загружаем переменные в шаблон
		 */
		$this->Viewer_Assign("oTwitt", $oTwitt);

    }
}
?>