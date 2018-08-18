<?php
require __DIR__. '../../../config.php';
///////////// CONFIG /////////////

require __DIR__ . '/MinecraftPing.php';
require __DIR__ . '/MinecraftPingException.php';
require __DIR__ . '/MinecraftSkin.php';

$players = array('test', 'test1'); // players to be displayed
//////////////////////////////////

$mc = new MinecraftSkin();

foreach ($players as $player)
{
	$mc->getFace($player);
}
try
{
		$Query = new MinecraftPing( $SERVER_IP, $PORT );

		$data = $Query->Query();
		$status = 'online';
}
catch( MinecraftPingException $e )
{
		echo $e->getMessage();
		$status = 'offline';
}

?>