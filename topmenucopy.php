
<!DOCTYPE html>
<html>
    <head>
        <title>덕소고거꾸로수업</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Nunito:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="demo.css" />
		<link rel="stylesheet" type="text/css" href="style-adsila.css" />
		<link rel="stylesheet" type="text/css" href="pater.css" />
    </head>
    <body>
        

    <div id="top_login" style="margin-left : 800px;">
<?php
    if(!isset($_SESSION["id_num"]))
	{
?>
          <a href="loginForm.php" style="text-decoration: none ; color : black;">로그인 </a>|<a style="text-decoration: none; color : black;" href="chk_register.php"> 회원가입</a>
<?php
	}
	else
	{
?>
		<?=$_SESSION["name"]?>님 | 
        <a style="text-decoration: none; color : black; " href="logout.php">로그아웃</a> | 
        <?php
         if($_SESSION["id_num"]=="admin")
         {
             ?>
             <a style="text-decoration: none; color : black; " href="admin1.php">선생님 관리창</a>
             <?php
         }
         else{
            ?>
            <a style="text-decoration: none; color : black; " href="updateForm.php?id=<?=$_SESSION["id_num"]?>">정보수정</a>
            <?php
        
         }
         ?>
<?php
	}
?>
	 </div>
        <div id="titlewrapper"><a class ="title11" href="main.php">덕소고 거꾸로수업</a></div>
         
        <div id="barwrapper" style="margin : 0 auto; height : 50px; width : 1200px;">
        <nav class="menu--adsila">
					<a class="menu__item" href="1lecturelist.php" style="margin-left : -30px;">
						<span class="menu__item-name">수업 듣기</span>
					</a>
					<a class="menu__item" href="1enrollform.php">
						<span class="menu__item-name">수강신청</span>
					</a>
					<a class="menu__item" href="index.php">
						<span class="menu__item-name">자유 게시판</span>
                    </a>
                    <a class="menu__item" href="qnabulletin.php">
						<span class="menu__item-name">질문 게시판</span>
					</a>
					<a class="menu__item" href="cal.php">
						<span class="menu__item-name">대회 일정/신청</span>
                    </a>
                    <a class="menu__item" href="submit1.php">
						<span class="menu__item-name">과제물제출</span>
					</a>
				</nav>
        
        </div>
        <script src="js/demo.js"></script>
    </body>
</html>