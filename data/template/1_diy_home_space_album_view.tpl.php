<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_album_view');
0
|| checktplrefresh('./template/default/home/space_album_view.htm', './template/default/home/space_userabout.htm', 1340040128, 'diy', './data/template/1_diy_home_space_album_view.tpl.php', './template/default', 'home/space_album_view')
;?>
<?php $_G['home_tpl_titles'] = array($album['albumname'], 'Альбом');?><?php $friendsname = array(1 => 'Только друзья',2 => 'Только указанные&nbsp;',3 => 'Только мне',4 => 'По паролю');?><?php include template('home/space_header'); ?><div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h cl">
<?php if($space['self']) { ?><span class="xi2 y"><a href="home.php?mod=spacecp&amp;ac=upload" class="addnew">Загрузить</a></span><?php } ?>
<h1 class="mt">Альбом: <span class="xw0"><?php echo $album['albumname'];?></span></h1>
</div>
<div class="bm_c">

<div class="tbmu cl">
<?php if($album['albumid']>0) { ?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=album&amp;id=<?php echo $album['albumid'];?>&amp;spaceuid=<?php echo $space['uid'];?>&amp;handlekey=sharealbumhk_<?php echo $album['albumid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">Избранное</a>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=album&amp;id=<?php echo $album['albumid'];?>&amp;handlekey=sharealbumhk_<?php echo $album['albumid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">Закладки</a>
<?php } ?>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['space_album_op_extra'])) echo $_G['setting']['pluginhooks']['space_album_op_extra'];?>
<?php if($space['self']) { ?><a href="<?php if($album['albumid'] > 0) { ?>home.php?mod=spacecp&ac=album&op=edit&albumid=<?php echo $album['albumid'];?><?php } else { ?>home.php?mod=spacecp&ac=album&op=editpic&albumid=0<?php } ?>">Редактировать</a><span class="pipe">|</span><?php } if(($_G['uid'] == $album['uid'] || checkperm('managealbum')) && $album['albumid'] > 0) { ?>
<a href="home.php?mod=spacecp&amp;ac=album&amp;op=delete&amp;albumid=<?php echo $album['albumid'];?>&amp;uid=<?php echo $album['uid'];?>&amp;handlekey=delalbumhk_<?php echo $album['albumid'];?>" id="album_delete_<?php echo $album['albumid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">Удалить</a><span class="pipe">|</span>
<?php } if($_G['uid'] != $album['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $album['albumid'];?>', 'misc.php?mod=report&rtype=album&uid=<?php echo $album['uid'];?>&rid=<?php echo $album['albumid'];?>', 'get', -1);return false;">Отчет</a><span class="pipe">|</span>
<?php } ?>
</div>
<?php if($album['catname']) { ?>
<span class="xg1">Категории</span><a href="home.php?mod=space&amp;do=album&amp;catid=<?php echo $album['catid'];?>&amp;view=all"><?php echo $album['catname'];?></a><span class="pipe">|</span>
<?php } if($album['picnum']) { ?>Всего  <?php echo $album['picnum'];?> Фотографии<?php } if($album['friend']) { ?>
<span class="xg1"> &nbsp; <?php echo $friendsname[$value['friend']];?></span>
<?php } ?>
</div>

<?php if($list) { if($album['depict']) { ?><p class="tbmu"><?php echo $album['depict'];?></p><?php } ?>
<ul class="ptw ml mlp cl"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $value['picid'];?>"><?php if($value['pic']) { ?><img src="<?php echo $value['pic'];?>" alt="" /><?php } ?></a><?php if($value['status'] == 1) { ?><b>(В ожидании модерации)</b><?php } ?>
</li>
<?php } ?>
</ul>
<?php if($pricount) { ?><p>Примечание:  (<?php echo $pricount;?>) недоступно для просмотра</p><?php } if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } } else { if(!$pricount) { ?><p class="emp">В альбоме отсутствуют фотографии</p><?php } if($pricount) { ?><p>Примечание:  (<?php echo $pricount;?>) недоступно для просмотра</p><?php } } ?>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
</div>
<?php if($albumlist) { ?>
<div class="bm mtm">
<div class="bm_h cl">
<?php if($albumlist) { ?>
<div class="y mtn">
<a href="javascript:;" id="sabup" onclick="switchAlbum(0);this.blur();return false;" title="Предыдущий"><img src="<?php echo STATICURL;?>image/common/pic_nv_prev.gif" alt="Предыдущий"/></a> 
<a href="javascript:;" id="sabdown" onclick="switchAlbum(1);this.blur();return false;" title="Следующий"><img src="<?php echo STATICURL;?>image/common/pic_nv_next.gif" alt="Следующий"/></a>
</div>
<?php } ?>
<h2>Обложки</h2>
</div>
<div class="bm_c">
<div id="pnv" class="bn pns cl">
<?php if($albumlist) { if(is_array($albumlist)) foreach($albumlist as $key => $albums) { ?><ul id="albumbox_<?php echo $key;?>" class="ptm ml z" <?php if(!isset($albums[$id]) && !($key==0 && $id<0)) { ?> style="display: none;"<?php } else { ?><?php $nowalbum=$key;?><?php } ?>><?php if(is_array($albums)) foreach($albums as $akey => $value) { ?><?php $pwdkey = 'view_pwd_album_'.$value['albumid'];?><li style="width: 136px;">
<div class="c">
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=album&amp;id=<?php echo $value['albumid'];?>" title="<?php echo $value['albumname'];?>" <?php if($_G['adminid'] != 1 && $value['uid']!=$_G['uid'] && $value['friend']=='4' && $value['password'] && empty($_G['cookie'][$pwdkey])) { ?> onclick="showWindow('right_album_<?php echo $value['albumid'];?>', this.href, 'get', 0);"<?php } ?>><?php if($value['pic']) { ?><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['albumname'];?>" width="120" height="120" /><?php } ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=album&amp;id=<?php echo $value['albumid'];?>" title="<?php echo $value['albumname'];?>" <?php if($_G['adminid'] != 1 && $value['uid']!=$_G['uid'] && $value['friend']=='4' && $value['password'] && empty($_G['cookie'][$pwdkey])) { ?> onclick="showWindow('right_album_<?php echo $value['albumid'];?>', this.href, 'get', 0);"<?php } ?>><?php echo $value['albumname'];?></a></p>
</div>
</li>
<?php } ?>
</ul>
<?php } ?>
<script type="text/javascript">
var nowAlbum = <?php echo $nowalbum;?>;
var maxAlbum = <?php echo $maxalbum;?>;
function switchAlbum(down) {
if(down) {
if(nowAlbum + 1 < maxAlbum) {
$('albumbox_'+nowAlbum).style.display = 'none';
nowAlbum++;
$('albumbox_'+nowAlbum).style.display = '';
}
} else {
if(nowAlbum - 1 >= 0) {
$('albumbox_'+nowAlbum).style.display = 'none';
nowAlbum--;
$('albumbox_'+nowAlbum).style.display = '';
}
}
initSwitchButton();
}
function initSwitchButton(){
$('sabdown').style.display = maxAlbum-nowAlbum == 1 ? 'none' : '';
$('sabup').style.display = nowAlbum ? '' : 'none';
}
window.onload = function () {initSwitchButton();}
</script>
<?php } ?>
</div>
</div>
</div>
<?php } ?>

</div>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div <?php if(!$_G['setting']['homestatus']) { ?>class="bm_c"<?php } ?>>
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homestatus']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;diy=yes">ВИЗО</a></li>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">Стена</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">Аватар</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">Профиль</a></li>
<?php } else { ?><?php require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">В друзья</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">Игнор</a></li>
<?php } if($_G['setting']['homestatus']) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">Стена</a></li>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">Привет</a></li>
<?php } ?>
<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">ЛС</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">Действие</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">Действие</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">Управление</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">Забанить</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">Изменить</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">Посты</a></li>
<?php if($_G['setting']['homestatus']) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Статусы</a></li>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">Блог</a></li>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">Новости</a></li>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">Альбом</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Фото</a></li>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">Отзывы</a></li>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">Закладки</a></li>
<?php } if($_G['setting']['groupstatus']) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Темы группы</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Посты группы</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div></div>

</div><?php include template('common/footer'); ?>