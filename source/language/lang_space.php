<?php

/**
 *      [Discuz!] (C)2001-2011 Comsenz Inc. & Russian TEAM Chinascript.ru
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 17282 2010-09-28 09:04:15Z zhangguosheng $
 */

$lang = array(
	'hour' => ' час',
	'before' => ' до ',
	'minute' => ' мин',
	'second' => ' сек',
	'now' => 'сейчас',
	'dot' => ', ',
	'poll' => 'Опрос',
	'blog' => 'Блог',
	'friend_group_default' => 'Другое',
	'friend_group_1' => 'Узнал на сайте',
	'friend_group_2' => 'Узнал через события',
	'friend_group_3' => 'Узнал от друзей',
	'friend_group_4' => 'Узнал от родных',
	'friend_group_5' => 'Узнал от коллег',
	'friend_group_6' => 'Узнал от студентов',
	'friend_group_7' => 'Не помню',
	'friend_group' => 'Настройка',
	'wall' => 'Стена',
	'pic_comment' => 'Комментарии к фотографии',
	'blog_comment' => 'Комментарии к блогу',
	'clickblog' => 'Обзор блога',
	'clickpic' => 'Обзор фото',
	'clickthread' => 'Обзор тем',
	'share_comment' => 'Комментарии к закладкам',
	'share_notice' => 'Заметки к закладкам',
	'doing_comment' => 'Комментарии к статусу',
	'friend_notice' => 'Друзья',
	'poll_comment' => 'Комментарии к опросам',
	'poll_invite' => 'Приглашение к голосованию',
	'default_albumname' => 'Альбом по умолчанию',
	'credit' => 'Баллы',
	'credit_unit' => 'ед.',
	'man' => 'Муж',
	'woman' => 'Жен',
	'gender_0' => 'Неизвестен',
	'gender_1' => 'Мужской',
	'gender_2' => 'Женский',
	'year' => '-',
	'month' => '-',
	'day' => 'дн',
	'unmarried' => 'Не в браке',
	'married' => 'В браке',
	'hidden_username' => 'аноним',
	'gender' => 'пол',
	'age' => 'возраст',
	'comment' => 'Комментарий',
	'reply' => 'Ответ',
	'from' => 'от',
	'anonymity' => 'Аноним',
	'viewmore' => 'подробнее',
	'constellation_1' => 'Водолей',
	'constellation_2' => 'Рыбы',
	'constellation_3' => 'Овен',
	'constellation_4' => 'Телец',
	'constellation_5' => 'Близнецы',
	'constellation_6' => 'Рак',
	'constellation_7' => 'Лев',
	'constellation_8' => 'Дева',
	'constellation_9' => 'Весы',
	'constellation_10' => 'Скорпион',
	'constellation_11' => 'Стрелец',
	'constellation_12' => 'Козерог',
	'zodiac_1' => 'Мышь',
	'zodiac_2' => 'Корова',
	'zodiac_3' => 'Тигр',
	'zodiac_4' => 'Заяц',
	'zodiac_5' => 'Дракон',
	'zodiac_6' => 'Змея',
	'zodiac_7' => 'Лошадь',
	'zodiac_8' => 'Овца',
	'zodiac_9' => 'Обезьяна',
	'zodiac_10' => 'Курица',
	'zodiac_11' => 'Собака',
	'zodiac_12' => 'Свинья',

	'credits' => 'баллы',
	'credits_top' => 'Имеется баллов:',
	'usergroup' => 'Группа',
	'friends' => 'Друзья',
	'blogs' => 'Блоги',
	'threads' => 'Темы',
	'albums' => 'Альбомы',
	'sharings' => 'Закладки',
	'space_views' => 'Посетили страницу: <strong class="xi1">{views}</strong>',
	'views' => 'Мой сайт',
	'block1' => 'Мой модуль 1',
	'block2' => 'Мой модуль 2',
	'block3' => 'Мой модуль 3',
	'block4' => 'Мой модуль 4',
	'block5' => 'Мой модуль 5',
				
   	'blockdata' => array('personalinfo' => 'Мои данные', 'profile' => 'Профиль', 'doing' => 'Статус', 'feed' => 'Новости',
				'blog' => 'Блог', 'stickblog' => 'Топ блог', 'album' => 'Альбомы', 'friend' => 'Друзья',
				'visitor' => 'Визитеры', 'wall' => 'Стена', 'share' => 'Закладки',
				'thread' => 'Темы', 'group'=>$_G[setting][navs][3][navname],'music'=>'Music Box',
				'statistic' => 'Статистика','myapp' => 'Приложения',
				'block1'=>'Модуль 1', 'block2'=>'Модуль 2', 'block3'=>'Модуль 3',
				'block4'=>'Модуль 4','block5'=>'Модуль 5'),

	'block_title' => '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
	'blog_li' => '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
	'blog_li_img' => '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
	'blog_li_ext' => '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">Просмотров: ({viewnum})</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">Отзывов: ({replynum})</a></dd>',
  'album_li' => '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, обновлено {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, обновлено {date}">{albumname}</a></p><span>Количество: {picnum}</span></li>',
	'doing_li' => '<li>{message}</li><br />{date} {from} ответов: ({replynum})',
	'visitor_anonymity' => '<div class="avatar48"><img src="image/magic/hidden.gif" alt="Аноним"></div><p>Аноним</p>',
  'visitor_list' => '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',

	'wall_form' => '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />' :
							'<div class="pt hm">Вам надо авторизироваться в системе <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">Войти</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" class="xi2">'.$_G['setting']['reglinkname'].'</a></div>').'
							<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>Сообщение</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>'.
						($_G['uid'] ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>' : '').'
					</div>',
	'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
	'wall_more' => '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">&raquo; Показать все</a></span><dt></dl>',
	'wall_edit' => '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">Редактировать</a> ',
	'wall_del' => '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">Удалить</a> ',
	'wall_reply' => '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">Ответить</a>',
	'group_li' => '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li' => '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">Опубликовано: {dateline}</div></div>',
	'myapp_li_icon' => '<li><img src="{icon}" onerror="this.onerror=null;this.src=\'http://appicon.manyou.com/icons/{appid}\'" alt="{appname}" class="vm" /> <a href="userapp.php?mod=app&id={appid}">{appname}</a></li>',
	'myapp_li_logo' => '<li><a href="userapp.php?mod=app&id={appid}"><img src="http://appicon.manyou.com/logos/{appid}" alt="{appname}" /><p><a href="userapp.php?mod=app&id={appid}">{appname}</a></p></li>',
	'music_no_content' => 'Отсутствует содержание Music Box',
	'block_profile_diy' => 'ВИЗО',
	'block_profile_wall' => 'Стена',
	'block_profile_avatar' => 'Изменить аватар',
	'block_profile_update' => 'Обновление',
	'block_profile_wall_to_me' => 'Стена',
	'block_profile_friend_add' => 'В друзья',
	'block_profile_friend_ignore' => 'Игнор',
	'block_profile_poke' => 'Привет',
	'block_profile_sendmessage' => 'Чат',
	'block_doing_reply' => 'Написать в статусе',
	'block_doing_no_content' => 'Статус отсутствует',
	'block_doing_no_content_publish' => ', <a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">Обновить</a>',
	'block_blog_no_content' => 'Блог отсутствует',
	'block_blog_no_content_publish' => ', <a href ="home.php?mod=spacecp&ac=blog">Создать</a>',
	'block_album_no_content' => 'Альбом отсутствует',
	'block_album_no_content_publish' => ', <a href ="home.php?mod=spacecp&ac=upload">Загрузить</a>',
	'block_feed_no_content' => 'Нет новостей',
	'block_thread_no_content' => 'Темы отсутствуют',
	'block_thread_no_content_publish' => ', <a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">Создать тему</a>',
	'block_friend_no_content' => 'Нет друзей',
	'block_friend_no_content_publish' => ', <a href ="home.php?mod=spacecp&ac=search">Найти друзей</a> или <a href ="home.php?mod=spacecp&ac=invite">Пригласить друзей</a>',
	'block_visitor_no_content' => 'Нет визитеров',
	'block_visitor_no_content_publish' => ', <a href ="home.php?mod=space&do=friend&view=online&type=member">Показать, кто онлайн</a>',
	'block_share_no_content' => 'Нет закладок',
	'block_wall_no_content' => 'На стене нет записей',
	'block_group_no_content' => 'Сообщество отсутствует',
	'block_group_no_content_publish' => ', <a href ="forum.php?mod=group&action=create">Создать сообщество</a> или <a href ="group.php?mod=index">Присоединиться к группе</a>',
	'block_group_no_content_join' => ', <a href ="group.php?mod=index">Присоединиться к группе</a>',
	'block_myapp_no_content' => 'Еще не использовал',
	'block_myapp_no_content_publish' => ', <a href ="userapp.php?mod=manage&my_suffix=/app/list">Я хочу играть!</a>',
	'block_view_noperm' => 'Авторизируйтесь для просмотра',
	'block_view_profileinfo_noperm' => 'Не введены данные или отсутствуют права для просмотра',
	'click_play' => 'Проиграть',
	'click_view' => 'Просмотреть',
	'feed_view_only' => 'Просмотр новостей',

	'export_pm' => 'Экспорт ЛС',
	'pm_export_header' => 'Discuz! X краткой записи сообщения (записывается как формат текстового сообщения и не поддерживает ре-импорт)',
	'pm_export_touser' => 'Сообщение: {touser}',
	'pm_export_subject' => 'Тема чата сообщества: {subject}',
	'all' => 'Все',
	'manage_post' => 'Сообщения',
	'manage_album' => 'Альбомы',
	'manage_blog' => 'Блоги',
	'manage_comment' => 'Отзывы',
	'manage_doing' => 'Статусы',
	'manage_feed' => 'Новости',
	'manage_group_prune' => 'Группы',
	'manage_group_threads' => 'Темы групп',
	'manage_share' => 'Закладки',
	'manage_pic' => 'Фото',

	'sb_blog' => 'Блог {who}',
	'sb_album' => 'Альбом {who}',
	'sb_space' => 'Моя страница {who}',
	'sb_feed' => 'Новости {who}',
	'sb_doing' => 'Статус {who}',
	'sb_sharing' => 'Закладки {who}',
	'sb_friend' => 'Друзья {who}',
	'sb_wall' => 'Стена {who}',
	'sb_profile' => 'Профиль {who}',
	'sb_thread' => 'Темы {who}',
	
	'doing_you_can' => 'Напишите, что Вы сейчас делаете ...',
	'block_profile_all' => '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">Посмотреть личные данные</a></p>',
	'block_profile_edit' => '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">Редактировать профиль</a></span>',
	
	'viewthread_userinfo_hour' => 'час',
	'viewthread_userinfo_uid' => 'UID',
	'viewthread_userinfo_posts' => 'Посты',
	'viewthread_userinfo_threads' => 'Темы',
	'viewthread_userinfo_doings' => 'Статусы',
	'viewthread_userinfo_blogs' => 'Блоги',
	'viewthread_userinfo_albums' => 'Альбомы',
	'viewthread_userinfo_sharings' => 'Закладки',
	'viewthread_userinfo_friends' => 'Друзья',
	'viewthread_userinfo_digest' => 'Дайджесты',
	'viewthread_userinfo_credits' => 'Баланс',
	'viewthread_userinfo_readperm' => 'Доступ',
	'viewthread_userinfo_regtime' => 'Регистрация',
	'viewthread_userinfo_lastdate' => 'Последний вход',
	'viewthread_userinfo_oltime' => 'В сети',
);

?>