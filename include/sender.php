<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "sender_footer2", Array(
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"COMPONENT_TEMPLATE" => ".default",
		"USE_PERSONALIZATION" => "Y",	// Определять подписку текущего пользователя
		"CONFIRMATION" => "Y",	// Запрашивать подтверждение подписки по email
		"HIDE_MAILINGS" => "N",	// Скрыть список рассылок, и подписывать на все
		"SHOW_HIDDEN" => "N",	// Показать скрытые рассылки для подписки
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
	),
	false
);?>
