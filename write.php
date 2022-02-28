<!doctype html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['id_num'])){
    ?>
<div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
<?php include "topmenucopy.php"; ?>
</div>
    <div id="board_write">
        <h1><a href="/">자유게시판</a></h1>
        <h4>1. 자유롭게 글을 쓰실 수 있는 공간입니다.</h4>

        <h4>2. 비회원 및 선생님은 입장하실 수 없습니다. (몰래 하는 중) 들키지 않는 이상 계속 이 상태를 유지할 것이고, 만약 들키면 공지 후 전환하겠습니다.</h4>

        <h4>3. 비속어 같은 거는 제제하지 않을 예정입니다.</h4>

        <h4>4. 자유롭게 써주세요</h4>
        <h4>5. 파일 첨부에 이미지 및 영상 파일을 첨부할 경우 글 맨 아래에 이미지 및 영상이 보입니다.</h4>
        <h4>6. 글 하나 당 파일은 한 개씩만 업로드 가능합니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_file">
                        <input type="file" value="1" name="b_file" />
                    </div>


                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
    else{
        ?>
        <script>
            alert("로그인 후 이용해 주세요");
            history.back();
            </script>
            <?php
    }
    ?>
    </body>
</html>