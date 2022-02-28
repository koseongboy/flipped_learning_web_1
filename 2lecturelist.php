<?php 
session_start();
$id = $_SESSION['id_num'];
$change=' ';
if(isset($_REQUEST['s'])) $change=$_REQUEST['s'];


?>
<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link href="memo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
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
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          
    </head>
    
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
    <br><br>
    <div id="sidebar" style="margin-left : 94px; width : 180px; height : auto; margin-top: 100px;" >
            <ul>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/1lecturelist.php">1학년</a></li>
                <li style="text-decoration : underline; color : black; font-size : 1rem;"><b>2학년</b></li>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/3lecturelist.php">3학년</a></li>
                <li><a style="text-decoration : none; color : black; font-size : 1rem;" href="http://125.141.139.75/4lecturelist.php">방과후</a></li>
            </ul>
        </div>
        <div style="width : 700px; margin-left : 300px; margin-top : -100px;">
        <h1>강의 듣기</h1>
    
        <?php
    }
    ?>
    <fieldset>
    <legend>강의 목록</legend>
                <form name="form" id="form" method="get">
        
                <div class="controlgroup">
                <select id="s" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             if($row['name']==$change){
                    ?>
                    

        <option selected><?=$row['name']?></option>
                <?
             }
             else{
                ?>
                    

                <option><?=$row['name']?></option>
                        <?
             }
        }
             ?>
                </select>
            
                
                    </div>
                    
     <?
     
     if(isset($_REQUEST['s'])){
            
            require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $change";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            for ($i=1;$i<$n;$i++){
                $k = $i."강제목";
                $z = $i."강";
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.2subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                require_once("MYDB.php");
            $pdoz= db_connect();

            try {
                $sql = "select * from $change where id_num = '$id'";
                $stmhz = $pdoz->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
                
            
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :0px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
                <?
                    while($asdfg = $stmhz->fetch(PDO::FETCH_ASSOC)){
                        ?>
                    <li><a href="play.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <li>/<?=$asdfg[$z]?></li>
                    <?
                    }
                    ?>
                    
                </ul>
                </div>
                <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?
            
            }
                }
            }
                ?>
                    </div>
                    
            </fieldset>
            </form>
            </fieldset>
            </div>
            </div>
    <script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
            


</script>

</html>