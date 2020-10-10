<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["adress"];

   if(!$adress) 
   {
      echo("<li>이메일을 입력해주세요</li>");
      // email 입력 안할시 채크
   }
   else
   {
      $log = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");

 
      $sql = "select * from members where id='$id'";
      // 데이터베이스 테이블 에 id 값을 불러옴.
      $result = mysqli_query($log, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$adress." 이메일이 중복됩니다.</li>";
         echo "<li>다른 이메일을 사용해주세요!</li>";
      }
      
      else
      {
         echo "<li>".$adress." 이메일 사용가능합니다 .</li>";
      }

    
      mysqli_close($log);
   }
?>
</p>
<div id="close">
   <img src="./img/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>

