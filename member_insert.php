<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $log = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");

	$sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

	mysqli_query($log, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($log);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
    
?>

   
