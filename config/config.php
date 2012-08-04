<?
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

Config::Set('module.twitt.update_rate', 60*15); 		// частота обновления
Config::Set('module.twitt.siteaccount', 'vaktive');     // имя twitter аккаунта



Config::Set('block.plugin_twitt', array(
	'action' => array(
		'index'
	),
	'blocks' => array(
		'right' => array(
			'lasttwitt'=> array('params' => array('plugin' => 'twitt'), 'priority' => 101),
		)
	),
	'clear' => false,
));


?>