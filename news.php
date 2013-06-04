<?php
require './common.php';$curM=3;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
   <?php require 'header.php';?>
        
        <style>
        .news_block a.title{font-size:20px}
        .news_block .datetime{}
        .news_block p.body{font-size:13px;text-indent:2em;margin-top:10px}
        .news_block .img{height:100px; }
        .news_block {padding:40px 0 50px 50px;}
        .news_block {padding-top:20px}
        .news_block .imgs{margin-top:10px;}
        .news_block img{margin:0 5px 0 5px}
        .news_block a{color:green}
        .news_block a:visited{color:green}
        </style>

    </head>
    <body>
    <div id="content">
       <?php require 'guide.php';?>
       <div id="main"></div>
            <div id="back">
               <ul>
               <li>
               <div class="news_block">
               <a class="title" href="news_1.php">【时尚仙锋--2010南京大学T台风尚秀】20强晋级名单</a>
               <span class="datetime">发表于2009-10-02</span><br/>
              <p class="body">
           经过紧张激烈的角逐，20强晋级名单即日起公示！以下排名不分先后~4.25周日晚18：30， 大学生活动中心，我们将为您倾情献上巅峰之战！

              </p>
              <div class="imgs">
              <img src="images/news_1.png"></img>
              </div>
               </div>
               </li>
               
               </ul>
                <div style="clear: both;">
                    &nbsp;
                </div>
                <!--content ends --><!--footer begins -->
            </div>
            <div id="bottom">
            </div>
       
			<div id="mask"></div>
          
        </div>
        <!-- footer ends-->
    </body>
</html>

                          