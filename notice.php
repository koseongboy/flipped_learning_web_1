<!DOCTYPE html>
<html>
    <title>덕소고거꾸로수업</title>
    <head>
    <link href="memo.css" rel="stylesheet" type="text/css">
        <meta charset = "UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
            <?php include "topmenu.php"; ?>
            <br>
        <br>
        <br>
        <br>
        <br>
            <?php
                require_once("MYDB.php");
                $pdo= db_connect();

                try {
                    $sql = "select * from user.notice order by num desc";
                    $stmh = $pdo->query($sql);
                } catch (PDOException $Exception) {
                    print "오류: ".$Exception->getMessage();
                }
            if(isset($_SESSION["id_num"])){
                if($_SESSION["id_num"]=="admin") {
            ?>

                <div id="memo_row1" style="width : 800px; margin-left : 300px; margin-top : 0px;">
                    <form name="memo_form" method="post" action="n_write.php">
                        <div id="memo_writer" style ="text-align : left;">
                            <label for="tea_name">이름</label>
                            <input id="tea_name" name="tea_name" required>
                        </div>
                            <div id="memo1"><textarea rows="6" cols="86" name="content" required></textarea></div>
                            <div id="memo2"><input type="submit" value ="글쓰기" style=" margin-top : -5px; height : 6rem;"></div>
                    </form>
                </div>
            <?php
                }
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
                    <ul style="margin-top : -7px; margin-left : -500px;">
                        <li><?=$memo_num ?></li>
                        <li><?=$memo_name ?></li>
                        <li><?=$memo_date ?></li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                            if (isset($_SESSION["id_num"])){
                                if ($_SESSION["id_num"]=="admin"){
                                    print "<a href='noticedelete.php?num=$memo_num''>[삭제]</a>";
                                }
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div id="memo_content" style ="height : auto; margin-top : 10px; margin-left : 300px; text-align:left;"><?= $memo_content ?> </div>
                    <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?php

                        }
                        ?>
                        </div>
                </div>
                

        </div>
    </body>
</html>