<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";
	
	$bno = $_GET['idx'];

	require_once("../../MYDB.php");
	$pdor=db_connect();
	
	$asd="SELECT * FROM board WHERE idx=$bno";
            $stmhs = $pdor->query($asd);
        

        while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
			$tts=$row['file'];
			unlink("../../upload/$tts");
		}

	$sql = mq("delete from board where idx='$bno';");
	$sql = mq("delete from reply where con_num='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");
location.href="../../index.php";</script>
