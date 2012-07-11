<?php

/**
 *      [Discuz!] (C)2001-2011 Comsenz Inc. & Russian TEAM Chinascript.ru
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_feed.php 14490 2010-08-12 04:32:34Z zhengqingpeng $
 */

$lang = array
(

	'feed_blog_password' => '{actor} Сделал блог под паролем {subject}',
	'feed_blog_title' => '{actor} написал в блоге',
	'feed_blog_body' => '<b>{subject}</b><br />{summary}',
	'feed_album_title' => '{actor} обновил альбом',
	'feed_album_body' => '<b>{album}</b><br />Всего изображений: {picnum}',
	'feed_pic_title' => '{actor} загрузил изображение',
	'feed_pic_body' => '{title}',



	'feed_poll' => '{actor} создал новый опрос',

	'feed_comment_space' => 'Автор {actor} оставил сообщение на доске для {touser}',
	'feed_comment_image' => 'Автор {actor} прокомментировал фотографии для {touser}',
	'feed_comment_blog' => 'Автор {actor} прокомментировал блог {touser}',
	'feed_comment_poll' => 'Автор {actor} прокомментировал опрос {touser}',
	'feed_comment_event' => 'Автор {actor} прокомментировал событие {event}, размещенное {touser}',
	'feed_comment_share' => 'Автор {actor} прокомментировал закладки {share}, размещенные {touser}',

	'feed_showcredit' => '{actor} подарил {fusername} сумму баллов {credit}. Помощь друзьям в поднятии рейтинга <a href="misc.php?mod=ranklist&type=member" target="_blank">Платный топ</a>',
	'feed_showcredit_self' => '{actor} сделал ставку {credit}, чтобы поднять свой рейтинг <a href="misc.php?mod=ranklist&type=member" target="_blank">Платный топ</a>',
	'feed_doing_title' => '{actor}：{message}',
	'feed_friend_title' => '{actor} и {touser} стали друзьями',



	'feed_click_blog' => '{actor} отправил клик "{click}" для {touser} примечание в блоге {subject}',
	'feed_click_thread' => '{actor} отправилклик  "{click}" для {touser} примечание в теме {subject}',
	'feed_click_pic' => '{actor} отправил клик "{click}" для {touser} на изображение',
	'feed_click_article' => '{actor} отправил клик “{click}” для {touser} в статье {subject}',


	'feed_task' => '{actor} выполнил призовую задачу {task}',
	'feed_task_credit' => '{actor} получил за задачу {task} призовые баллы {credit}',

	'feed_profile_update_base' => '{actor} обновил регистрационные данные',
	'feed_profile_update_contact' => '{actor} обновил контактные данные',
	'feed_profile_update_edu' => '{actor} обновил данные по образованию',
	'feed_profile_update_work' => '{actor} обновил данные о работе',
	'feed_profile_update_info' => '{actor} обновил личные данные',
	'feed_profile_update_bbs' => '{actor} обновил личную информацию',
	'feed_profile_update_verify' => '{actor} подтвердил подлинность своих данных',

	'feed_add_attachsize' => '{actor} стоимость баллов {credit} для размера {size}. Вы можете загрузить дополнительные  фотографии (<a href="home.php?mod=spacecp&ac=credit&op=addsize">Купить</a>)',

	'feed_invite' => '{actor} отправил приглашение {username}',

	'magicuse_thunder_announce_title' => '<strong>{username} выпустил "Молнию"</strong>',
	'magicuse_thunder_announce_body' => 'Приветствую всех, моих друзей он-лайн!<br /><a href="home.php?mod=space&uid={uid}" target="_blank">Приглашаю к себе в гости!</a>',


	'feed_thread_title' =>			'{actor} создал новую тему',
	'feed_thread_message' =>		'<b>{subject}</b><br />{message}',

	'feed_reply_title' =>			'{actor} ответил автору {author} в теме {subject}',
	'feed_reply_title_anonymous' =>		'{actor} ответил в теме {subject}',
	'feed_reply_message' =>			'',

	'feed_thread_poll_title' =>		'{actor} создал новый опрос',
	'feed_thread_poll_message' =>		'<b>{subject}</b><br />{message}',

	'feed_thread_votepoll_title' =>		'{actor} принял участие в голосовании по теме {subject}',
	'feed_thread_votepoll_message' =>	'',

	'feed_thread_goods_title' =>		'{actor} выставил на продажу товар',
	'feed_thread_goods_message_1' =>	'<b>{itemname}</b><br />Цена {itemprice}, за дополнительный {itemcredit}{creditunit}',
	'feed_thread_goods_message_2' =>	'<b>{itemname}</b><br />Цена {itemprice} шт',
	'feed_thread_goods_message_3' =>	'<b>{itemname}</b><br />Цена {itemcredit}{creditunit}',

	'feed_thread_reward_title' =>		'{actor} получил награду за тему',
	'feed_thread_reward_message' =>		'<b>{subject}</b><br />Вознаграждение {rewardprice}{extcredits}',

	'feed_reply_reward_title' =>		'{actor} получил вознаграждение за ответ в теме {subject}',
	'feed_reply_reward_message' =>		'',

	'feed_thread_activity_title' =>		'{actor} создал новое событие',
	'feed_thread_activity_message' =>	'<b>{subject}</b><br />Время начала: {starttimefrom}<br />Место проведения: {activityplace}<br />{message}',

	'feed_reply_activity_title' =>		'{actor} присоединился к событию в теме {subject}',
	'feed_reply_activity_message' =>	'',

	'feed_thread_debate_title' =>		'{actor} создал новый поединок',
	'feed_thread_debate_message' =>		'<b>{subject}</b><br />Плюсы: {affirmpoint}<br />Минусы: {negapoint}<br />{message}',

	'feed_thread_debatevote_title_1' =>	'{actor} участвует в поединке по теме {subject}',
	'feed_thread_debatevote_title_2' =>	'{actor} участвует в поединке по теме {subject}',
	'feed_thread_debatevote_title_3' =>	'{actor} участвует в поединке по теме {subject}',
	'feed_thread_debatevote_message_1' =>	'',
	'feed_thread_debatevote_message_2' =>	'',
	'feed_thread_debatevote_message_3' =>	'',

);

?>