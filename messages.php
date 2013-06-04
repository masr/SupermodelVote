<?php
require './common.php';$curM=3;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
   <?php require 'header.php';?>
        


    </head>
    <body>
    <div id="content">
       <?php require 'guide.php';?>
       <div id="main"></div>
            <div id="back">
            <?php $messages=get_all_message();?>
          
             <ul id='msg' class='msgList'>
                        <?php 
                        $mvalues=get_messages();
                        foreach($messages as $v)
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
                <div style="clear: both;">
                    &nbsp;
                </div>
                <!--content ends --><!--footer begins -->
            </div>
            <div id="bottom">
            </div>
            <div id="footer">
                <p>
                    Copyright &copy; 2010. Designed by <a href="mailto:abraham1@163.com" title="Abraham">Abraham</a>&<a href=''>Eric</a>
                </p>
                <p>
                    友情链接：<a href='http://www.sfs.nju.edu.cn/default.aspx'>外国语学院</a>,<a href='http://software.nju.edu.cn'>软件学院</a>,<a href=''>政府管理学院</a>
                </p>
            </div>
			<div id="mask"></div>
          
        </div>
        <!-- footer ends-->
    </body>
</html>

                          