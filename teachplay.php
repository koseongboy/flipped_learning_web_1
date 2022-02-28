<!DOCTYPE html>
<html> 
    <head>
    <meta charset="utf-8">
        <title>덕소고거꾸로수업</title>
<link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
    <?php
    
    $sub = $_REQUEST["sub"];
    $cla = $_REQUEST["cla"];
    $link = $sub."link";
    $grade = substr($sub,0,1);
    $grade1 = $grade."subjects";
    
    $classname = $cla."강";
    
    require_once("MYDB.php");
        $pdor = db_connect();
        $asd="SELECT * FROM $link WHERE idx='1'";
        $stmhs = $pdor->query($asd);
             while($row=$stmhs->fetch(PDO::FETCH_ASSOC)){
                 $src=$row[$classname];
             }
   
        ?>
                <style>
                </style>
                <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
                <?php include "topmenu.php";?>
                <button style="width : 200px; height : auto; margin-top : 20px; font-size : 40px;" type="button" onClick="history.back();">나가기</button>
                <iframe width="1189" height="669" src="<?=$src?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                </div>
        
                

    </body>

</html>