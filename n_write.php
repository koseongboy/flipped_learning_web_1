  <?php session_start(); ?>
  <meta charset="utf-8">
  <?php
     if(!isset($_SESSION["id_num"])) {
  ?>
    <script>
         alert('로그인 후 이용해 주세요.');
	 history.back();
     </script>
  <?php
        }
  $content=$_REQUEST["content"];
  $tea_name=$_REQUEST["tea_name"];
 require_once("MYDB.php");
 $pdo = db_connect();
    try{
    $pdo->beginTransaction();   
    $sql = "insert into user.notice(id_num, name, content, regist_day)";
    $sql.= "values(?, ?, ?,now())"; 
    $stmh = $pdo->prepare($sql); 
    $stmh->bindValue(1, $_SESSION["id_num"], PDO::PARAM_STR);  
    $stmh->bindValue(2, $tea_name, PDO::PARAM_STR);   
    $stmh->bindValue(3, $content, PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit(); 
   
    header("Location:http://125.141.139.75/notice.php");
    } catch (PDOException $Exception) {
         $pdo->rollBack();
       print "오류: ".$Exception->getMessage();
    }
  ?>
    
