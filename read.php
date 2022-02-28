<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css" />

<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/common.js"></script>




</head>
<body>
<div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
<?php include "topmenucopy.php"; ?>
</div>
<body>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			 <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[content]"); 
				$file_name = "$board[file]";
				$file_type_check = explode('.',$file_name);
				$file_type = $file_type_check[count($file_type_check)-1];

				if ($file_type == "jpeg"||$file_type == "gif"||$file_type == "jpg"||$file_type == "png"||$file_type == "tiff") {
					echo("<br><image style='margin : 0 auto; height : 400px; width : 600px;' type='image' src='upload/$board[file]'></image>");
				}
				if ($file_type == "mp4"||$file_type == "avi"||$file_type == "mov") {
					echo("<br><video src='upload/$board[file]' controls style='margin-top : 5rem;'></video>");
				}
				
				?>
				
			</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="index.php">[목록으로]</a></li>
			<?php
			if (isset($_SESSION["id_num"])){
				if ($_SESSION["id_num"]=="admin"||$_SESSION["id_num"]==$board["pw"]){
			?>
			<li><a href="page/board/delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
			<?php
				}
			}
			?>
		</ul>
	</div>
	<div id="bo_line"></div>
	<div>
첨부 파일 : <a href="../../upload/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a>
</div>
<div id="bo_line"></div>
	<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo "익명";?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<input type="hidden" name="pw" value="<?=$_SESSION['id_num']?>" /> <input style="position : absolute; left : 48%; top : 48%;" type="submit" value="확인">
				 </form>
			</div>
		</div>
	<?php }if(isset($_SESSION['id_num'])){ ?>

	<!--- 댓글 입력 폼 -->

	<div class="dap_ins">
			<input type="hidden" name="bno" class="bno" value="<?php echo $bno; ?>">
			<input type="hidden" name="dat_user" id="dat_user" class="dat_user" value="<?=$_SESSION['name']?>">
			<input type="hidden" name="dat_pw" id="dat_pw" class="dat_pw" value="<?=$_SESSION['id_num']?>">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt">댓글</button>
			</div>
	</div>
	<?php
	}
	?>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>
</body>
</html>