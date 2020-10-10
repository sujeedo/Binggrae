<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
            <script>
            alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
            history.go(-1)
            </script>
        ");
                exit;
    }

    $file_dir = "./images/"; 
    $file_path = $file_dir.$_FILES["imgname"]["name"];

    
    if(move_uploaded_file($_FILES["imgname"]["tmp_name"], $file_path)) {
        $img_dir = "./images/";
		$img_path = $img_dir.$_FILES["imgname"]["name"];
        $size = getimagesize($file_path);
    }
	else {
        echo "<script>alert('파일 업로드 오류가 발생했습니다!')</script>";
	}
    
    $esubject = $_POST["esubject"];

    $con = mysqli_connect("localhost", "gomeya", "gome1243!", "gomeya");
    
	$sql = "INSERT into event_board (id , subject, imgname) values('$userid','$esubject','$img_path'); ";
    $result=mysqli_query($con, $sql);  
    if(!$result) {
        echo "에러".mysqli_error($con);
    }
    
	mysqli_close($con);                // DB 연결 끊기
    
    echo ("
        <script>
            location.href = 'event_board.php';
        </script>
    ");

?>