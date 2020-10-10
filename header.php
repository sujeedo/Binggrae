<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>
<style>
#login_member, #logout_box {
  text-align: right;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
}
</style>
</head>
  <body>
    <div id="container"> 
      <div id="line"></div>
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
      
<?php
    if(!$userid) {
?>              <div id="login_member">  
                <li><a href="login_form.php">로그인</a></li>
                <li>|</li>
                <li><a href="member_form.php">회원가입</a> </li>
        
                </div>
                
<?php
    } else {
                $logged = $username."(".$userid.")님";
?>              
                <div id="logout_box"> 
                <li><?=$logged?> </li>
                <li>|</li>
                <li><a href="logout.php">로그아웃</a> 
                </div>
               
               
<?php
    }
?>
  </div>
 </body>
</html>
    