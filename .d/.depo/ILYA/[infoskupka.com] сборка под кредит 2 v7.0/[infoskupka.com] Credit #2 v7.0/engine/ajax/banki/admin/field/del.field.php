<?php
/*
=====================================================
 Файл: del.field.php
=====================================================
 Данный код защищен авторскими правами
=====================================================
 Назначение: удаление дополнительного поля
=====================================================
*/

//-------------------------------------------------====
//	Инициализация
//-------------------------------------------------====

define( "ROOT_DIR", "../../../../.." );
define( "ENGINE_DIR", "../../../.." );
require_once( ENGINE_DIR."/ajax/banki/admin/OptAjax.php" );

//-------------------------------------------------====
//	Само удаление
//-------------------------------------------------====

if( $Banki->Field === false ) $Banki->StartField( true );
$id = intval( $_REQUEST['id'] );
if( $id )
	{
		if( $Banki->Field->DB[ $id ] )
			{
				$Banki->Field->Delete( $id );
			}
				else
			{
				echoReturn( "Доп. поля не существует, или оно было удалено!" );
			}
	}
		else
	{
		echoReturn( "Не указан идентификатор доп. поля!" );
	}

//-------------------------------------------------====
//	Завершение работы
//-------------------------------------------------====

$db->close();

?>