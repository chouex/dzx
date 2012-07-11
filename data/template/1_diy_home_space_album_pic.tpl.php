<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_album_pic');
0
|| checktplrefresh('./template/default/home/space_album_pic.htm', './template/default/common/seccheck.htm', 1340040066, 'diy', './data/template/1_diy_home_space_album_pic.tpl.php', './template/default', 'home/space_album_pic')
|| checktplrefresh('./template/default/home/space_album_pic.htm', './template/default/home/space_userabout.htm', 1340040066, 'diy', './data/template/1_diy_home_space_album_pic.tpl.php', './template/default', 'home/space_album_pic')
;?>
<?php $_G['home_tpl_titles'] = array(getstr($pic['title'], 60, 0, 0, 0, -1), $album['albumname'], 'Альбом');?><?php $friendsname = array(1 => 'Только друзья',2 => 'Только указанные&nbsp;',3 => 'Только мне',4 => 'По паролю');?><?php include template('home/space_header'); ?><div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h">
<?php if($space['self']) { ?><span class="xi2 y"><a href="home.php?mod=spacecp&amp;ac=upload" class="addnew">Загрузить</a></span><?php } ?>
<h1 class="mt">Альбом: <span class="xw0"><?php echo $album['albumname'];?></span></h1>
</div>
<div class="bm_c">

<div class="tbmu" id="pic_block">
<div class="y">
<a href="javascript:;" onclick="imageRotate('pic', 1)"><img class="vm" src="<?php echo STATICURL;?>image/common/rleft.gif" /></a>
<a href="javascript:;" onclick="imageRotate('pic', 2)"><img class="vm" src="<?php echo STATICURL;?>image/common/rright.gif" /></a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $upid;?>&amp;goto=up#pic_block">Предыдущая</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block" id="nextlink">Следующая</a><span class="pipe">|</span>
<?php if($_GET['play']) { ?>
<a href="javascript:;" id="playid" class="osld" onclick="playNextPic(false);">Остановить слайд-шоу</a>
<?php } else { ?>
<a href="javascript:;" id="playid" class="osld" onclick="playNextPic(true);">Начать слайд-шоу</a>
<?php } ?><span id="displayNum"></span>
</div>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;id=<?php echo $pic['albumid'];?>">&laquo; Вернуться к списку изображений</a>
<?php if($album['picnum']) { ?><span class="pipe">|</span>Текущие: <?php echo $sequence;?> <span class="pipe">|</span> Всего: <?php echo $album['picnum'];?> фото<?php } ?>&nbsp;
<?php if($album['friend']) { ?>
<span class="xg1"> &nbsp; <?php echo $friendsname[$value['friend']];?></span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_top'])) echo $_G['setting']['pluginhooks']['space_album_pic_top'];?>
</div>

<div class="vw pic">

<div id="photo_pic" class="c<?php if($pic['magicframe']) { ?> magicframe magicframe<?php echo $pic['magicframe'];?><?php } ?>">
<?php if($pic['magicframe']) { ?>
<div class="pic_lb1">
<table cellpadding="0" cellspacing="0" class="">
<tr>
<td class="frame_jiao frame_top_left"></td>
<td class="frame_x frame_top_middle"></td>
<td class="frame_jiao frame_top_right"></td>
</tr>
<tr>
<td class="frame_y frame_middle_left"></td>
<td class="frame_middle_middle">
<?php } ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block"><img src="<?php echo $pic['pic'];?>" id="pic" alt="" /></a>
<script type="text/javascript">
function createElem(e){
var obj = document.createElement(e);
obj.style.position = 'absolute';
obj.style.zIndex = '1';
obj.style.cursor = 'pointer';
obj.onmouseout = function(){ this.style.background = 'none';}
return obj;
}
function viewPhoto(){
var pager = createElem('div');
var pre = createElem('div');
var next = createElem('div');
var cont = $('photo_pic');
var tar = $('pic');
var space = 0;
var w = tar.width/2;
if(!!window.ActiveXObject && !window.XMLHttpRequest){
space = -(cont.offsetWidth - tar.width)/2;
}
var objpos = fetchOffset(tar);

pager.style.position = 'absolute';
pager.style.top = '0';
pager.style.left = objpos['left'] + 'px';
pager.style.top = objpos['top'] + 'px';
pager.style.width = tar.width + 'px';
pager.style.height = tar.height + 'px';
pre.style.left = 0;
next.style.right = 0;
pre.style.width = next.style.width = w + 'px';
pre.style.height = next.style.height = tar.height + 'px';
pre.innerHTML = next.innerHTML = '<img src="<?php echo IMGDIR;?>/emp.gif" width="' + w + '" height="' + tar.height + '" />';

pre.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-prev.png) no-repeat 0 100px'; }
pre.onclick = function(){ window.location = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $upid;?>&goto=up#pic_block'; }

next.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-next.png) no-repeat 100% 100px'; }
next.onclick = function(){ window.location = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $nextid;?>&goto=down#pic_block'; }

//cont.style.position = 'relative';
cont.appendChild(pager);
pager.appendChild(pre);
pager.appendChild(next);
}
$('pic').onload = function(){
viewPhoto();
}
</script>
<?php if($pic['magicframe']) { ?>
</td>
<td class="frame_y frame_middle_right"></td>
</tr>
<tr>
<td class="frame_jiao frame_bottom_left"></td>
<td class="frame_x frame_bottom_middle"></td>
<td class="frame_jiao frame_bottom_right"></td>
</tr>
</table>
</div>
<?php } ?>
</div>

<div class="pns mlnv vm mtm cl">
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $upid;?>&amp;goto=up#pic_block" class="btn" title="Предыдущая"><img src="<?php echo STATICURL;?>image/common/pic_nv_prev.gif" alt="Предыдущая"/></a><?php if(is_array($piclist)) foreach($piclist as $value) { ?><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=album&amp;picid=<?php echo $value['picid'];?>#pic_block"><img alt="" src="<?php echo $value['pic'];?>"<?php if($value['picid']==$picid) { ?> class="a"<?php } ?> /></a><?php } ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block" class="btn" title="Следующая"><img src="<?php echo STATICURL;?>image/common/pic_nv_next.gif" alt="Следующая"/></a>
</div>

<div class="d bbs">
<p id="a_set_title" class="albim_pic_title"><?php if($pic['title']) { ?><?php echo $pic['title'];?><?php } else { ?><?php echo substr($pic['filename'], 0, strrpos($pic['filename'], '.'));?><?php } if($pic['status'] == 1) { ?><b>(В ожидании модерации)</b><?php } ?></p>
<p class="xg1 xs1">
<?php if($pic['hot']) { ?><span class="hot">Топ <em><?php echo $pic['hot'];?></em></span><?php } if($do=='event') { ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>" target="_blank"><?php echo $pic['username'];?></a><?php } ?>
Загружено <?php echo dgmdate($pic[dateline]);?> (<?php echo $pic['size'];?>)
</p>
<?php if(isset($_GET['exif'])) { if($exifs) { if(is_array($exifs)) foreach($exifs as $key => $value) { if($value) { ?><p><?php echo $key;?> : <?php echo $value;?></p><?php } } } else { ?>
<p>Нет информации EXIF</p>
<?php } } ?>
<div class="o cl bw0 xs1 pbn">
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=pic&amp;id=<?php echo $pic['picid'];?>&amp;handlekey=sharealbumhk_<?php echo $pic['picid'];?>" id="a_share_<?php echo $pic['picid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">Закладки</a>

<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_op_extra'])) echo $_G['setting']['pluginhooks']['space_album_pic_op_extra'];?>
<?php if($pic['uid'] == $_G['uid']) { if($_G['magic']['frame']) { ?>
<img src="<?php echo STATICURL;?>image/magic/frame.small.gif" alt="frame" class="vm" />
<?php if($pic['magicframe']) { ?>
<a id="a_magic_frame" href="home.php?mod=spacecp&amp;ac=magic&amp;op=cancelframe&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="ajaxmenu(event,this.id)">Отменить рамку</a>
<?php } else { ?>
<a id="a_magic_frame" href="home.php?mod=magic&amp;mid=frame&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="ajaxmenu(event,this.id, 1)">Добавить рамку</a>
<?php } ?>
<span class="pipe">|</span>
<?php } } if($_G['uid'] == $pic['uid'] || checkperm('managealbum')) { ?>
<a href="home.php?mod=spacecp&amp;ac=album&amp;op=editpic&amp;albumid=<?php echo $pic['albumid'];?>&amp;picid=<?php echo $pic['picid'];?>">Фото</a><span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=album&amp;op=edittitle&amp;albumid=<?php echo $pic['albumid'];?>&amp;picid=<?php echo $pic['picid'];?>&amp;handlekey=edittitlehk_<?php echo $pic['picid'];?>" id="a_set_title" onclick="showWindow(this.id, this.href, 'get', 0);">Примечания</a>
<?php } if(checkperm('managealbum')) { ?>
<span class="pipe">|</span>IP: <?php echo $pic['postip'];?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=album&amp;picid=<?php echo $pic['picid'];?>&amp;op=edithot&amp;handlekey=picedithothk_<?php echo $pic['picid'];?>" id="a_hot_<?php echo $pic['picid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">Топ</a>
<?php } ?>
<!--a href="home.php?mod=spacecp&amp;ac=common&amp;op=report&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>&amp;handlekey=reportpichk_<?php echo $pic['picid'];?>" id="a_report" onclick="showWindow(this.id, this.href, 'get', 0);">Отчет</a-->

<span class="z">
<a href="<?php echo $pic['pic'];?>" target="_blank">Оригинал</a>
<?php if(!isset($_GET['exif'])) { ?>
<span class="pipe">|</span><a href="<?php echo $theurl;?>&exif=1">Просмотр EXIF информации</a>
<?php } if($_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5)) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">Отправить в ВИЗО</a>
<?php } if($pic['uid'] != $_G['uid']) { ?>
<span class="pipe">|</span><a href="javascript:;" onclick="showWindow('miscreport<?php echo $pic['picid'];?>', 'misc.php?mod=report&rtype=pic&uid=<?php echo $pic['uid'];?>&rid=<?php echo $pic['picid'];?>', 'get', -1);return false;">Отчет</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_bottom'])) echo $_G['setting']['pluginhooks']['space_album_pic_bottom'];?>
</span>
</div>
</div>

</div>
<!--[diy=diyclicktop]--><div id="diyclicktop" class="area"></div><!--[/diy]-->
<?php if($album['friend'] != 3) { ?>
<div id="click_div"><?php include template('home/space_click'); ?></div>
<?php } ?>
<!--[diy=diycommenttop]--><div id="diycommenttop" class="area"></div><!--[/diy]-->
<div id="pic_comment" class="bm bw0 mtm mbm">
<h3 class="pbn bbs">
<?php if(!empty($list)) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $pic['picid'];?>#quickcommentform_<?php echo $picid;?>" onclick="if($('comment_message')){$('comment_message').focus();return false;}" class="y xi2 xw0">Комментарий</a>
<?php } ?>
Комментарий
</h3>
<div id="comment">
<?php if($cid) { ?>
<div class="i">
Отображение только текущих комментариев <a href="<?php echo $theurl;?>#comment">Все комментарии</a>
</div>
<?php } ?>

<div id="comment_ul" class="xld xlda"><?php if(is_array($list)) foreach($list as $value) { include template('home/space_comment_li'); } ?>
</div>
</div>
<?php if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } ?>
</div>
<form id="quickcommentform_<?php echo $picid;?>" name="quickcommentform_<?php echo $picid;?>" action="home.php?mod=spacecp&amp;ac=comment&amp;handlekey=qcpic_<?php echo $picid;?>" method="post" autocomplete="off" onsubmit="ajaxpost('quickcommentform_<?php echo $picid;?>', 'return_qcpic_<?php echo $picid;?>');doane(event);" class="bm bw0" style="width: 600px;">
<?php if($_G['uid']) { ?>
<p>
<span id="comment_face" onclick="showFace(this.id, 'comment_message');return false;" class="cur1"><img src="<?php echo IMGDIR;?>/facelist.gif" alt="facelist" class="vm" /></span>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_face_extra'])) echo $_G['setting']['pluginhooks']['space_album_pic_face_extra'];?>
<?php if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>
<a id="a_magic_doodle" href="home.php?mod=magic&amp;mid=doodle&amp;showid=comment_doodle&amp;target=comment_message" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="<?php echo STATICURL;?>image/magic/doodle.small.gif" alt="doodle" class="vm" /> <?php echo $_G['setting']['magics']['doodle'];?></a>
<?php } ?>
</p>
<?php } ?>
<div class="tedt mtn mbn">
<div class="area">
<?php if($_G['uid']) { ?>
<textarea id="comment_message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" name="message" rows="3" class="pt"></textarea>
<?php } else { ?>
<div class="pt hm">Вы должны авторизироваться, чтобы оставлять комментарии <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">Войти</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a></div>
<?php } ?>
</div>

</div>
<?php if(checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm mbm sec"><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}Ответьте на вопрос{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">Обновить</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}Антибот{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">Обновить</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?></div>
<?php } ?>
<p class="pns">
<input type="hidden" name="refer" value="<?php echo $theurl;?>" />
<input type="hidden" name="id" value="<?php echo $picid;?>" />
<input type="hidden" name="idtype" value="picid" />
<input type="hidden" name="commentsubmit" value="true" />
<input type="hidden" name="quickcomment" value="true" />
<button type="submit" name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"<?php if(!$_G['uid']) { ?> onclick="showWindow(this.id, this.form.action);return false;"<?php } ?>><strong>Комментарий</strong></button>
<span id="__quickcommentform_<?php echo $picid;?>"></span>
<span id="return_qcpic_<?php echo $picid;?>"></span>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</p>
</form>
</div>


<script type="text/javascript">
function succeedhandle_qcpic_<?php echo $picid;?>(url, msg, values) {
if(values['cid']) {
comment_add(values['cid']);
} else {
$('return_qcpic_<?php echo $picid;?>').innerHTML = msg;
}
<?php if(checkperm('seccode') && $sechash) { if($secqaacheck) { ?>
updatesecqaa('<?php echo $sechash;?>');
<?php } if($seccodecheck) { ?>
updateseccode('<?php echo $sechash;?>');
<?php } } ?>
}
</script>

<script type="text/javascript">
var interval = 5000;
var timerId = -1;
var derId = -1;
var replay = false;
var num = 0;
var endPlay = false;
function forward() {
window.location.href = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $nextid;?>&goto=down&play=1#pic_block';
}
function derivativeNum() {
num++;
$('displayNum').innerHTML = '[' + (interval/1000 - num) + ']';
}
function playNextPic(stat) {
if(stat || replay) {
derId = window.setInterval('derivativeNum();', 1000);
$('displayNum').innerHTML = '[' + (interval/1000 - num) + ']';
$('playid').onclick = function (){replay = false;playNextPic(false);};
$('playid').innerHTML = 'Остановить слайд-шоу';
timerId = window.setInterval('forward();', interval);
} else {
replay = true;
num = 0;
if(endPlay) {
$('playid').innerHTML = 'Рестарт';
} else {
$('playid').innerHTML = 'Начать слайд-шоу';
}
$('playid').onclick = function (){playNextPic(true);};
$('displayNum').innerHTML = '';
window.clearInterval(timerId);
window.clearInterval(derId);
}
}
<?php if($_GET['play']) { if($sequence && $album['picnum']) { ?>
if(<?php echo $sequence;?> == <?php echo $album['picnum'];?>) {
endPlay = true;
playNextPic(false);
} else {
playNextPic(true);
}
<?php } else { ?>
playNextPic(true);
<?php } } ?>

function update_title() {
$('title_form').style.display='';
}

var elems = selector('dd[class~=magicflicker]');
for(var i=0; i<elems.length; i++){
magicColor(elems[i]);
}
</script>

<!--end bm-->

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>


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
</div></div><?php include template('common/footer'); ?>