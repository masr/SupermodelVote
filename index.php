<?php require 'common.php';$curM=1;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <?php require 'header.php';?>
        <script src='info.php'></script>
        <script src='js/feed.js' type='text/javascript'></script>
        <script src='jwplayer/swfobject.js' type='text/javascript'>
        
        </script>
    </head>
    <body>
        <div id="content">
          <?php require 'guide.php';?>
 <div id='main'></div>
            <div id="back">
                <div id="right">
                    <h3><span style='color:red;'>NEWS</span>&nbsp活动新闻</h3>
                    <div class="title_back">
                    <br/><br/>
               <a href="news_1.php" style="font-size:17px;">【时尚仙锋--2010南京大学T台风尚秀】20强晋级名单</a>
              <br/><br/><p style="font-size:13px;">
           经过紧张激烈的角逐，20强晋级名单即日起公示！以下排名不分先后~4.25周日晚18：30， 大学生活动中心，我们将为您倾情献上巅峰之战！
              </p>
           
             
                       
                    </div>
                  
                    <h3><span style='color:red;'>HOTVEDIO</span>&nbsp热门视频</h3>
                    <div class="title_back">
                    <div id="video"></div>
                    </div>
                </div>
        
                <div id="left">
                    <div class='feed'>
                        <div class='feedTitle'>
                            <h3><span style='color:red;'>MOVEMENT</span>投票动态</h3>
                        </div>
                        <ul class='feedList'>
                            <li id='fi1' class='feedItem'>

                            </li>
                            <li id='fi2' class='feedItem'>

                            </li>
                            <li id='fi3' class='feedItem'>
                              
                            </li>
                            <li id='fi4' class='feedItem'>
                              
                            </li>
                            <li id='fi5' class='feedItem'>
           
                            </li>
                            <li id='fi6' class='feedItem'>
                             
                            </li>
                        </ul>
                        <div class='votebtn'>
                            <a href="vote.php" style="color:orange">我也投票去</a><img style='position:absolute;right:4px;top:2px;' src='css/images/go.gif'/>
                        </div>
                    </div>
<script type="text/javascript">getFeed();</script>
                    <div class='message'>
                        <div class='feedTitle'>
                          <a style='float: right; display:block;position: relative; left: -25px;top:-6px;' href='messages.php' target='black'><img title='点此查看全部留言' style='border:0px;'  src='css/images/more.png'></img></a>
                            <h3><span style='color:red;'>IMPRESSION</span>&nbsp活动印象</h3>
                        </div>
 
                        
                
                        <ul id='msg' class='msgList'>
                          <div style="color:red">大家好，我是系统管理员。关于刷票的问题，我首先声明目前的投票数据皆为真实有效的数据。之前的确存在少数刷票现象，本人已将所有可疑数据删除。请大家放心。</div>
          <?php 
                        $mvalues=get_messages();
                        foreach($mvalues as $v)
                        {
                        ?>
                            <li class='msgItem'>
                                <div class='msgInfo'>
                                   <?php echo $v['content'] ?>
                                </div>
                                 <div class='msgTag'>
                                    <div class='msgAuthor'>
                                        <span><?php echo get_datetime($v['created_at'])?></span>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                           
                        </ul>
                         <textarea id="message_box" >来留个言吧……</textarea>
                        <input class='btn' type="button" value="提交" onclick='sendMsg();'></input>
             
                    </div>
                </div>
                <div style="clear: both;">
                    &nbsp;
                </div>
                <!--content ends --><!--footer begins -->
            </div>
            <div id="bottom">
            </div>
          
        </div>
        <script type="text/javascript">
   var so = new SWFObject('jwplayer/player-viral.swf','ply','220','153','9','#ffffff');  
   so.addParam('allowfullscreen','true');  
   so.addParam('allowscriptaccess','always');  
   so.addParam('wmode','opaque');  
   so.addVariable('file','mv.flv');  
    so.addVariable('image','jwplayer/preview.png');  
   so.write('video');  
        
    </script>
    </body>
</html>
