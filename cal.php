<style>
 tr, td {
    border: 1px solid #444444;
  }
</style>
<div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
<?
include "topmenu.php";
if(isset($_REQUEST["yy"])){
$yy = $_REQUEST["yy"];
}
if(isset($_REQUEST["mm"])){
$mm = $_REQUEST["mm"];
}
if(!isset($yy)) $yy = date('Y');
if(!isset($mm)) $mm = date('m');


	function sel_yy($yy) {
		if($yy == '') $yy = date('Y');
		$str = "<select name='yy'>\n<option value=''></option>\n";

		$gijun = date('Y');
		for($i=$gijun;$i<$gijun+3;$i++) {
		if($yy == $i) $str .= "<option value='$i' selected>$i</option>";
		else $str .= "<option value='$i'>$i</option>";
		}
		$str .= "</select>";
		return $str;
		}

		function sel_mm($mm) {
			if($mm == "") $mm = date('m');
			$str = "<select name='mm'>\n";
			for($i=1;$i<13;$i++) {
				$month = sprintf("%02d",$i);
			if($mm == $i) $str .= "<option value='$month' selected>{$i}</option>";
			else $str .= "<option value='$month'>{$i}</option>";
			}
			$str .= "</select>";
			return $str;
			}

function get_schedule($yy,$mm,$dd) {
	require_once("MYDB.php");
    $pdo=db_connect();
	$dtstr = $yy."-".$mm."-".$dd;
	$sql = "SELECT *
FROM schedule
WHERE frdt = '$dtstr'";
	$stmh=$pdo->query($sql);
	while($row=$stmh->fetch(PDO::FETCH_ASSOC)) {
		$str = "<b style='font-size:13px;'>-".$row['name']."</b>";
		echo $str;
                 if (isset($_SESSION["id_num"])){
					$no = $row['no'];
                     if ($_SESSION["id_num"]=="admin"){
						 
						   echo "<a style ='font-size:13px;' href='caldelete.php?num=$no'>[삭제]</a>";
						   echo "<a style ='font-size:13px;' href='output.php?num=$no'>[출력]</a>";
					  }
					  else {
						  
						echo "<a style ='font-size:13px;' href='calregister.php?num=$no'>[신청]</a>";
						echo "<a style ='font-size:13px;' href='calcancel.php?num=$no'>[취소]</a>";
					  }
                 }
							
echo "<br>";

	}
	
}
if(isset($_SESSION["id_num"])){
if($_SESSION["id_num"]=="admin") {
?>

<div id="memo_row1" style="width : 800px; margin-left : 300px; margin-top : 0px;">
	<form name="memo_form" method="post" action="cal_write.php">
		<div id="memo_writer" style ="text-align : left;">
			<label for="name">일정 이름</label>
			<input id="name" name="name" required>
			<br>
			<?=sel_yy($yy)?>년
			<select id="mm" name="mm">
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
			월
			<select id="dd" name="dd">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
			</select>
			일
			<input type="submit" value ="작성하기">
		</div>
			
			
	</form>
</div>
<?php
}
}


// 1. 총 일수 구하기


// 2. 시작요일 구하기


// 3. 몇주인 지 구하기


// 4. 마지막 요일 구하기

?>
<form name="form" method="get">
<table style="margin-left : 150px;" width='910' cellpadding='0' cellspacing='1' bgcolor="#999999">
<tr>
<td height="50" align="center" bgcolor="#FFFFFF" colspan="7">
<?=sel_yy($yy)?>년 <?=sel_mm($mm)?>월 <input type="submit" value="보기"></td>
</form>
<?php
$last_day = date("t", strtotime($yy."-".$mm."-01"));
$start_week = date("w", strtotime($yy."-".$mm."-01"));
$total_week = ceil(($last_day + $start_week) / 7);
$last_week = date('w', strtotime($yy."-".$mm."-".$last_day));
?>
</tr>
<tr>
<td width="130" height="30" align="center" bgcolor="#DDDDDD"><b>일</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>월</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>화</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>수</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>목</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>금</b></td>
<td width="130" align="center" bgcolor="#DDDDDD"><b>토</b></td>
</tr>

<?
$today_yy = date('Y');
$today_mm = date('m');
// 5. 초기값 1
$day=1;

// 6. 총 주수에 맞춰서 세로줄 만들기
for($i=1; $i <= $total_week; $i++){?>
<tr>
<?
	// 7. 총 가로칸 만들기
	for ($j=0; $j<7; $j++){
?>
<td width="130" height="120" align="left" valign="top" bgcolor="#FFFFFF">
  <?
	// 8. 시작과 끝 정하기
	if (!(($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))){

		if($j == 0){
			// 9.일요일
			echo "<font color='#FF0000'><b>";
		}else if($j == 6){
			// 10. 토요일
			echo "<font color='#0000FF'><b>";
		}else{
			// 11. 평일
			echo "<font color='#000000'><b>";
		}

		// 12. 오늘일 때 밑줄
		if($today_yy == $yy && $today_mm == $mm && $day == date("j")){
			echo "<u>";
		}
		
		// 13. 날짜 표시
		echo $day;

		if($today_yy == $yy && $today_mm == $mm && $day == date("j")){
			echo "</u>";
		}
		

		echo "</b></font> &nbsp;";

		//일정 표시
		echo "<br>";
		get_schedule($yy,$mm,$day);
		
		// 14.하루 추가
		$day++;
	}
	?>
</td>
<?php }?>
</tr>
<?php }?>
</table> 

</div>