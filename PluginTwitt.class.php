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

class PluginTwitt extends Plugin {

	/**
	 * Активация плагина Компании.
	 * Создание таблицы в базе данных при ее отсутствии.
	 */
	public function Activate() {
		//$this->ExportSQL(dirname(__FILE__).'/sql.sql');
		return true;
	}
	
	/**
	 * Инициализация плагина Компании
	 */
	public function Init() {
	}
}
?>