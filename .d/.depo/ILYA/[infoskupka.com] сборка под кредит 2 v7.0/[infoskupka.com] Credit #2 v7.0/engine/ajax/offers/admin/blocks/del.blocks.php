<?php
/*
=====================================================
 Файл: del.currency.php
=====================================================
 Данный код защищен авторскими правами
=====================================================
 Назначение: удаление валюты
=====================================================
*/

//-------------------------------------------------====
//	Инициализация
//-------------------------------------------------====

define( "ROOT_DIR", "../../../../.." );
define( "ENGINE_DIR", "../../../.." );
require_once( ENGINE_DIR."/ajax/offers/admin/OptAjax.php" );

//-------------------------------------------------====
//	Само удаление
//-------------------------------------------------====

$id = intval( $_REQUEST['id'] );
if( $id )
	{
		if( $Offers->DB['blocks'][ $id ] )
			{
				$db->query( "DELETE FROM ".PREFIX."_offers_options WHERE `id`='{$id}' LIMIT 1" );
				$Offers->CleareAllCache();
			}
				else
			{
				echoReturn( "Блок не существует, или он был удалён!" );
			}
	}
		else
	{
		echoReturn( "Не указан идентификатор блока!" );
	}

//-------------------------------------------------====
//	Завершение работы
//-------------------------------------------------====

$db->close();

?>