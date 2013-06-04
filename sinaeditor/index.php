<?php
/**
 * Title:新浪博客编辑器PHP版封装类
 * coder:gently
 * Date:2007年11月9日
 * Power by ZendStudio.Net
 * http://www.zendstudio.net/原创
 * http://www.codefans.net/修正|2008年9月22日
 * 您可以任意使用和传播，但请保留本段信息！
 *
 */
header('Content-Type:text/html;Charset=utf-8;');
include_once('sinaEditor.class.php');
extract($_POST);
extract($_GET);
unset($_POST,$_GET);
$act=='subok' && die("提交的内容是：<br>".htmlspecialchars($gently_editor));

$editor=new sinaEditor('gently_editor');
$editor->Value='<img src="../logo.gif"><h2>新浪博客编辑器PHP图片上传版！
</h2>';
$editor->BasePath='.';
$editor->Height=500;
$editor->Width=650;
$editor->AutoSave=false;
?>
<div align="center">
<form name="form1" id="form1" method="post" action="index.php?act=subok">
<?php
	$editor->Create();
?><br />
<input type="submit" value="提交">
<input type="reset" value="重置">
</form>
</div>
	