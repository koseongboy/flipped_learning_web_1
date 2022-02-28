<!DOCTYPE html>
<html>
    <title>덕소고거꾸로수업</title>
    <head>
    <link href="memo.css" rel="stylesheet" type="text/css">
        <meta charset = "UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
    <style>
        
    </style>
    
    <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
        <?php include "topmenu.php"; ?>
        <?php
            require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.qna order by num desc";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
        
            if(isset($_SESSION['id_num'])) {
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
            <h4>1. 자유롭게 질문할 수 있는 공간입니다.</h4>
            <h4>2. 답변은 선생님들께서만 가능합니다.</h4>
            <h4>3. 사이트 관련 질문은 (cube17623@gmail.com)으로 주세요.</h4>
            <div id="memo_row1" style="width : 800px; margin-left : 300px; margin-top : 0px;">
            <form name="memo_form" method="post" action="q_write.php">
                
                <div id="memo1"><textarea rows="6" cols="86" name="content" required></textarea></div>
                <div id="memo2"><input type="submit" value ="글쓰기" style=" margin-top : -5px; height : 6rem;"></div>
            </form>
            </div>
            <br>
        <br>
        <br>
        <br>
        <br>
        <?php
            }else{
                ?>
                <script>
                alert("로그인 후 이용해주세요");
                history.back();
                </script>
            <?php
            }
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $memo_id         =$row["id_num"];
                $memo_num        =$row["num"];
                $memo_date       =$row["regist_day"];
                $memo_name       =$row["name"];
                $memo_content    =str_replace("\n","<br>",$row["content"]);
                $memo_content    =str_replace(" ", "&nbsp;", $memo_content);
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left : 270px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left : -500px;">
                    <li><?=$memo_num ?></li>
                    <li><?=$memo_name ?></li>
                    <li><?=$memo_date ?></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                if (isset($_SESSION["id_num"])){
                    if ($_SESSION["id_num"]=="admin"||$_SESSION["id_num"]==$memo_id){
                        print "<a href='qnabulletindelete.php?num=$memo_num''>[삭제]</a>";
                    }
                }
                ?>
                </li>
                </ul>
                </div>
                <div id="memo_content" style ="height : auto; margin-top : 10px; margin-left : 300px; text-align:left;"><?= $memo_content ?> </div>
                <div id="ripple1" style="margin-left : 270px;">답변</div>
                <div id="ripple2" style="width: 800px; margin-left : 270px;">
                <?php
                try {
                    $sql = "select * from user.qna_ripple where parent='$memo_num'";
                    $stmh1 = $pdo->query($sql);
                } catch (PDOException $Exception) {
                    print "오류 :".$Exception->getMessage();
                    
                }
            
                while ($row_ripple = $stmh1->fetch(PDO::FETCH_ASSOC)){
                    $ripple_num     =$row_ripple["num"];
                    $ripple_id      =$row_ripple["id_num"];
                    $ripple_name    =$row_ripple["name"];
                    $ripple_content =str_replace("\n", "<br>", $row_ripple["content"]);
                    $ripple_content =str_replace(" ", "&nbsp;", $ripple_content);
                    $ripple_date    =$row_ripple["regist_day"];
                    ?>
                        <div id="ripple_title">
                            <ul style ="margin-top : -10px; margin-left : -700px; display : block;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><b><?= $ripple_name ?>선생님</b></li>
                                <li id="mdi_del" style="text-align : right;">
                    <?php
                    if(isset($_SESSION["id_num"])){
                        if($_SESSION["id_num"]=="admin"){
                            print  "<a href='qnabulletindelete_r.php?num=$ripple_num''>[삭제]</a>";
                            
                        }
                    }
                        ?>
                            </li>
                            <li style="color:gray;"> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $ripple_date ?></li>
                    </ul>
                    </div>
                    <div id="ripple_content" style=" text-align : left; margin-left : 7px; margin-top : -50px; width : 790px;"><br><?= $ripple_content ?></div>
                        <?php
                    
                }
                if(isset($_SESSION["id_num"])){
                    if($_SESSION["id_num"]=="admin"){
                        ?>
                        <form name="ripple_form" method="post" action="q_write_r.php">
                            <input type="hidden" name="num" value="<?= $memo_num ?>">
                            <label for="tea_name">이름</label>
                            <input id="tea_name" name="tea_name">
                            <div id="ripple_insert">
                            
                                <div id="ripple_textarea">
                                    <textarea rows="3" cols="80" name="ripple_content" required></textarea>
                    </div>
                    <div id="ripple_button">
                        <input type="submit" value="작성"></div>
                    </div>
                    </form>
                    <?php } ?>
                    </div>
                    <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                    <?php

                    }
                }

                    ?>
                    </div>
            </div>
            

    </div>

    <br>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>