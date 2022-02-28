<?php

$name=$_REQUEST["sub"];

        require_once("MYDB.php");
        $pdo=db_connect();



header( "Content-type: application/vnd.ms-excel; charset=utf-8");

header( "Content-Disposition: attachment; filename = $name"."수강시간.xls" );     //filename = 저장되는 파일명을 설정합니다.

header( "Content-Description: PHP4 Generated Data" );



//엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.



$EXCEL_FILE = "

<table border='1'>

    <tr>

       <td>학번</td>

       <td>1강</td>
       <td>1강시작</td>
       <td>2강</td>
       <td>2강시작</td>
       <td>3강</td>
       <td>3강시작</td>
       <td>4강</td>
       <td>4강시작</td>
       <td>5강</td>
       <td>5강시작</td>
       <td>6강</td>
       <td>6강시작</td>
       <td>7강</td>
       <td>7강시작</td>
       <td>8강</td>
       <td>8강시작</td>
       <td>9강</td>
       <td>9강시작</td>
       <td>10강</td>
       <td>10강시작</td>
    </tr>

";


        $sql="select * from $name";
        $stmh=$pdo->query($sql);
        $count=$stmh->rowCount();
        while($row=$stmh->fetch(PDO::FETCH_ASSOC)){


    $i=$row['id_num'];
    $c1=$row['1강'];
    $c2=$row['2강'];
    $c3=$row['3강'];
    $c4=$row['4강'];
    $c5=$row['5강'];
    $c6=$row['6강'];
    $c7=$row['7강'];
    $c8=$row['8강'];
    $c9=$row['9강'];
    $c10=$row['10강'];
    $s1=$row['1강시작'];
    $s2=$row['2강시작'];
    $s3=$row['3강시작'];
    $s4=$row['4강시작'];
    $s5=$row['5강시작'];
    $s6=$row['6강시작'];
    $s7=$row['7강시작'];
    $s8=$row['8강시작'];
    $s9=$row['9강시작'];
    $s10=$row['10강시작'];




    $EXCEL_FILE = "$EXCEL_FILE"."


        <tr>

        <td>".$i."</td>

        <td>".$c1."</td>
        <td>".$s1."</td>
        <td>".$c2."</td>
        <td>".$s2."</td>
        <td>".$c3."</td>
        <td>".$s3."</td>
        <td>".$c4."</td>
        <td>".$s4."</td>
        <td>".$c5."</td>
        <td>".$s5."</td>
        <td>".$c6."</td>
        <td>".$s6."</td>
        <td>".$c7."</td>
        <td>".$s7."</td>
        <td>".$c8."</td>
        <td>".$s8."</td>
        <td>".$c9."</td>
        <td>".$s9."</td>
        <td>".$c10."</td>
        <td>".$s10."</td>

        


        </tr>

    ";

}



$EXCEL_FILE = "$EXCEL_FILE"."</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>