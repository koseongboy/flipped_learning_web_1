<?php

?>
<head>
</head>
<body>

    <h1>회원 가입 관련 관리</h1>
    <fieldset>
    <h2>회원가입 가능 여부</h2>
        <?php
        require_once("MYDB.php");
        $pdo=db_connect();
            try {
                $sql="select * from user.system where setting='register'";
                $stmh=$pdo->query($sql);
                while($row=$stmh->fetch(PDO::FETCH_ASSOC)){

                    if($row['pass']=="1"){
                        ?>
                        현재 회원 가입<span style="background-color:yellow">가능</span>상태입니다.
                        <?php
                    }
                    if($row['pass']=="0"){
                        ?>
                        현재 회원 가입<span style="background-color:yellow">불가능</span>상태입니다.
                        <?php
                    }
                    ?>
                    <form action="alter.php" method="POST">
                    <input type="hidden" value="<?=$row['pass']?>" name="pass"/>
                    <input type="submit" value="전환하기"/>
        </form>
        <?php
                }
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
           
        ?>
        
        
        <h2>한 학급 회원 입력</h2>
        <form action="inputingpro.php" method="POST">
        <table border="1" width="600">
        <tr style="text-align : center;">
        비밀번호는 기본값 1111로 설정되며 이름은 빈칸이 되므로 학생이 수정해야합니다.
        </tr>
            <tr align="center">
            <th>학년</th>
            <th>
            <select name="grade">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            
            </select>
            </th>
                <th>반</th>
                <th>
                <select name="class">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>

                </select>
                </th>
                <th>끝번호</th>
                <th><input style="width : 60px;" type="number" name="num"/></th>
                
            </tr>
           
        </table>
        <input type="submit" value="정보 입력">
        </form>
        <h2>학생 한 명 회원 입력</h2>
        <h4>기본 비밀번호는 1111입니다.</h4>
        <form method="POST" action="insert1.php">
        <label for="id_num">학번</label>
        <input style="width : 60px;" type="number" name="id_num" id="id_num"/>
        <label for="name">이름</label>
        <input style="width : 60px;" id="name" name="name"/>
        <input type="hidden" value="1111" name="pw"/>
        <input type="submit" value="회원입력"/>
        </form>
        <input type="button" value="나가기" onClick="location.href='http://125.141.139.75/admin3.php'" style="width : 60px; height : 30px;"/>
            </fieldset>
    
</bpdy>
