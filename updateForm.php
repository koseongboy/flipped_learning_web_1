
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        
        <title>회원정보 수정</title>
        <link rel="stylesheet" type="text/css" href="main.css">
       
    </head>
    <body>
    <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
    <?php include "topmenu.php"; ?>
    <?php
    $id_num = $_SESSION["id_num"];

    require_once("MYDB.php");
    $pdo=db_connect();
?>
<br>
<br>
<br>
<br>

    <h1>회원 정보 수정</h1>
    <fieldset>
        <?php
            try {
                $sql="select * from students where id_num=?";
                    $stmh=$pdo->prepare($sql);
                    $stmh->bindValue(1,$id_num);
                    $stmh->execute();

                    $count=$stmh->rowCount();
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
            if($count<1){print "수정자가 없습니다.<br>";}
            else{
                $row=$stmh->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="post" action="updatePro.php">
            <p>
                <?=$row['id_num']?>
                </p>
                <p>
                    <label for="password">비밀번호:</label>
                    <br>
                    <input id="password"type ="password" value="<?=$row['pw']?>" required name="pw">
                </p>
                <p>
                    <label for="name">이름:</label>
                    <br>
                    <input id="name" value="<?=$row['name']?>" required name="name">
                </p>
                <p>
                    <input type="submit" value="정보 수정"/>
                </p> 
                <input type="hidden" name="id_num" value="<?=$id_num?>" >
            </form>
            <?php } ?>
            </div>
    </body>
</html>