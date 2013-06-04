<?php
include_once './common.php';

echo "-1";

exit();


if (empty($_COOKIE['user'])||empty($_POST['voteid']))
{
echo "-1" ;
 exit();
}
   


  

 $cookie=$_COOKIE['user'];
 $voteid=intval($_POST['voteid']);

 
 
 if(!exist_cookie($cookie) || !exist_vote_id($voteid))
 {
echo "-1" ;
 exit();
}

    if (!can_vote($cookie,$voteid))
    {
    	 echo "-1" ;
    	  exit();
    }
      
       
      list($support,$remark)=vote($voteid);
      insert_vote_log($cookie,$voteid);
       
  
      echo "$voteid,$support,$remark";
      
      header("Content-Type:text/plain;charset=utf-8");
   
?>