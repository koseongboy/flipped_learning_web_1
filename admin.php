<?php
$change=' ';
if(isset($_REQUEST['s'])) $change=$_REQUEST['s'];
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
    <link href="memo.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet" type="text/css">
        <title>
            선생님 작업 환경
        </title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
        <title>jQuery UI Controlgroup - Default Functionality</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Content via Ajax</title>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".tabs" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  } );
  </script>
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
         
        
    </head>
    <body>
        <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
    <?php include "topmenu.php"; ?>
    <?php
        require_once("MYDB.php");
        $pdo=db_connect();

     if($_SESSION["id_num"]=="admin"){
         ?>
         <br>
         <br>
         <br>
         <br>

    <h1 style="position : absolute; left : 45%;">영상 업로딩</h1>
        
            <fieldset style="margin-top : 60px;">
                <legend>확장자는 mp4로 올려주세요.</legend>
                <div class="tabs">
  <ul>
    <li><a href="#grade1">1학년</a></li>
    <li><a href="#grade2">2학년</a></li>
    <li><a href="#grade3">3학년</a></li>
  </ul>
  <div id="grade1">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
 
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="file" name ="vid">
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    
                    <input type="submit" value="업로드" name="submit"/>
            
        </form>
  </div>
  <div id="grade2">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="file" name ="vid">
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    <input type="submit" value="업로드" name="submit"/>
            
        </form>
  </div>
  <div id="grade3">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                   </div>
                    <input type="file" name ="vid">
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    <input type="submit" value="업로드" name="submit"/>
        
        </form>
  
  </div>
</div>
  </fieldset>
  <h1>업로드된 영상 확인하기</h1>
        
        <fieldset>
            <legend>과목과 강의를 선택해 주세요</legend>
<div class="tabs">
<ul>
<li><a href="#grade11111">1학년</a></li>
<li><a href="#grade22222">2학년</a></li>
<li><a href="#grade33333">3학년</a></li>
</ul>
<div id="grade11111">
<form name="form" id="form" method="get">
        
               
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 1subjects";
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
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.1subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :0px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="play.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
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
                   
                    
           
            </form>
</div>
<div id="grade22222">
<form name="form" id="form" method="get">
        
               
                <select id="asd" name='s' onChange="submit();">
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
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.2subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :0px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="play.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
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
                   
                    
           
            </form>
</div>
<div id="grade33333">
<form name="form" id="form" method="get">
        
                
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 3subjects";
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
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.3subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :0px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="play.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
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
</div>
</div>
</fieldset>
<h1>시청 현황 확인하기</h1>
        
        <fieldset >
            <legend>과목과 강의를 선택해 주세요</legend>
            <div class="tabs">
<ul>
<li><a href="#grade111111">1학년</a></li>
<li><a href="#grade222222">2학년</a></li>
<li><a href="#grade333333">3학년</a></li>
</ul>
<div id="grade111111">
<form action="1313.php" method = "post" enctype="multipart/form-data">
<div class="controlgroup">
            
            <select id="subject" name="sub">
            <?php
     $sql="select * from 1subjects";
     $stmh=$pdo->query($sql);
     $count=$stmh->rowCount();
     while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
         ?>

         <option><?=$row['name']?></option>
         <?php
        }
            ?>
            </select>
    </div>
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
        
                </form>

</div>
<div id="grade222222">
<form action="1313.php" method = "post" enctype="multipart/form-data">
<div class="controlgroup">
            
            <select id="subject" name="sub">
            <?php
     $sql="select * from 2subjects";
     $stmh=$pdo->query($sql);
     $count=$stmh->rowCount();
     while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
         ?>

         <option><?=$row['name']?></option>
         <?php
        }
            ?>
            </select>
                </div>
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
        
    </form>

</div>
<div id="grade333333">
<form action="1313.php" method = "post" enctype="multipart/form-data">
<div class="controlgroup">
            
            <select id="subject" name="sub">
            <?php
     $sql="select * from 3subjects";
     $stmh=$pdo->query($sql);
     $count=$stmh->rowCount();
     while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
         ?>

         <option><?=$row['name']?></option>
         <?php
        }
            ?>
            </select>
                </div>
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
    
    </form>

</div>
</div>

</fieldset>
                
        <h1>영상 삭제</h1>
        
            <fieldset >
            <legend>삭제할 파일의 과목과 강의를 선택하세요</legend>
            <div class="tabs">    
  <ul>
    <li><a href="#grade11">1학년</a></li>
    <li><a href="#grade22">2학년</a></li>
    <li><a href="#grade33">3학년</a></li>
  </ul>
  
  <div id="grade11">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  <div id="grade22">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  <div id="grade33">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  </div>
                
            </fieldset>
        
        <h1>강의 실적 출력</h1>
        
            <fieldset >
                <legend>출력할 과목을 선택하면 엑셀 파일로 출력합니다.</legend>
                <div class="tabs">    
  <ul>
    <li><a href="#grade111">1학년</a></li>
    <li><a href="#grade222">2학년</a></li>
    <li><a href="#grade333">3학년</a></li>
  </ul>
  
  <div id="grade111">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  <div id="grade222">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  <div id="grade333">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  </div>
                
                    </fieldset>


            
            
        </form>
        <form action="addsubject.php" method="POST">
            <h1>과목 추가</h1>
            <fieldset>
                <legend>추가할 과목명을 입력하고 확인버튼을 눌러주세요</legend>
                <div class="controlgroup">
                        <select id="subject" name="grade">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <b>학년</b>
                        </div>
                        <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="text" id="input-38" name="sub" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 이름">
						<span class="input__label-content input__label-content--isao">강의 이름</span>
                    </label>
                    </span>
                <input type="submit" value="만들기"/>
            </fieldset>
            </form>
            
            <h1>과목 삭제</h1>
            
            <fieldset>
                <legend>삭제할 과목을 선택 해 주세요.</legend>
                <div class="tabs">    
  <ul>
    <li><a href="#grade1111">1학년</a></li>
    <li><a href="#grade2222">2학년</a></li>
    <li><a href="#grade3333">3학년</a></li>
  </ul>
  
  <div id="grade1111">
  <form action="subdelete.php" method="POST">
                <div class="controlgroup">
                <select id="subject" name="sub">

                <?php
         $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="hidden" value="1" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    </form>
  </div>
  <div id="grade2222">
  <form action="subdelete.php" method="POST">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="hidden" value="2" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    
                    </form>
  </div>
  <div id="grade3333">
  <form action="subdelete.php" method="POST">
                <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <input type="hidden" value="3" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    </form>
  </div>
  </div>
               
                
            </fieldset>
            </form>
            
            
            <h1>학년 초기화</h1>
            <fieldset>
                <legend>회원 정보, 과목을 전부 초기화 합니다.</legend>
                <input type="button" onClick="button_event();" value="초기화하기"/>
            </fieldset>
            
            <h1>회원정보 관리</h1>
            <fieldset>
                <legend>관리</legend>
                <input type="button" onClick="location.href='http://125.141.139.75/ddpwk.php'" value="관리"/>
            </fieldset>
            <h1>야자실 출석체크 현황</h1>
        
            <fieldset >
                <legend>야자실 출석체크 현황을 엑셀파일로 출력합니다.</legend>
                <form action="excel1.php" method = "post" enctype="multipart/form-data">
                <input type="submit" value="출력하기"/>
                    </form>
        </fieldset>
            
            </div>

            
            <script type="text/javascript">

function button_event(){

if (confirm("정말 초기화하시겠습니까?") == true){    //확인

    location.href="rhtjdgus11.php"


}else{   

    return;

}

}

</script>


            

            <?php
     }
     else
     {
        ?>
        <script>
    alert("권한이 없습니다.");
    history.back();
</script>
    <?php
     }
     ?>
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
        
    </body>
</html>