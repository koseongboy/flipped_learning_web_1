<?php
session_start();
$sub = $_REQUEST["sub"];

$cla = $_REQUEST["cla"];

$id = $_SESSION["id_num"];
$link = $sub."link";
$grade = substr($sub,0,1);
$grade1 = $grade."subjects";
$datesring = date("Y-m-d G:i",time());
$classname = $cla."강";

require_once("MYDB.php");
    $pdor = db_connect();
    $asd="SELECT * FROM $link WHERE idx='1'";
    $stmhs = $pdor->query($asd);
         while($row=$stmhs->fetch(PDO::FETCH_ASSOC)){
             $src=$row[$classname];
         }
         
?>


<!DOCTYPE html>
<html> 
    <head>
    <meta charset="utf-8">
        <title>덕소고거꾸로수업</title>
        
        <script language="JavaScript">
	
    var SetTime = 0;
    var SubTime;		// 최초 설정 시간(기본 : 초)

    function msg_time() {	// 1초씩 카운트
        
        m = Math.floor(SetTime / 60) + "분 ";	// 남은 시간 계산
        
        var msg = "현재 재생 시간은 <font color='red'>" + m + "</font> 입니다.";
        
        document.all.ViewTimer.innerHTML = msg;		// div 영역에 보여줌 
                
        SetTime++;					// 1초씩 감소
        
        SubTime = Math.floor(SetTime / 60);
        document.all.time.value=SubTime;
        
    }

    window.onload = function TimerStart(){ tid=setInterval('msg_time()',1000) };
</script>





<link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <script>

function abc(){

	event.returnValue = "진도율이 저장되지 않습니다. 그래도 닫으시겠습니까?";
    
    if (event.returnValue=true){
        document.getElementById('submit').submit();
    }

}

</script>

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>


    <?php
    
        require_once("MYDB.php");
        $pdo=db_connect();
        $sql="SELECT 1강 FROM $sub WHERE id_num = $id";

         $result = $pdo->query($sql); // query() 메소드는 실패시 데이터, 성공시 FALSE 가 리턴됨
         $count=$result->rowCount();

         




    if($count != 0){
        ?>
                <style>
                </style>
                
                <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
                <?php include "topmenucopy.php";?>
                <br>
                <br>
                <h1>제출 버튼을 누르지 않으면 진도율이 저장되지 않습니다. 강의를 전부 수강하고 꼭 눌러주세요.</h1>
                <h1>모바일 데이터 사용자는 데이터 사용량 절약을 위해 우측 하단 톱니바퀴 버튼을 눌러서 화질을 조정해주세요.</h1>
                <form action="submit.php" method ="POST" id="submit">
                <iframe width="1189" height="669" src="<?=$src?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                            <div id=ViewTimer></div>
                            <div class="controlgroup">
                            </div>
                            <input type="hidden" name="sub" value="<?=$sub?>"/>
                            <input type="hidden" name="cla" value="<?=$cla?>강"/>
                            <input type="hidden" name="time" id="time" value=""/>
                            <b id="msg" name="msg" value=""></b>
            <input style="font-size : 40px;" type = "submit" value = "제출">
            <br><br><br><br>
            </form>
                </div>
        
                <?php
                    
                    }
                else {
        ?>
        <script>
        alert("먼저 수강신청 해주세요.");
        history.back();
        </script>
   <?php
                }
                $datesring = date("Y-m-d G:i",time());
         $cla1=$_REQUEST["cla"]."강시작";

         
         try {
             $pdo->beginTransaction();
             $sql="update $sub set $cla1=? where id_num=?";
                 $stmh=$pdo->prepare($sql);
                 $stmh->bindValue(1,$datesring,PDO::PARAM_STR);
                 $stmh->bindValue(2,$id,PDO::PARAM_STR);
                 $stmh->execute();
                 $pdo->commit();
                 ?>
                
                     <?php 
          } catch (PDOException $Exception) {
             $pdo->rollBack();
             echo "오류 :".$Exception->getMessage();
         }
         
   ?>
    <script language=JavaScript>function click() {if ((event.button==2) || (event.button==2)) {alert('마우스 우클릭은 이용하실 수 없습니다.');}}document.onmousedown=click// --></script>
        </body>
</html>

