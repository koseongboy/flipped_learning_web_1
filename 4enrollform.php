<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="main.css">
        <title>
            덕소고거꾸로수업
        </title>
        <meta charset="utf-8"> 
        <title>jQuery UI Controlgroup - Default Functionality</title>
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
            #sidebar {
                border : solid 1px #000000;
                width : 10rem;
                margin-top : 3rem;
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
    </head>
    <body>
    <?php 
    if(!isset($_SESSION["id_num"])){
        ?>
        <script>
        alert("먼저 로그인해주세요.");
        history.back();
        </script>
     <?php

    }
    else {
    
        ?>
        <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
    <?php include "topmenucopy.php" ?>
    
    <div id="sidebar" style="margin-left : 94px; width : 180px; height : auto; margin-top: 120px;" >
            <ul>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/1enrollform.php">1학년</a></li>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/2enrollform.php">2학년</a></li>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/3enrollform.php">3학년</a></li>
                <li style="text-decoration : underline; color : black; font-size : 1rem;"><b>방과후</b></li>
            </ul>
        </div>
        <div style="width : 700px; margin-left : 300px; margin-top : -100px;">
    <h1>수강신청</h1>
    <form action="enrolment2.php" method = "post" enctype="multipart/form-data">
    <fieldset style="margin-top : 1rem;" >
    <legend>수강신청을 원하는 과목을 선택해 주세요</legend>
    <div class="controlgroup">
                <select id="subject" name="sub">
                    <?php
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from spcclass";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    

        <option><?=$row['name']?></option>
                <?php
        }
             ?>

                </select>
                <input style="margin-left : 10px;" type="submit" value="신청하기" name="submit"/>
                    </div>
                    </fieldset>
                    </form>
                    <h1>수강신청 취소</h1>
                    <form action="enrolcancel2.php" method = "post" enctype="multipart/form-data" name="sss" id="sss">
    <fieldset style="margin-top : 1rem;" >
    <legend>수강취소를 원하는 과목을 선택해 주세요</legend>
    <div class="controlgroup">
                <select id="subject" name="sub">
                    <?php
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from spcclass";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    

        <option><?=$row['name']?></option>
                <?php
        }
             ?>

                </select>
                <input style="margin-left : 10px;" type="button" onClick="button_event();" value="취소하기"/>
                    </div>
                    </fieldset>
                    </form>
                    <?php
    }
    ?>
                <script type="text/javascript">

function button_event(){

if (confirm("정말 수강취소하시겠습니까?") == true){    //확인

    document.getElementById('sss').submit();


}else{   

    return;

}

}

</script>
    </body>
</html>