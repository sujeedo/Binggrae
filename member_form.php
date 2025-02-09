<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="./css/member_form1.css">
    <script src="https://kit.fontawesome.com/dc4c876557.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/login.js"></script>
    <script>
        function check_input() {
            if (!document.member_form.id.value) {
                alert("아이디를 입력하세요!");
                document.member_form.id.focus();
                return;
            }

            if (!document.member_form.pass.value) {
                alert("비밀번호를 입력하세요!");
                document.member_form.pass.focus();
                return;
            }

            if (!document.member_form.pass_confirm.value) {
                alert("비밀번호확인을 입력하세요!");
                document.member_form.pass_confirm.focus();
                return;
            }

            if (!document.member_form.name.value) {
                alert("이름을 입력하세요!");
                document.member_form.name.focus();
                return;
            }

            if (!document.member_form.email1.value) {
                alert("이메일 주소를 입력하세요!");
                document.member_form.email1.focus();
                return;
            }

            if (!document.member_form.email2.value) {
                alert("이메일 주소를 입력하세요!");
                document.member_form.email2.focus();
                return;
            }

            if (document.member_form.pass.value !=
                document.member_form.pass_confirm.value) {
                alert("비밀번호가 일치하지 않습니다. 다시 입력해 주세요!");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

            document.member_form.submit();
        }

        function reset_form() {
            document.member_form.id.value = "";
            document.member_form.pass.value = "";
            document.member_form.pass_confirm.value = "";
            document.member_form.name.value = "";
            document.member_form.email1.value = "";
            document.member_form.email2.value = "";
            document.member_form.id.focus();
            return;
        }

        function check_id() {
            window.open("member_check_id.php?id=" + document.member_form.id.value,
                "IDcheck",
                "left=700,top=300,width=300,height=200,scrollbars=no,resizable=yes");
        }
    </script>
    <script>
        function chk() {
            document.querySelectorAll("input")[0].checked = true;
            document.querySelectorAll("input")[1].checked = true;
            document.querySelectorAll("input")[2].checked = true;
        }

        function unchk() {
            document.querySelectorAll("input")[0].checked = false;
            document.querySelectorAll("input")[1].checked = false;
            document.querySelectorAll("input")[2].checked = false;
        }
    </script>
</head>

<body>
    <div id="main_content">
        <h1 id="join_title">
            <a href="#">단지가 궁금해<span>Online Store</span></a>
        </h1>
        <div id="join_info" class="box">
            <ul class="text_a1">
                <li class="checkbt chk1">
                    <input type="checkbox" name="chk" id="click1">
                    <label for="click1"><span></span><span></span></label>
                </li>
                <li>[필수] 이용약관</li>
                <textarea name="text" id="text_1" rows="5">
    온라인 쇼핑몰 '단지가 궁금해 온라인 스토어'회원 약관

    제1조(목적)
    이 약관은 빙그레(전자상거래 사업자)가 운영하는 단지가 궁금해 온라인 스토어 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
    
      ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
    
    제2조(정의)
    ① “몰”이란 단지가 궁금해 온라인 스토어가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.
    
    ② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.
    
    ③ ‘회원’이라 함은 “몰”에 회원등록을 한 자로서, 계속적으로 “몰”이 제공하는 서비스를 이용할 수 있는 자를 말합니다.
    
    ④ ‘비회원’이라 함은 회원에 가입하지 않고 “몰”이 제공하는 서비스를 이용하는 자를 말합니다.

    본 약관은 2020년 07월 29일부터 적용됩니다.</textarea>
            </ul>
            </ul>
            <ul class="text_a2">
                <li class="checkbt chk1">
                    <input type="checkbox" name="chk" id="click2">
                    <label for="click2"><span></span><span></span></label>
                </li>
                <li>[필수] 개인정보 수집 및 이용에 대한 안내</li>
                <textarea name="text" id="text_1" rows="5">
    ① 회원의 주소 또는 e-mail주소에 도달함으로써 회사의 통지는 유효하고, 회원 정보의 변경/미 변경에 대한 책임은 회원에게 있습니다. (제8조)

    ② 약관이 정하는 부정거래 행위를 한 회원에 대하여 제재 조치 가능 예: 직거래, 경매 부정행위, 시스템 부정행위, 결제 부정행위, 재판매 목적의 거래행위 등. (제36조)

    ③ G마켓은 통신판매중개자로서 판매자와 구매자와의 거래에 관한 분쟁에 개입하지 않으며 어떠한 보증 및 책임도 부담하지 않습니다. (제6조, 제38조)

    본 약관은 2020년 07월 29일부터 적용됩니다.</textarea>
            </ul>
            <ul>
                <li class="checkbt chk1">
                    <input type="checkbox" name="chk" id="click3">
                    <label for="click3"><span></span><span></span></label>
                </li>
                <li>
                    [선택] 이용약관, 개인정보 수집 및 이용, 위치정보 이용약관, 프로모션 안내 메일 수신에 모두 동의합니다.
                </li>
            </ul>
            <div id="agree">
                <button onclick="chk();">약관 전체 동의</button>
                <button onclick="unchk();">약관 비동의</button>
                <p>
                    ※ 선택 항목에 대한 동의를 거부하더라도 회원가입에 영향을 미치지 않습니다.
                </p>
            </div>

        </div>
        <div id="join_box" class="box">
            <form name="member_form" method="post" action="member_insert.php">
                <div class="form id">
                    <div class="col1">아이디
                        <input type="button" onclick="check_id()" value="중복확인"></input>
                    </div>
                    <div class="col2">
                        <input type="text" name="id" placeholder="아이디를 입력해주세요.">
                    </div>
                </div>
                <div class="form">
                    <div class="col1">비밀번호</div>
                    <div class="col2">
                        <input type="password" name="pass" placeholder="비밀번호를 입력해주세요.">
                    </div>
                </div>
                <div class="form">
                    <div class="col1">비밀번호 확인</div>
                    <div class="col2">
                        <input type="password" name="pass_confirm" placeholder="위의 비밀번호를 다시 입력해주세요.">
                    </div>
                </div>
                <div class="form">
                    <div class="col1">이름</div>
                    <div class="col2">
                        <input type="text" name="name" placeholder="실명으로 입력해주세요.">
                    </div>
                </div>
                <div class="form email">
                    <div class="col1">이메일</div>
                    <div class="col2">
                        <input type="text" name="email1" placeholder="이메일을 입력해주세요.">
                        @
                        <input type="text" name="email2" placeholder="이메일을 입력해주세요.">
                    </div>
                </div>
                <div class="buttons">
                    <button onclick="check_input();">회원가입</button>
                    <button id="reset_button" onclick="reset_form();">가입취소</button>
                </div>
            </form>
        </div> <!-- join_box -->
        <footer>
            <div id="home_button">
                <a href="header.php"><img src="./image/home_logo.png" width="70"></a>
            </div>
            ⓒ 2020.단지가 궁금해 온라인 스토어 all rights reserved.
        </footer>
    </div> <!-- main_content -->
</body>

</html>