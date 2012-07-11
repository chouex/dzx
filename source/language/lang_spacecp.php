<?php

/**
 *      [Discuz!] (C)2001-2011 Comsenz Inc. & Russian TEAM Chinascript.ru
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_spacecp.php 17025 2010-09-19 05:47:47Z zhangguosheng $
 */

$lang = array(

	'by' => ' по ',
	'tab_space' => ' ',

	'share' => 'Закладки',
	'share_action' => 'Закладки',

	'pm_comment' => 'Ответы на комментарии',
	'pm_thread_about' => 'о сообщении в теме "{subject}"',

	'wall_pm_subject' => 'Привет! Я оставил тебе сообщение на стене',
	'wall_pm_message' => 'Перейдите по ссылке, чтобы увидеть сообщение:[url=\\1]просмотреть[/url]',
	'reward' => 'Награды',
	'reward_info' => 'За голосование начисляется  \\1 баллов',
	'poll_separator' => '","',
	
	'pm_report_content' => '<a href="home.php?mod=space&uid={reporterid}" target="_blank">{reportername}</a> Отчет по ЛС: <br><a href="home.php?mod=space&uid={uid}" target="_blank">{username}</a> Личное сообщение: {message}',
	'message_can_not_send_1' => 'Отправить не удалось! Превышен Ваш суточный лимит для отправки сообщений!',
	'message_can_not_send_2' => 'Не отправляйте сообщения слишком быстро!',
	'message_can_not_send_3' => 'Извините, но Вы не можете отправлять сообщения пользователям, которые не являются Вашими друзьями!',
	'message_can_not_send_4' => 'Извините, но Вы сейчас не можете отправлять сообщения!',
	'message_can_not_send_5' => 'Извините, но Вы превысили суточный лимит чата в группе!',
	'message_can_not_send_6' => 'Ваше сообщение заблокировано!',
	'message_can_not_send_7' => 'Превышено максимальное количество участников в групповом чате!',
	'message_can_not_send_8' => 'Извините, но Вы не можете отправлять сообщения самому себе!))',
	'message_can_not_send_9' => 'Получатель отсутствует или блокирует Ваше сообщение',
	'message_can_not_send_10' => 'Для участия в чате необходимо не меньше двух участников',
	'message_can_not_send_11' => 'Разговоров не существует',
	'message_can_not_send_12' => 'К сожалению, у Вас нет доступа!',
	'message_can_not_send_13' => 'Это не сообщение группового чата',
	'message_can_not_send_14' => 'Это не личное сообщение',
	'message_can_not_send_15' => 'Данные неверны!',
	'message_can_not_send_onlyfriend' => 'Личные сообщения получат только друзья',


	'friend_subject' => '<a href="{url}" target="_blank">{username} добавил вас в друзья</a>',
	'friend_request_note' => ', P.S.: {note}',
	
	'comment_friend' =>'<a href="\\2" target="_blank">\\1 остправил вам сообщение</a>',
	'photo_comment' => '<a href="\\2" target="_blank">\\1 прокомментировал фотографии</a>',
	'blog_comment' => '<a href="\\2" target="_blank">\\1 прокомментировал блог</a>',
	'poll_comment' => '<a href="\\2" target="_blank">\\1 прокомментировал голосование</a>',
	'share_comment' => '<a href="\\2" target="_blank">\\1 прокомментировал закладки</a>',
	'friend_pm' => '<a href="\\2" target="_blank">\\1 отправил вам сообщение</a>',
	'poke_subject' => '<a href="\\2" target="_blank">\\1 передал вам приветствие</a>',
	'mtag_reply' => '<a href="\\2" target="_blank">\\1 ответил на вашу тему</a>',
	'event_comment' => '<a href="\\2" target="_blank">\\1 прокоментировал ваше событие</a>',

	'friend_pm_reply' => '\\1 ответил в ЛС',
	'comment_friend_reply' => '\\1 ответил на сообщение',
	'blog_comment_reply' => '\\1 ответил на комментарий в блоге',
	'photo_comment_reply' => '\\1 ответил на комментарий в фото',
	'poll_comment_reply' => '\\1 ответил на комментарий в голосовании',
	'share_comment_reply' => '\\1 ответил на комментарий в закладках',
	'event_comment_reply' => '\\1 ответил на комментарий в событии',
	
	'mail_my' => 'Действия друзей',
  'mail_system' => 'Оповещение системы',

	'invite_subject' => '{username} приглашает вас стать друзьями на сайте {sitename}',
	'invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Привет! Я, {username}, приглашаю Вас стать моим другом на сайте {sitename}.</h3><br>
		Присоединяйтесь в наш дружный коллектив! Буду рад Вас увидеть на сайте, в роли своего друга. Если у Вас возникнут вопросы, обращайтесь, не стесняйтесь, я с радостью помогу! Ниже есть ссылки на мою страницу, можете узнать обо мне больше.<br>
		<br>
		Прилагаемый текст к приглашению:<br>{saymsg}
		<br><br>
		<strong>Пожалуйста, нажмите на ссылку ниже, чтобы стать моим другом:</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>Также Вы можете просмотреть мою личную страницу на сайте {sitename}:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'app_invite_subject' => '{username} приглашает Вас принять участие в игре {appname}, на сайте {sitename}',
	'app_invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Привет! Я, {username}, приглашаю Вас принять участие в игре {appname} на сайте {sitename}</h3><br>
		<br>
		Прилагаемый текст к приглашению:<br>
		{saymsg}
		<br><br>
		<strong>Пожалуйста, нажмите на ссылку ниже, чтобы присоединиться к игре {appname}:</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>Также, Вы можете просмотреть мою личную страницу на сайте {sitename}:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'person' => 'Люди',
	'delete' => 'Удалить',

	'space_update' => '{actor} был обновлен',

	'active_email_subject' => 'Активация аккаунта',
	'active_email_msg' => 'Пожалуйста, скопируйте ссылку и вставьте в браузер, чтобы активировать учетную запись:<br><a href="{url}" target="_blank">{url}</a>',
	'share_space' => 'Закладки по сайтам',
	'share_blog' => 'Закладки по блогам',
	'share_album' => 'Закладки по альбомам',
	'default_albumname' => 'Альбом по умолчанию',
	'share_image' => 'Закладки по фотографиям',
	'share_article' => 'Закладки по статьям',
	'album' => 'Альбомы',
	'share_thread' => 'добавил тему в закладки',
	'mtag' => '{$_G[setting][navs][3][navname]}',
	'share_mtag' => 'Общие {$_G[setting][navs][3][navname]}',
	'share_mtag_membernum' => 'Пользователей: {membernum}',
	'share_tag' => 'Закладки по тегам',
	'share_tag_blognum' => 'Блогов: {blognum}',
	'share_link' => 'Закладки по ссылкам',
	'share_video' => 'Закладки по видео',
	'share_music' => 'Закладки по музыке',
	'share_flash' => 'Закладки по Flash',
	'share_event' => 'Закладки по событиям',
	'share_poll' => 'Общее голосование \\1',
	'event_time' => 'Период действия',
	'event_location' => 'Место события',
	'event_creator' => 'Создатель',
	'the_default_style' => 'Стиль по умолчанию',
	'the_diy_style' => 'Пользовательский стиль',

	'thread_edit_trail' => '<ins class="modify">[Тема \\1 в \\2 редакторе]</ins>',
	'create_a_new_album' => 'Создать новый альбом',
	'not_allow_upload' => 'У вас нет прав на загрузку изображений',
	'not_allow_upload_extend' => 'Не разрешается загружать типы картинок: {extend}',
	'files_can_not_exceed_size' => 'Тип файлов {extend} не может превышать: {size}',
	'get_passwd_subject' => 'Восстановление пароля по Email',
	'get_passwd_message' => 'Ссылка для сброса пароля действительна 3 суток: <br />\\1<br />(Если Вы не можете перейти по ссылке, скопируйте ее и вставьте в адресную строку Вашего браузера. После чего нажмите клавишу "Enter")<br />После чего откроется страница, на которой Вам следует ввести новый пароль.',
	'get_passwd_message' => 'Для сброса пароля Вам необходимо нажать на ссылку ниже. Ссылка действительна 3 дня:<br />\\1<br />(Если ссылка не открывается, вручную скопируйте и вставьте ее адресную строку браузера)<br />Когда откроется страница, введите новый пароль',
	'file_is_too_big' => 'Файл слишком большой',

	'take_part_in_the_voting' => '{actor} принял участие в голосовании {touser} {reward} <a href="{url}" target="_blank">{subject}</a>',
	'lack_of_access_to_upload_file_size' => 'Невозможно получить размер загружаемого файла',
	'only_allows_upload_file_types' => 'Разрешенные форматы: jpg, jpeg, gif, png',
	'unable_to_create_upload_directory_server' => 'Невозможно создать каталог для загрузки',
	'inadequate_capacity_space' => 'Недостаточно места! Невозможно загрузить вложения',
	'mobile_picture_temporary_failure' => 'Временные файлы не могут быть переданы на сервер в указанный каталог',
	'ftp_upload_file_size' => 'Удаленная загрузка изображений не удалась',
	'comment' => 'Комментарии',
	'upload_a_new_picture' => 'Загрузить изображение',
	'upload_album' => 'Обновление альбома',
	'the_total_picture' => 'Всего \\1 фотографий',

	'space_open_subject' => 'Откройте вашу личную страницу',
	'space_open_message' => 'Привет, сегодня я посетил вашу личную страницу: \\1space.php',



	'apply_mtag_manager' => 'Обратиться к общей группе <a href="\\1" target="_blank">\\2</a> по причине: \\3 <a href="\\1" target="_blank">(войти для управления)</a>',


	'magicunit' => 'Вверх',
	'magic_note_wall' => '{actor} отправил для Вас сообщение на стене <a href="{url}" target="_blank">Посмотреть</a>',
	'magic_call' => 'Вас пригласили прочитать блог: <a href="{url}" target="_blank">Перейти на блог</a>',


	'present_user_magics' => 'Вы получили подарок (реквизит) от администратора: \\1',
	'has_not_more_doodle' => 'Вы не нарисовали граффити',

	'do_stat_register' => 'Новые пользователи',
	'do_stat_invite' => 'Приглашенные друзья',
	'do_stat_appinvite' => 'Приложения',
	'do_stat_add' => 'Информация о релизе',
	'do_stat_comment' => 'Интерактивная информация',
	'do_stat_space' => 'Сайты',
	'do_stat_login' => 'Визиты пользователей',
	
	'do_stat_mobilelogin' => 'Для мобильных',
	'do_stat_connectlogin' => 'QQ логин',
	
	'do_stat_doing' => 'Статус',
	'do_stat_blog' => 'Блог',
	'do_stat_activity' => 'События',
	'do_stat_reward' => 'Награды',
	'do_stat_debate' => 'Поединки',
	'do_stat_trade' => 'Продажа',
	'do_stat_group' => "Создание сообществ",
	'do_stat_tgroup' => "{$_G[setting][navs][3][navname]}",
	'do_stat_home' => "{$_G[setting][navs][4][navname]}",
	'do_stat_forum' => "{$_G[setting][navs][2][navname]}",
	'do_stat_groupthread' => 'Темы групп',
	'do_stat_grouppost' => 'Ответы групп',
	'do_stat_pic' => 'Фото',
	'do_stat_poll' => 'Голосования',
	'do_stat_event' => 'Деятельность',
	'do_stat_share' => 'Закладки',
	'do_stat_thread' => 'Темы',
	'do_stat_docomment' => 'Запись отзывов',
	'do_stat_blogcomment' => 'Комментарии блога',
	'do_stat_piccomment' => 'Комментарии фото',
	'do_stat_pollcomment' => 'Комментарии голосований',
	'do_stat_pollvote' => 'Опросы',
	'do_stat_eventcomment' => 'Обзор деятельности',
	'do_stat_eventjoin' => 'Участие в событиях',
	'do_stat_sharecomment' => 'Комментарии закладок',
	'do_stat_post' => 'Ответы в темах',
	'do_stat_click' => 'Клики',
	'do_stat_wall' => 'Стена',
	'do_stat_poke' => 'Приветы',
	
	'do_stat_sendpm' => 'Отправить ЛС',
	'do_stat_addfriend' => 'Предложить дружбу',
	'do_stat_friend' => 'Стали друзьями',
	
	'do_stat_post_number' => 'Количество сообщений',
	'do_stat_statistic' => 'Общая статистика',

	'logs_credit_update_TRC' => 'Задачи',
	'logs_credit_update_RTC' => 'Награда за тему',
	'logs_credit_update_RAC' => 'Лучший ответ',
	'logs_credit_update_MRC' => 'Случайный реквизит ',
	'logs_credit_update_BMC' => 'Покупка реквизита',
	'logs_credit_update_TFR' => 'Передача средств',
	'logs_credit_update_RCV' => 'Получение средств',
	'logs_credit_update_CEC' => 'Обмен',
	'logs_credit_update_ECU' => 'UCenter Погашение расходов',
	'logs_credit_update_SAC' => 'Продажа вложений',
	'logs_credit_update_BAC' => 'Покупка вложений',
	'logs_credit_update_PRC' => 'Оценка рейтинга',
	'logs_credit_update_RSC' => 'Добавление комментариев',
	'logs_credit_update_STC' => 'Темы для продажи',
	'logs_credit_update_BTC' => 'Покупка тем',
	'logs_credit_update_AFD' => 'Покупка интегралов',
	'logs_credit_update_UGP' => 'Групповая покупка интегралов',
	'logs_credit_update_RPC' => 'Отчеты по наградам и наказаниям',
	'logs_credit_update_ACC' => 'Участие в мероприятиях',
	'logs_credit_update_RCT' => 'Награды за ответы',
	'logs_credit_update_RCA' => 'Ответы победителей',
	'logs_credit_update_RCB' => 'Ответы за возвращение бонусов',
	'logs_credit_update_CDC' => 'Исполз. купоны',

	'logs_credit_update_RGC' => 'Отправленные подарки',
	'logs_credit_update_BGC' => 'Неполученные подарки',
	'logs_credit_update_AGC' => 'Полученные подарки',
	'logs_credit_update_RKC' => 'Топ',
	'logs_select_operation' => 'Выберите тип операции',
	'task_credit' => ' Бонусы за задачи',
	'special_3_credit' => ' Баллы за тему',
	'special_3_best_answer' => ' Баллы за лучший ответ',
	'magic_credit' => ' Баллы за реквизит',
	'magic_space_gift' => ' Подарки в Моем мире',
	'magic_space_re_gift' => ' Пополнение подарков',
	'magic_space_get_gift' => 'Подарки за посещение Моего мира',
	'credit_transfer' => 'Передача интегралов',
	'credit_transfer_tips' => 'Перераспределение доходов',
	'credit_exchange_tips_1' => 'Операции обмена интегралов',
	'credit_exchange_to' => 'Обмен на ',
	'credit_exchange_center' => 'Накопленные баллы через UCenter',
	'attach_sell' => 'Продажа',
	'attach_sell_tips' => '(зачислены баллы)',
	'attach_buy' => 'Купить',
	'attach_buy_tips' => 'Расходы по приложениям',
	'grade_credit' => '(Оценка рейтинга)',
	'grade_credit2' => 'Снятые баллы за рейтинг',
	'thread_credit' => 'Полученные баллы за темы',
	'thread_credit2' => 'Снятые баллы за темы',
	'buy_credit' => 'Пополнение интегралов',
	'buy_usergroup' => 'Расходы пользователей на покупку группы',
	'report_credit' => 'Функция награждения и наказания',
	'join' => 'Участие',
	'activity_credit' => 'Расходы за события',
	'thread_send' => 'Списание за темы',
	'replycredit' => 'Снятие за ответы',
	'add_credit' => 'Награды в баллах',
	'recovery' => 'Восстановление',
	'replycredit_post' => 'Награды за ответы',
	'replycredit_thread' => 'Снятие за дайджесты',
	'card_credit' => 'Использование купона',
	'ranklist_top' => 'Баллы за участие в рейтинге',

	'profile_unchangeable' => 'Не может быть изменено после отправки этой информации',
	'profile_is_verifying' => 'Данная информация будет отправлена на рассмотрение',
	'profile_mypost' => 'Отправить на модерацию',
	'profile_need_verifying' => 'Данная информация будет отправлена на проверку',
	'profile_edit' => 'Изменить',
	'profile_censor' => '(чувствительные к регистру)',
	'profile_verify_modify_error' => 'Данные {verify} были проверены и сертифицированы. Изменять не разрешается!',
	'profile_verify_verifying' => 'Ваша информация {verify} была отправлена, пожалуйста, дождитесь проверки модератором.',
	'district_level_1' => '-Страна-',
	'district_level_2' => '-Область-',
	'district_level_3' => '-Город-',
	'district_level_4' => '-Район-',
	'invite_you_to_visit' => '{user}! Приглашаем Вас посетить {bbname}',

	'spacecp_message_prompt' => '(Поддержка кода {msg}. Максимально 1000 слов)',
	'card_update_doing' => ' <a class="xi2" href="###">[Обновить статус]</a>',
	'email_acitve_message' => '<img src="{imgdir}/mail_inactive.png" alt="Не проверено" class="vm" /> <span class="xi1">({newemail}) Проверьте, пожалуйста свою почту...</span><br />
								Системой было отправлено сообщение с кодом активацией, пожалуйста, проверьте свою электронную почту и потвердите активацию.<br>
								Если вы не получили письмо с подтверждением, Вы можете изменить почтовый ящик и повторно отправить сообщение со ссылкой активации <a href="home.php?mod=spacecp&ac=profile&op=password&resend=1" class="xi2">Отправить еще раз</a>',

);

?>