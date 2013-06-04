<?php require 'common.php';
$curM=5;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <?php require 'header.php';?>

        <script src='jwplayer/swfobject.js' type='text/javascript'>
        
        </script>
    </head>
    <body>
        <div id="content">
          <?php require 'guide.php';?>
          <div id='main'></div>
            <div id="back">
            <h2>活动宣传视频</h2>
            <div id="video" style='	position:relative;	top:10px;	left:130px;	'></div>
            </div>
            <div id="bottom">
            </div>
            <div id="footer">
                <p>
                    Copyright &copy; 2010. Designed by <a href="mailto:abraham1@163.com" title="Abraham">Abraham</a>&<a href=''>Eric</a>
                </p>
                <p>
                    友情链接：<a href='http://www.sfs.nju.edu.cn/default.aspx'>南京大学外国语学院</a>,<a href='http://software.nju.edu.cn'>南京大学软件学院</a>
                </p>
            </div>
        </div>
        <script type="text/javascript">
   var so = new SWFObject('jwplayer/player-viral.swf','ply','500','400','9','#ffffff');  
   so.addParam('allowfullscreen','true');  
   so.addParam('allowscriptaccess','always');  
   so.addParam('wmode','opaque');  
   so.addVariable('file','mv.flv');  
    so.addVariable('image','jwplayer/preview.png');  
   so.write('video');  
        </script>
        <!-- footer ends-->
    </body>
</html>
