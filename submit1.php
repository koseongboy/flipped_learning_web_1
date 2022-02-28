<!DOCTYPE html>
<html>
    <title>덕소고거꾸로수업</title>
    <head>
    <meta charset = "UTF-8">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            .ui-controlgroup-vertical {
            width: 150px;
            }
            .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
            .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
            text-align: center;
            }
            #car-type-button {
            width: 120px;
            }
            .ui-controlgroup-horizontal .ui-spinner-input {
            width: 20px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
            $( ".controlgroup" ).controlgroup()
            $( ".controlgroup-vertical" ).controlgroup({
            "direction": "vertical"
            });
             } );
         </script>

    <link href="memo.css" rel="stylesheet" type="text/css">
        
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
                $sql = "select * from user.submit order by num desc";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }

            if(!isset($_SESSION["id_num"])){
                ?>
                <br>
                <br>
                <br>
                <br>
                
                <b>과제물 제출을 위해선 먼저 로그인 해주세요</b><br>
                <?php
            }
            
            else if($_SESSION["id_num"]=="admin") {
        ?>

            <div id="memo_row1" style="width : 800px; margin-left : 300px; margin-top : 0px;">
            <form name="memo_form" method="post" action="s_write.php">
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
            else if($_SESSION["id_num"]!="admin"){
                ?>
                <h1>검색은 ctrl+F 키로 찾을 수 있습니다.</h1>
                <?php
            }
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $memo_id         =$row["id_num"];
                $memo_num        =$row["num"];
                $memo_name       =$row["name"];
                $memo_content    =str_replace("\n","<br>",$row["content"]);
                $memo_content    =str_replace(" ", "&nbsp;", $memo_content);
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 6rem; margin-left : 250px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -7px; margin-left : -600px;">
                    <li style="margin-left : -50px;"><?=$memo_name ?></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                 if (isset($_SESSION["id_num"])){
                    if ($_SESSION["id_num"]=="admin"){
                       ?>
                         <?php
                                $memo_content=str_replace("&nbsp;"," ",$memo_content);
                            ?>
                            <form method="POST" action="submit1delete.php" style="margin-top : -23px; margin-left : 1200px;">
                                <input type="hidden" value="<?=$memo_num?>" name="num">
                                <input type="hidden" value="<?=$memo_content?>" name="content">
                                <input type="submit" value="삭제">
                            </form>
                          
                            <form action="paper/deadline.php" name="aaa" method="POST" style="margin-top :-26px; margin-left : 1100px;" >
                            <input type="hidden" value="<?=$memo_content?>" name="content">
                            <input type="hidden" value="<?=$memo_num?>" name="num">
                            <input type="submit" value="마감"/>
                            </form>
                            
                            <form method="POST" action="download.php" style="margin-top : -28px; margin-left : 970px;">
                            <input type="hidden" value="<?=$memo_content?>" name="content">
                            <input type="submit" value="다운로드">
                            
                            </form>
                       <?php
                    }
                    ?>
                    <br>
                    <br>
                    <br>
                    <form method="POST" action="filesubmit.php" style="margin-left : 75px;" enctype="multipart/form-data">
                        <input type="file" name="file" style="margin-left : 380px;">
                        <div class="controlgroup" >
                    
                        <select id="subject" name="cla" >
                      <option>1반</option>
                      <option>2반</option>
                      <option>3반</option>
                      <option>4반</option>
                      <option>5반</option>
                      <option>6반</option>
                      <option>7반</option>
                      <option>8반</option>
                      <option>9반</option>
                      <option>10반</option>
                      <option>11반</option>
                      <option>12반</option>

                    </select>
                    <?php
                                        $memo_content=str_replace("&nbsp;"," ",$memo_content);
                                        ?>
                    <input type="hidden" value="<?=$memo_num?>" name="num">
                    <input type="hidden" value="<?=$memo_content?>" name="content">
                    <input type="submit" value="제출">
                </div>
                    </form>
                    <?php
                }
                                
                            ?>
            
                </li>
                </ul>
                </div>
                <div id="memo_content" style ="height : auto; margin-top : 10px; margin-left : 300px; text-align:left;"><?= $memo_content ?> </div>
                    <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:25px;"></div>
                    <?php

                    }
                    ?>
                    </div>
            </div>
            

    </div>
    </body>
</html>