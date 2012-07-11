<?php

/**
 *	  [Discuz!] (C)2001-2099 Comsenz Inc.
 *	  This is NOT a freeware, use is subject to license terms
 *
 *	  $Id: lang_admincp_cloud.php 22900 2011-05-30 11:04:15Z yexinhao $
 */

$extend_lang = array
(
	'header_cloud' => 'Сервисы API',
	'header_navcloud' => 'Сервисы Discuz!',
	'nav_cloud' => 'Сервисы Discuz!',

	'menu_cloud_open' => 'API Discuz!',
	'menu_cloud_upgrade' => 'API Discuz!',
	'menu_cloud_applist' => 'Главная сервисов',
	'menu_cloud_siteinfo' => 'Информация о сайте',
	'menu_cloud_doctor' => 'Проверка',

	'menu_setting_manyou' => 'Настройки роуминга',
	'menu_setting_qqconnect' => 'Настройка QQ',

	'menu_cloud_manyou' => 'Роуминг',
	'menu_cloud_connect' => 'Соединение с QQ',
	'menu_cloud_search' => 'Поиск',
	'menu_cloud_stats' => 'Статистика Tencent',
	'menu_cloud_security' => 'Cloud Security',
	'menu_cloud_smilies' => 'Смайлы SOSO',
	'menu_cloud_qqgroup' => 'Сообщества QQ',
	'menu_cloud_union' => 'Филиал',

	'close' => 'Закрыть',
	'continue' => 'Продолжить',
	'message_title' => 'Сообщение',
	'jump_to_cloud' => 'Вам необходимо перейти в Discuz! платформу (http://cp.discuz.qq.com), чтобы завершить процесс открытия счета QQ.',

	'cloud_status_error' => 'При возникновении ошибок ID/KEY Discuz! в сервисе API вы можете всегда пройти <a href="admin.php?action=cloud&operation=doctor">диагностику </a> сайта. Если у Вас имеются вопросы, пожалуйста, посетите <a href="http://chinascript.ru" target="_blank">наш форум</a>.',

	'cloud_introduction' => 'Описание',
	'cloud_confirm_open' => 'Подтверждать открытие',
	'cloud_confirm_upgrade' => 'Подтверждить обновление',
	'cloud_page_loading' => 'Загрузка страницы ...',
	'cloud_time_out' => 'Вы не получили доступ к сервису API Discuz!, попробуйте обновить: <a href="javascript:;" onClick="location.reload()">Обновить</a>',
	'cloud_unknown_dns' => 'Ваш сайт не может подключиться к Discuz! API, пожалуйста, проверьте настройки сервера в сети, используйте для этого <a href="admin.php?action=cloud&operation=doctor">диагностический центр</a> на тест доступности DNS интерфейса подключения. <a href="http://cp.discuz.qq.com/faq?fId=1305690058&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">Справка</a>. Если у Вас имеются вопросы, пожалуйста, посетите <a href="http://chinascript.ru" target="_blank">наш форум</a>.',

	'cloud_category' => 'Установить категорию для сайта',
	'cloud_site_name' => 'Название сайта',
	'cloud_site_url' => 'URL сайта',
	'cloud_site_category' => 'Категория сайта',
	'cloud_select' => 'Пожалуйста, выберите',
	'cloud_agree_protocal' => 'Я прочитал и согласен с ',
	'read_protocal' => ' использованием Discuz! API.". ',
	'cloud_will_open' => 'Я хочу открыть',
	'cloud_will_upgrade' => 'Я хочу обновить',
	'cloud_protocal' => 'Договор об оказании услуг Discuz! API',
	'cloud_select_category' => 'Поиск по категориям сайта',
	'cloud_select_sub_category' => 'Пожалуйста, выберите подкатегории',
	'cloud_select_return' => 'Пожалуйста, выберите категорию сайта',
	'cloud_open_success' => 'Discuz! API успешно запущен!',
	'cloud_upgrade_success' => 'Discuz! API успешно обновлен!',
	'cloud_network_busy' => 'Сеть занята, повторите операцию позже. Причины: <br />{errMessage} (ERRCODE:{errCode})',
	'cloud_turnto_applist' => 'Ваш сайт API Discuz!',
	'cloud_site_id' => 'ID сайта',
	'cloud_api_ip_btn' => 'Установить интерфейс IP',
	'cloud_api_ip' => 'Интерфейс IP',
	'cloud_api_ip_comment' => 'Если сервер Вашего сайта, имеет проблемы с DNS и не может подключиться к интерфейсу, пожалуйста, попробуйте это решить на сайте api.discuz.qq.com <a href="admin.php?action=cloud&operation=doctor">в диагностическом центре</a>. <a href="http://cp.discuz.qq.com/faq?fId=1304068911&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">Справка</a>',
	'cloud_manyou_ip' => 'IP интерфейс роуминга',
	'cloud_manyou_ip_comment' => 'Если сервер Вашего сайта, имеет проблемы с DNS и не может подключиться к интерфейсу, пожалуйста, попробуйте это решить на сайте api.manyou.com <a href="admin.php?action=cloud&operation=doctor">в диагностическом центре</a>. Если у Вас имеются вопросы, пожалуйста, посетите <a href="http://chinascript.ru" target="_blank">наш форум</a>.',
	'cloud_connect_api_ip' => 'QQ Интернет-интерфейс IP',
	'cloud_connect_api_ip_comment' => 'Если сервер сайта имеет проблемы с DNS и не может подключиться к интерфейсу соединения QQ, пожалуйста, укажите IP адрес openapi.qzone.qq.com <a href="admin.php?action=cloud&operation=doctor">Проверить</a> и <a href="http://cp.discuz.qq.com/faq?fId=1316571929&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">Справка</a>',
	'cloud_ipsetting_success' => 'IP-интерфейс успешно настроен!',
	'cloud_open_first' => 'API Discuz!',
	'cloud_sync' => 'Синхронизация информации',
	'cloud_sync_success' => 'Синхронизация успешно завершена! ',
	'cloud_sync_failure' => 'Синхронизация информации сайта не удалась. Причины: <br />{errMessage} (ERRCODE:{errCode})<br /><br />Если у Вас имеются вопросы, пожалуйста, посетите <a href="http://chinascript.ru" target="_blank">наш форум</a>.',
	'cloud_resetkey' => 'Изменить KEY сайта',
	'cloud_reset_success' => 'KEY сайта успешно изменен! ',

	'cloud_siteinfo_tips' => '<li>При изменении названия узла или URL, пожалуйста, нажмите "Синхронизация информации". </li><li>Ключ сайта - KEY предназначен для безопасного общения и аутентификации платформы API. При потере или утечке ключа сайта, обязательно нажмите на кнопку "Изменить KEY сайта". <span style="color:red;">Будьте осторожны при использовании этой функции!</span></li>',

	'cloud_doctor_tips' => '<li>Проверка сервисов Discuz! позволяет определить взаимодействие платформ для совместного использования приложений и плагинов.</li>
		<li>ID Вашего сайта в сервисе точно идентифицирует Ваш сайт среди других сайтов и Вашему сайту выдается уникальный KEY-доступ.</li>',

	'cloud_doctor_setidkey' => 'Изменить ID и KEY сайта',
	'cloud_doctor_setidkey_tips' => '<li style="color:red">Изменять ID и KEY сайта только в крайнем случае, например утечке данных этого ключа, иначе это может привести к ошибке при передаче данных и других ошибок. </li>
		<li style="color:red">Перед изменением ID и KEY сайта, обязательно сделайте резервное копирование таблицы common_setting таблице. </li>',
	'cloud_site_key' => 'KEY сайта',
	'cloud_site_key_safetips' => ' (Скрыто по соображениям безопасности)',
	'cloud_site_key_comment' => 'Никогда не открывайте и не афишируйте KEY сайта!',
	'cloud_site_status' => 'Статус',
	'cloud_idkeysetting_success' => 'Статус ID/KEY сайта установлен успешно!',
	'cloud_idkeysetting_siteid_failure' => 'В ID-сайта должен быть только номер! Длина KEY должна быть не более 32 символов! Изменять его запрещено! В случае необходимости изменения, обратитесь в службу поддержки пользователей сервиса.',
	'cloud_idkeysetting_sitekey_failure' => 'В KEY-сайта должен быть только номер! Длина KEY должна быть не более 32 символов! Изменять его запрещено! В случае необходимости изменения, обратитесь в службу поддержки пользователей сервиса.',

	'cloud_doctor_result_success' => '<img align="absmiddle" src="static/image/admincp/cloud/right.gif" />',
	'cloud_doctor_result_failure' => '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> ',

	'cloud_doctor_api_test_other' => 'Тест IP-интерфейса',
	'cloud_doctor_manyou_test_other' => 'Тест роуминга',
	'cloud_doctor_dns_qzone' => 'QQ DNS',
	'cloud_doctor_dns_qzone_test' => 'Тест QQ IP интерфейса',
	'cloud_doctor_other_qzone_test' => 'QQ другие интерфейсы',
	'cloud_doctor_qzone_test_other' => 'Проверка IP интерфейса QQ',
	'cloud_doctor_api_test_success' => '%s запрос интерфейса %s завершен успешно и с проблемой %01.3f для %s',
	'cloud_doctor_api_test_failure' => '%s запрос интерфейса %s не удалось отправить, пожалуйста, проконсультируйтесь %s',
	'cloud_doctor_status_0' => 'Закрыто',
	'cloud_doctor_status_1' => 'Открыто',
	'cloud_doctor_status_2' => 'В процессе завершения',

	'cloud_doctor_title_status' => 'Статус системы',
	'cloud_doctor_modify_siteidkey' => 'Вручную изменить ID/KEY сайта',
	'cloud_doctor_close_yes' => 'Не отображать соединение',

	'cloud_site_version' => 'Версия',
	'cloud_site_release' => 'Дата релиза',

	'cloud_doctor_title_result' => 'Результат испытаний (<a href="#" onClick="self.location.reload();">Повторный тест</a>)',

	'cloud_doctor_php_ini_separator' => 'URL разделитель',
	'cloud_doctor_php_ini_separator_true' => 'Пустые или &',
	'cloud_doctor_php_ini_separator_false' => 'Установите значение в php.ini arg_separator.output ini_get функции, если она отключена, пожалуйста, свяжитесь с Вашим хостером.',

	'cloud_doctor_fsockopen_function' => 'Функция  fsockopen',
	'cloud_doctor_gethostbyname_function' => 'Функция DNS gethostbyname',
	'cloud_doctor_function_disable' => 'Функция отключена, пожалуйста, свяжитесь с хостером!',

	'cloud_doctor_dns_api' => 'DNS API',
	'cloud_doctor_dns_api_test' => 'Мастер тест DNS',
	'cloud_doctor_other_api_test' => 'Тест других интерфейсов API',
	'cloud_doctor_dns_manyou' => 'DNS роуминга',
	'cloud_doctor_dns_manyou_test' => 'Тест интерфейса роуминга',
	'cloud_doctor_other_manyou_test' => 'Тест других интерфейсов роуминга',

	'cloud_doctor_setting_ip' => 'Вручную установить IP: ',

	'cloud_doctor_dns_success' => '%s DNS установленный IP: %s %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">Установить IP-интерфейс</a>',
	'cloud_doctor_dns_failure' => '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> %s Не удалось установить DNS %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">Установить IP-интерфейс</a>',

	'cloud_doctor_title_plugin' => 'Система обнаружения плагинов',
	'cloud_doctor_system_plugin_status' => 'Система статусов плагинов',
	'cloud_doctor_system_plugin_list' => '<a href="admin.php?action=plugins">Список версий плагинов</a>',
	'cloud_doctor_system_plugin_status_false' => ' Система плагинов не инициализируется (слева меню не отображается)  <a href="misc.php?mod=initsys" target="_doctor_initframe" onClick="$(\'_doctor_initframe\').onload = function () {self.location.reload();};">Нажмите кнопку Восстановить </a><iframe id="_doctor_initframe" name="_doctor_initframe" src="" width="0" height="0" style="display:none;"></iframe>',
	'cloud_doctor_plugin_module_error' => 'Неправильные значения полей таблицы модулей common_plugin',

	'cloud_doctor_title_connect' => 'Тест QQ',
	'cloud_doctor_connect_app_id' => 'Связь QQ и appid',
	'cloud_doctor_connect_app_key' => 'Связь QQ appkey',
	'cloud_doctor_connect_reopen' => 'На текущем сайте appid/appkey потеряны <a href="admin.php?action=cloud&operation=applist">Открыть снова</a>.',

	'cloud_application_close' => 'На этом сайте нет открытых API сервисов. Вы можете открыть их.',
	'cloud_application_disable' => 'Ваш сайт был запрещен для получения данных услуг. При возникших вопросах, пожалуйста, посетите <a href="http://www.discuz.net/forum.php?gid=3923" target="_blank">Форум</a>.',

	'cloud_search_tips' => '<li>Поиск по роумингу, пользователь может воспользоваться функцией поиска по роумингу. </li>',

	'cloud_stats' => 'Анализ Tencent',
	'cloud_stats_tips' => '<li>Tencent анализ - анализ наиболее профессионального сообществ, Вы сможете отправлять свои данные сообщества.</li><li>Открыв Tencent анализ, Вы сможете просматривать все данные и за предыдущие дни. </li>',
	'cloud_stats_status' => 'Включить Tencent анализ',
	'cloud_stats_icon_set' => 'Выберите стиль (значок или текст, отображаемый в правом нижнем углу форума)',
	'cloud_stats_icon_none' => 'Не показывать значки и текст',
	'cloud_stats_icon_word9' => 'Tencent Анализ',
	'cloud_stats_icon_word10' => 'Статистика сайта',
	'cloud_stats_setting' => 'Создать',
	'cloud_stats_summary' => 'О сайте',

	'cloud_smilies' => 'SOSO смайлы',
	'cloud_smilies_tips' => '<li>При поске Вы получите массу удовольствия и опыта. </li>
		<li>Вы получите на своем сайте уникальные смайлы, он не будет уже таким однообразным. </li>',

	'cloud_smilies_status' => 'SOSO смайлы включены',

	'setting_manyou' => 'Настройки роуминга',
	'setting_manyou_tips' => '<li>После включения функции роуминга, пользователи смогут свободно выбирать различные приложения у себя в профиле (например: Texas Holdem, прыгающий богомол, десять мечей и мн. дрр...). </li>
		<li>Роуминг функция  <a target="_blank" href="http://www.manyou.com/www/">MYOP платформа</a>, Manyou Open Platform (Manyou/MYOP) разработчик Comsenz, <a href="http://wiki.developer.manyou.com/wiki/index.php?title=MYOP%E7%BD%91%E7%AB%99%E6%9C%8D%E5%8A%A1%E5%8D%8F%E8%AE%AE&printable=yes" target="_blank">Читать подробнее</a></li>.',
	'setting_manyou_base' => 'Основные параметры',
	'setting_manyou_base_status' => 'Включить роуминг',
	'setting_manyou_base_status_comment' => 'Включите, чтобы открыть роуминг. Если вы выключите роуминг, пользователи сайта не смогут использовать приложения роуминга.',
	'setting_manyou_search_status' => 'Включить поиск по роумингу',
	'setting_manyou_search_status_comment' => 'Поиск по роумингу предназначена для Discuz! сайтов. Это полнотекстовый внешний поиск без нагрузки на Ваш MySQL.',
	'setting_manyou_search_invite' => 'Поиск код приглашений роуминга',
	'setting_manyou_search_invite_comment' => 'В настоящее время в бета-версии, Вам нужно ввести код приглашения и искать только открытый роуминг, <a href="http://www.discuz.net/thread-1669366-1-1.html" target="_blank">Нажмите здесь, для подачи заявки на код приглашения</a>.',
	'setting_manyou_base_status_no' => 'Роуминг закрыт',
	'setting_manyou_base_ip' => 'IP роуминга приложений',
	'setting_manyou_base_ip_comment' => 'По умолчанию пуст. Если ваш сервер недоступен из-за проблем с разрешением DNS-роуминга, пожалуйста, заполните роуминг IP-адрес. <a href="http://faq.comsenz.com/viewnews-400" target="_blank">Посмотреть IP для роуминга приложений</a>.',
	'setting_manyou_base_close_prompt' => 'Закрыть оповещение роуминга',
	'setting_manyou_base_close_prompt_comment' => 'Закрытие обновлений роуминга приложений для Вашего сайта. Будет закрыва обновление информации для роумиг-приложений и новых приложений для роуминга. Отключив данную функцию, администратор не будете получать обновления.',
	'setting_manyou_base_open_app_prompt' => 'Оповещения роуминга',
	'setting_manyou_base_open_app_prompt_comment' => 'Оповещение пользователя о новинках роуминг приложений. Когда пользователь откроет окно браузера появится сообщение, в котором будет предложено установить обновление роуминга.',
	'setting_manyou_base_refresh' => 'Синхронизация информации роуминга',
	'setting_manyou_base_refresh_comment' => 'Если Вы измените название в навигации, параметры поиска, обязательно синхронизируйте информацию роуминга. ',
	'setting_manyou_base_showgift_comment' => 'Отображение страницы Рекомендуемые подарки. При открытии страницы будут отображаться подарки роуминг приложений.',
	'setting_manyou_manage' => 'Управление роумингом',
	'setting_manyou_search_manage' => 'Управление роуминг поиском',

	'connect_menu_setting' => 'Основные параметры',
	'connect_menu_service' => 'Меню сервиса',
	'connect_menu_stat' => 'Статистика',
	'connect_setting_allow' => 'Регистрация QQ/обязательный/Авторизация',
	'connect_setting_allow_comment' => 'Включение авторизации и регистрации пользователя на сайте через учетную запись QQ.',
	'connect_setting_siteid' => 'QQ обязательный ID сайта',
	'connect_setting_sitekey' => 'QQ обязательный KEY сайта',
	'connect_setting_feed_allow' => 'Отправка в ленту новостей QQ',
	'connect_setting_feed_allow_comment' => 'Cинхронная отправка размещенных материалов в ленту новостей QQ. При включении данной функции пользователи смогут одновременно отправлять новости на сайт и в новостную ленту QQ. Эту ленту, дополнительно, смогут просматривать миллионы пользователей, что даст мощный толчок для Вашего сайта и гарантированную популярность и интерес к Вашему ресурсу, а также привлечение новых пользователей.',
	'connect_setting_feed_fids' => 'Разрешенные форумы',
	'connect_setting_feed_group' => 'Разрешенные группы',
	'connect_setting_feed_group_comment' => 'Укажите группы, которые могут отправлять контент в новостную ленту QQ.',
	'connect_setting_t_allow' => 'Отправка сообщений в микроблоггинг Tencent',
	'connect_setting_t_allow_comment' => 'Разрешить отправку синхронизированных сообщений пользователей в микроблоггинг Tencent. При включении данной функции пользователи смогут одновременно отправлять сообщения на сайт и в микроблоггинг Tencent. Микроблоггинг, дополнительно, смогут просматривать миллионы пользователей, что даст мощный толчок для Вашего сайта и гарантированную популярность и интерес к Вашему ресурсу, а также привлечение новых пользователей.',
	'connect_setting_t_fids' => 'Разрешить отправку для форумов',
	'connect_setting_t_group' => 'Разрешить отправку для групп',
	'connect_setting_t_group_comment' => 'Укажите группы, которые могут отправлять контент в Tencent микроблоггинг.',
	'connect_setting_like_allow' => 'Модерация QQ ссылок',
	'connect_setting_like_allow_comment' => 'Модерация пользователей для доступа в личный счет QQ (ссылка на сайт).',
	'connect_setting_like_url' => 'Количество QQ сайтов пользователей',
	'connect_setting_like_url_comment' => 'Установите количество аутентификаций для URL QQ. Для этого, пожалуйста, подайте заявку на аккредитацию <a href="http://opensns.qq.com/" target="_blank">Нажмите здесь </a>',
	'connect_setting_turl_allow' => 'Кнопка микроблоггинга',
	'connect_setting_turl_allow_comment' => 'При нажатии пользователем на официальном сайте микроблогов быстро переходит на Tencent микроблоги.',
	'connect_setting_turl_qq' => 'Количество QQ микроблогов',
	'connect_setting_turl_qq_comment' => 'Установить количество QQ микроблогов на официальном сайте.',
	'connect_setting_turl_qq_failed' => 'Не удается настроить количество микроблогов QQ на официальном сайте. Убедитесь, что QQ номер правильный.',
	'connect_setting_qshare_allow' => 'Включение Q-Share',
	'connect_setting_qshare_allow_comment' => 'Пользователь может выбрать и выделить содержимое в тексте и быстро и просто отправить в Tencent микроблоггинг.',
	'connect_setting_qshare_appkey' => 'Tencent AppKey микроблогов',
	'connect_setting_qshare_appkey_comment' => 'Укажите AppKey для Tencent микроблогов. <a href="http://open.t.qq.com/apps_welcome.php" target="_blank">Создание приложений для AppKey</a>',
	'connect_member_info' => 'Информация о пользователе',
	'connect_member_bindlog' => 'QQ отчеты',
	'connect_member_bindlog_type' => 'Тип',
	'connect_member_bindlog_username' => 'Имя пользователя',
	'connect_member_bindlog_date' => 'Дата',
	'connect_member_bindlog_type_1' => 'Обязательный',
	'connect_member_bindlog_type_2' => 'Не обязательный',
	'connect_member_bindlog_uin' => 'Отчет QQ счета',
	'connect_member_bindlog_uid' => 'Отчет по учетной записи пользователя',

	'qqgroup_menu_list' => 'Управление привязкой',
	'qqgroup_menu_manager' => 'Задать имя',
	'qqgroup_menu_block' => 'Нажмите для отправки информации',
	'qqgroup_menu_history' => 'Нажмите для отправки истории',

	'qqgroup_msg_deficiency' => 'Выберите хотя бы: название темы или списка тем.',
	'qqgroup_msg_save_succeed' => 'Поздравляем, информация успешно отправлена в группу QQ!',
	'qqgroup_msg_upload_succeed' => 'Фото успешно загружено!',
	'qqgroup_msg_upload_failure' => '
Сбой отправки изображения! Выберите размер для фото 75*75 пикс. Разрешена поддержка форматов: JPG, GIF, PNG. Размер файла должен быть не более 5Mб. Убедитесь, что на сервере включена GD библиотека.',
	'qqgroup_msg_remote_exception' => 'К сожалению, имеются ошибки. Причина: {errmsg} Код ошибки: {errno}',
	'qqgroup_msg_unknown_dns' => 'К сожалению, это неизвестная ошибка! Пожалуйста, проверьте подключение к сети Вашего сервера Discuz!',
	'qqgroup_msg_remote_error' => 'К сожалению, неправильно указан сервер. Пожалуйста, повторите попытку позже.',

	'qqgroup_search_order_views' => 'По просмотрам',
	'qqgroup_search_order_replies' => 'По ответам',
	'qqgroup_search_order_heats' => 'По популярности',
	'qqgroup_search_order_dateline' => 'По дате',
	'qqgroup_search_order_lastpost' => 'По посл. сообщениям',
	'qqgroup_search_order_recommends' => 'По рекомендованным',

	'qqgroup_search_dateline_1' => 'За час',
	'qqgroup_search_dateline_2' => 'За сутки',
	'qqgroup_search_dateline_3' => 'За неделю',
	'qqgroup_search_dateline_4' => 'За месяц',
	'qqgroup_search_dateline_0' => 'Без ограничений',

	'qqgroup_search_tid' => 'ID темы: ',
	'qqgroup_search_button' => 'Поиск',
	'qqgroup_search_threadslist' => 'Список тем',
	'qqgroup_search_inforum' => 'На форуме',
	'qqgroup_search_operation' => 'Действия',

	'qqgroup_search_loading' => 'Загрузка...',
	'qqgroup_search_nothreads' => 'По указанным критериям в поиске нет результатов, попробуйте изменить фильтр для повторного поиска!',

	'qqgroup_ctrl_add_miniportal_topic' => 'Отправка тем',
	'qqgroup_ctrl_add_miniportal_normal' => 'Отправка списка тем',
	'qqgroup_ctrl_up' => 'Вверх',
	'qqgroup_ctrl_down' => 'Вниз',
	'qqgroup_ctrl_edit' => 'Редактировать',
	'qqgroup_ctrl_remove' => 'Удалить',
	'qqgroup_ctrl_upload_image' => 'Загрузить фото',
	'qqgroup_ctrl_choose_image' => 'Выберите картинку: ',
	'qqgroup_ctrl_choose_image_tips' => 'Выберите размер для фото 75*75 пикс. Разрешена поддержка форматов: JPG, GIF, PNG. Размер файла должен быть не более 5Mб.',
	'qqgroup_ctrl_close' => 'Закрыть',

	'qqgroup_preview_tips_topic' => ' <img src="static/image/admincp/cloud/qun_op_top.png" align="absmiddle" />Нажмите для отправки заголовков',
	'qqgroup_preview_tips_normal' => ' <img src="static/image/admincp/cloud/qun_op_list.png" align="absmiddle" />Нажмите для отправки списка',
	'qqgroup_preview_more' => 'Больше',
	'qqgroup_preview_shortname' => 'Заголовок страницы',
	'qqgroup_preview_button' => 'Нажмите для отправки информации',
	'attach_img' => 'Изображения',

);

$GLOBALS['admincp_actions_normal'][] = 'cloud';

?>