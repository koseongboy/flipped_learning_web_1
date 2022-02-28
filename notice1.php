<!DOCTYPE html>
<html>
    <title>덕소고거꾸로수업</title>
    <head>
        <meta charset = "UTF-8">
        
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="wrap" style="width : 100%; margin: 0 auto; text-align : center;">

        <?php include "topmenu.php"; ?>
        <br>
        <br>
        <br>
        <br>
        <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from main_notice";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>
            <div style="margin-top : 0px; margin: 0 auto; width : 800px; display : block; height : 30px;">
            <ul style="margin-top : -10px; margin-left :0px;; list-style:none;">
            <?
             $content = $row['content'];
             $file = $row['file'];
             if(isset($row['link'])){

                $link = $row['link'];
             
                    ?>
                    
               
                    <li><h1><a href="<?=$link?>"><?=$content?></a></h1></li>
                    
                        <?
             }
             else if (isset($row['file'])){

                $file = $row['file'];
                ?>
                    
               
                <li><h1><a href="mainnotice/<?=$file?>" download><?=$content?></a></h1></li>
                
                    <?

             }
             else {
                 ?>
                <li><h1><?=$content?></h1></li>
                <?
             }
?>
</ul>
                </div>
             <div class="clear" style="clear:both;"></div>
             <div class="linespace_10" style="height:50px;"></div>
             
             <?
             }
        
             ?>
        <a href='main.php'><h1>공지사항 접기△</h1></a>
        <h4>회원 정보는 수행평가와 직결되니 자신과 맞게 작성해 주세요 (이상한 계정 삭제되었습니다.)</h4>
    <br>
    <h4>학번은 5자리 숫자입니다. 양식 : 학년1자리+반 2자리(ex. 3반일 경우 03)+번호2자리(ex. 3번일 경우 03) = 다섯자리</h4>
    <br>
    <h4>1학년 학생들은 자기 학번/비밀번호 1111로 로그인 후 우측 상단 회원정보 수정을 해주세요.</h4>
    <br>
    <h4>모바일 수강 시 어플리케이션을 이전 앱과 혼동하지 말고 다운받아주세요. (아래 사진 참고)</h4>
    <br>
    <h4>사이트 관련 질문은 (cube17623@gmail.com)으로 연락주시면 가장 빠르게 답변받으실 수 있습니다.</h4>
    <input type="image" src="frontimg1.jpg" style="margin-top : 3rem;">
</div>
        
    </body>
</html>