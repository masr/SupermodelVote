<?php
if(!defined('IN_BAITUAN')){
	echo 'Bad';
	exit();
}
?>
<!-- header begins -->
<div id="header">
<div id="logo">
<h1><a href="#">时尚仙锋</a></h1>
<h2><a href="vote.html" id="metamorph">为你支持的选手投一票</a></h2>
</div>
<div id="menu">
<ul>
	<li id="button1"><a href="index.php" title=""
	<?php if($curM==1) echo ' class=\'on\'';?>>活动首页</a></li>
	<li id="button2"><a href="vote.php" title=""
	<?php if($curM==2) echo ' class=\'on\'';?>>选手投票</a></li>
	<li id="button3"><a href="news.php" title=""
	<?php
	if($curM==3)
	echo' class=\'on\'';
	?>>活动新闻</a></li>

	<li id="button4"><a href="pic.php" title=""
	<?php if($curM==4) echo ' class=\'on\'';?>>活动图片</a></li>
	<li id="button5"><a href="video.php" title=""
	<?php if($curM==5) echo 'class=\'on\'';?>>活动视频</a></li>
	

</ul>
</div>
</div>
<!-- header ends -->
<!-- content begins -->
 <div id='hint' style="color:black;font-size:16px">为获得更好性能和显示效果，建议使用ie7.0及以上版本</div>