<?php
define('IN_BAITUAN',true);
$curM=2;
require 'common.php';
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <?php require 'header.php'?>

        <script src='js/vote.js' type='text/javascript'>
        </script>
        <link href="css/vote.css" rel="stylesheet" type="text/css" />
        <script src='info.php' type='text/javascript'>
        </script>
	<!--[if lte IE 6]>
	<script type="text/javascript" src="iepngfix/iepngfix_tilebg.js"></script>
	  <style type="text/css">
		img, div{behavior:url(iepngfix/iepngfix.htc);}
	</style>
	 <link href="css/ie6.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
    </head>
    <body>
        <div id="content">
           <?php require 'guide.php'?>
           <div id='main' style="color:black;font-size:16px"></div>
            <script type='text/javascript'>
                var ps=getRandomPlayers();
                document.write('<div id=\'back\'>\n<ul>\n');
                for (var i=0;i<ps.length;i++) {
                    //var s='dsd';
                  
                        var p = ps[i];
                        if (i%4 === 0) {
                            document.write('<li>\n');
                        }
                        document.write(" <span class='single_list'>\n");
                        document.write("<img onclick='window.open(\""+p.link+"\");' id='figure" + p.id + "' src='" + p.mid_figure + "' class='player'/>\n");
                        document.write("<div class='name'>\n<a target='black' id='name" + p.id + "'  href='" + p.link + "'>" + p.name + "</a>");
                        document.write(" <img src='css/images/v.gif' onclick='vote_to(" + p.id + ");' onmouseover='this.src=\"css/images/v-on.gif\";' onmouseout='this.src=\"css/images/v.gif\";'/>");
                        document.write("</div>\n<div id='rank" + p.id + "' class='rank'>");
                        document.write("本轮：" + p.up_count + "票，排名:" + p.rank);
                        document.write("</div>\n</span>\n");
                        if (i%4 === 3) 
                            document.write('</li>\n');
                      

                }
                document.write('</ul> <div style="clear: both;">\n&nbsp\n</div>\n</div>\n');
            </script>
           
            <!--content ends --><!--footer begins -->
            <div id="bottom">
            </div>
         

        </div>
                    <div id="mask">
            </div>
        <div id='msgDialog'>
            <img id='dtbg' src='css/images/dtitle.jpg'>
            </img>
            <div unselectable='on' id='dTitle'>
                你支持了<a id='dName' href='#' style='color: orange;'>Abraham</a>，对Ta说些什么吧！
            </div>
            <div id='dContent'>
                <div class='mdiv'>
                    <div style='color: #30A6D1; margin-bottom: 5px;'>
                        我的昵称：
                    </div>
                    <input id='dUsername' type='text' value='Abraham的粉丝' />
                </div>
                <div class='mdiv'>
                    <div style='color: #30A6D1; margin-bottom: 5px;'>
                        我的祝福：
                    </div>
                    <input id='dUsermsg' type='text' value='加油！Abraham!' />
                </div>
                <div>
                    <input id='dOk' type='button' onclick='sendMsg();' value='提交'></input>
                    <input id='dC' type='button' onclick='hideDialog(false);' value='取消'></input>
                </div>
            </div>
        </div>
        <!-- footer ends-->
    </body>
</html>
