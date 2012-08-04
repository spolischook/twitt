<?php
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