<?php
session_start();
$datesring = date("Y-m-d G:i",time());
$id_num=$_SESSION["id_num"];
$sub=$_POST["sub"];
$cla=$_POST["cla"]."시작";
print_r($id_num);
require_once("MYDB.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction();
    $sql="update $sub set $cla=? where id_num=?";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$datesring,PDO::PARAM_STR);
        $stmh->bindValue(2,$id_num,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        ?>
       
            <?php 
 } catch (PDOException $Exception) {
    $pdo->rollBack();
    echo "오류 :".$Exception->getMessage();
}
?>
<script>
self.close();
</script>