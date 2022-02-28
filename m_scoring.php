<?php

    $y=$_REQUEST["y"];
    $s=$_REQUEST["s"];
    $sub=$_REQUEST["sub"];
    $num=$_REQUEST["num"];
    $g=$_REQUEST["g"];
    
    $name= "$y"."학년도"."$s"."학기"."$g"."학년"."$sub"."답지";
    
    $sql = "select * from scoring where num =?";
      $stmh =$pdo->prepare($sql);
      $stmh->bindValue(1,$num,PDO::PARAM_STR);
      $stmh->execute();
    
       $count = $stmh->rowCount();
        
       unlink("anser/$row["."f"."]");
    $q1 = $_REQUEST["1-1"].$_REQUEST["1-2"].$_REQUEST["1-3"].$_REQUEST["1-4"].$_REQUEST["1-5"];
    $q2 = $_REQUEST["2-1"].$_REQUEST["2-2"].$_REQUEST["2-3"].$_REQUEST["2-4"].$_REQUEST["2-5"];
    $q3 = $_REQUEST["3-1"].$_REQUEST["3-2"].$_REQUEST["3-3"].$_REQUEST["3-4"].$_REQUEST["3-5"];
    $q4 = $_REQUEST["4-1"].$_REQUEST["4-2"].$_REQUEST["4-3"].$_REQUEST["4-4"].$_REQUEST["4-5"];
    $q5 = $_REQUEST["5-1"].$_REQUEST["5-2"].$_REQUEST["5-3"].$_REQUEST["5-4"].$_REQUEST["5-5"];
    $q6 = $_REQUEST["6-1"].$_REQUEST["6-2"].$_REQUEST["6-3"].$_REQUEST["6-4"].$_REQUEST["6-5"];
    $q7 = $_REQUEST["7-1"].$_REQUEST["7-2"].$_REQUEST["7-3"].$_REQUEST["7-4"].$_REQUEST["7-5"];
    $q8 = $_REQUEST["8-1"].$_REQUEST["8-2"].$_REQUEST["8-3"].$_REQUEST["8-4"].$_REQUEST["8-5"];
    $q9 = $_REQUEST["9-1"].$_REQUEST["9-2"].$_REQUEST["9-3"].$_REQUEST["9-4"].$_REQUEST["9-5"];
    $q10 = $_REQUEST["10-1"].$_REQUEST["10-2"].$_REQUEST["10-3"].$_REQUEST["10-4"].$_REQUEST["10-5"];
    $q11 = $_REQUEST["11-1"].$_REQUEST["11-2"].$_REQUEST["11-3"].$_REQUEST["11-4"].$_REQUEST["11-5"];
    $q12 = $_REQUEST["12-1"].$_REQUEST["12-2"].$_REQUEST["12-3"].$_REQUEST["12-4"].$_REQUEST["12-5"];
    $q13 = $_REQUEST["13-1"].$_REQUEST["13-2"].$_REQUEST["13-3"].$_REQUEST["13-4"].$_REQUEST["13-5"];
    $q14 = $_REQUEST["14-1"].$_REQUEST["14-2"].$_REQUEST["14-3"].$_REQUEST["14-4"].$_REQUEST["14-5"];
    $q15 = $_REQUEST["15-1"].$_REQUEST["15-2"].$_REQUEST["15-3"].$_REQUEST["15-4"].$_REQUEST["15-5"];
    $q16 = $_REQUEST["16-1"].$_REQUEST["16-2"].$_REQUEST["16-3"].$_REQUEST["16-4"].$_REQUEST["16-5"];
    $q17 = $_REQUEST["17-1"].$_REQUEST["17-2"].$_REQUEST["17-3"].$_REQUEST["17-4"].$_REQUEST["17-5"];
    $q18 = $_REQUEST["18-1"].$_REQUEST["18-2"].$_REQUEST["18-3"].$_REQUEST["18-4"].$_REQUEST["18-5"];
    $q19 = $_REQUEST["19-1"].$_REQUEST["19-2"].$_REQUEST["19-3"].$_REQUEST["19-4"].$_REQUEST["19-5"];
    $q20 = $_REQUEST["20-1"].$_REQUEST["20-2"].$_REQUEST["20-3"].$_REQUEST["20-4"].$_REQUEST["20-5"];
    $q21 = $_REQUEST["21-1"].$_REQUEST["21-2"].$_REQUEST["21-3"].$_REQUEST["21-4"].$_REQUEST["21-5"];
    $q22 = $_REQUEST["22-1"].$_REQUEST["22-2"].$_REQUEST["22-3"].$_REQUEST["22-4"].$_REQUEST["22-5"];
    $q23 = $_REQUEST["23-1"].$_REQUEST["23-2"].$_REQUEST["23-3"].$_REQUEST["23-4"].$_REQUEST["23-5"];
    $q24 = $_REQUEST["24-1"].$_REQUEST["24-2"].$_REQUEST["24-3"].$_REQUEST["24-4"].$_REQUEST["24-5"];
    $q25 = $_REQUEST["25-1"].$_REQUEST["25-2"].$_REQUEST["25-3"].$_REQUEST["25-4"].$_REQUEST["25-5"];
    $q26 = $_REQUEST["26-1"].$_REQUEST["26-2"].$_REQUEST["26-3"].$_REQUEST["26-4"].$_REQUEST["26-5"];
    $q27 = $_REQUEST["27-1"].$_REQUEST["27-2"].$_REQUEST["27-3"].$_REQUEST["27-4"].$_REQUEST["27-5"];
    $q28 = $_REQUEST["28-1"].$_REQUEST["28-2"].$_REQUEST["28-3"].$_REQUEST["28-4"].$_REQUEST["28-5"];
    $q29 = $_REQUEST["29-1"].$_REQUEST["29-2"].$_REQUEST["29-3"].$_REQUEST["29-4"].$_REQUEST["29-5"];
    $q30 = $_REQUEST["30-1"].$_REQUEST["30-2"].$_REQUEST["30-3"].$_REQUEST["30-4"].$_REQUEST["30-5"];
    
    $s1 = $_REQUEST["s1"];
    $s2 = $_REQUEST["s2"];
    $s3 = $_REQUEST["s3"];
    $s4 = $_REQUEST["s4"];
    $s5 = $_REQUEST["s5"];
    $s6 = $_REQUEST["s6"];
    $s7 = $_REQUEST["s7"];
    $s8 = $_REQUEST["s8"];
    $s9 = $_REQUEST["s9"];
    $s10 = $_REQUEST["s10"];
    $s11 = $_REQUEST["s11"];
    $s12 = $_REQUEST["s12"];
    $s13 = $_REQUEST["s13"];
    $s14 = $_REQUEST["s14"];
    $s15 = $_REQUEST["s15"];
    $s16 = $_REQUEST["s16"];
    $s17 = $_REQUEST["s17"];
    $s18 = $_REQUEST["s18"];
    $s19 = $_REQUEST["s19"];
    $s20 = $_REQUEST["s20"];
    $s21 = $_REQUEST["s21"];
    $s22 = $_REQUEST["s22"];
    $s23 = $_REQUEST["s23"];
    $s24 = $_REQUEST["s24"];
    $s25 = $_REQUEST["s25"];
    $s26 = $_REQUEST["s26"];
    $s27 = $_REQUEST["s27"];
    $s28 = $_REQUEST["s28"];
    $s29 = $_REQUEST["s29"];
    $s30 = $_REQUEST["s30"];

    $file = $_FILES["answer"];
    $file_name = $_FILES['answer']['name'];
    $file_type_check = explode('.',$file_name);
    $file_type = $file_type_check[count($file_type_check)-1];
    $target_dir = "answer/";
    $target_file = $target_dir ."$name"."."."$file_type";
    $real_file_name = "$name"."."."$file_type";

    move_uploaded_file($_FILES["answer"]["tmp_name"], $target_file);



    



    require_once("MYDB.php");
    $pdo=db_connect();


    $pdo->beginTransaction();
    $sql="update scoring set name=? where num=?"
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$num,PDO::PARAM_STR);
        $stmh->bindValue(2,$name,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();

        if(isset($q1)){
            $pdo->beginTransaction();
            $sql="update scoring set q1=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q1,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q2)){
            $pdo->beginTransaction();
            $sql="update scoring set q2=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q2,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q3)){
            $pdo->beginTransaction();
            $sql="update scoring set q3=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q3,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q4)){
            $pdo->beginTransaction();
            $sql="update scoring set q4=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q1,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q5)){
            $pdo->beginTransaction();
            $sql="update scoring set q5=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q5,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q6)){
            $pdo->beginTransaction();
            $sql="update scoring set q6=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q6,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q7)){
            $pdo->beginTransaction();
            $sql="update scoring set q7=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q7,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q8)){
            $pdo->beginTransaction();
            $sql="update scoring set q8=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q8,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q9)){
            $pdo->beginTransaction();
            $sql="update scoring set q9=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q9,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q10)){
            $pdo->beginTransaction();
            $sql="update scoring set q10=? where name=?";
            $stmh=$pdo->prepare($sql0);
            $stmh->bindValue(1,$q10,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q11)){
            $pdo->beginTransaction();
            $sql="update scoring set q11=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q11,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q12)){
            $pdo->beginTransaction();
            $sql="update scoring set q12=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q12,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q13)){
            $pdo->beginTransaction();
            $sql="update scoring set q13=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q13,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q14)){
            $pdo->beginTransaction();
            $sql="update scoring set q14=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q14,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q15)){
            $pdo->beginTransaction();
            $sql="update scoring set q15=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q15,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q16)){
            $pdo->beginTransaction();
            $sql="update scoring set q16=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q16,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q17)){
            $pdo->beginTransaction();
            $sql="update scoring set q17=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q17,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q18)){
            $pdo->beginTransaction();
            $sql="update scoring set q18=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q18,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q19)){
            $pdo->beginTransaction();
            $sql="update scoring set q19=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q19,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q20)){
            $pdo->beginTransaction();
            $sql="update scoring set q20=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q20,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q21)){
            $pdo->beginTransaction();
            $sql="update scoring set q21=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q21,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }
        }if(isset($q22)){
            $pdo->beginTransaction();
            $sql="update scoring set q22=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q22,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q23)){
            $pdo->beginTransaction();
            $sql="update scoring set q23=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q23,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q24)){
            $pdo->beginTransaction();
            $sql="update scoring set q24=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q24,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q25)){
            $pdo->beginTransaction();
            $sql="update scoring set q25=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q25,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q26)){
            $pdo->beginTransaction();
            $sql="update scoring set q26=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q26,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q27)){
            $pdo->beginTransaction();
            $sql="update scoring set q27=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q27,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q28)){
            $pdo->beginTransaction();
            $sql="update scoring set q28=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q28,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q29)){
            $pdo->beginTransaction();
            $sql="update scoring set q29=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q29,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($q30)){
            $pdo->beginTransaction();
            $sql="update scoring set q30=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$q30,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }if(isset($real_file_name)){
            $pdo->beginTransaction();
            $sql="update scoring set f=? where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$real_file_name,PDO::PARAM_STR);
            $stmh->bindValue(2,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
        }
        
        
        $pdo->beginTransaction();
    $sql="update score set name=? where num=?"
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$num,PDO::PARAM_STR);
        $stmh->bindValue(2,$name,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        
            if(isset($s1)){
                $pdo->beginTransaction();
                $sql="update score set s1=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s1,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s2)){
                $pdo->beginTransaction();
                $sql="update score set s2=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s2,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s3)){
                $pdo->beginTransaction();
                $sql="update score set s3=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s3,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s4)){
                $pdo->beginTransaction();
                $sql="update score set s4=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s1,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s5)){
                $pdo->beginTransaction();
                $sql="update score set s5=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s5,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s6)){
                $pdo->beginTransaction();
                $sql="update score set s6=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s6,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s7)){
                $pdo->beginTransaction();
                $sql="update score set s7=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s7,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s8)){
                $pdo->beginTransaction();
                $sql="update score set s8=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s8,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s9)){
                $pdo->beginTransaction();
                $sql="update score set s9=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s9,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s10)){
                $pdo->beginTransaction();
                $sql="update score set s10=? where name=?";
                $stmh=$pdo->prepare($sl0);
                $stmh->bindValue(1,$q10,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s11)){
                $pdo->beginTransaction();
                $sql="update score set s11=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s11,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s12)){
                $pdo->beginTransaction();
                $sql="update score set s12=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s12,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s13)){
                $pdo->beginTransaction();
                $sql="update score set s13=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s13,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s14)){
                $pdo->beginTransaction();
                $sql="update score set s14=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s14,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s15)){
                $pdo->beginTransaction();
                $sql="update score set s15=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s15,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s16)){
                $pdo->beginTransaction();
                $sql="update score set s16=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s16,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s17)){
                $pdo->beginTransaction();
                $sql="update score set s17=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s17,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s18)){
                $pdo->beginTransaction();
                $sql="update score set s18=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s18,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s19)){
                $pdo->beginTransaction();
                $sql="update score set s19=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s19,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s20)){
                $pdo->beginTransaction();
                $sql="update score set s20=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s20,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s21)){
                $pdo->beginTransaction();
                $sql="update score set s21=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s21,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }
            if(isset($s22)){
                $pdo->beginTransaction();
                $sql="update score set s22=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s22,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s23)){
                $pdo->beginTransaction();
                $sql="update score set s23=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s23,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s24)){
                $pdo->beginTransaction();
                $sql="update score set s24=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s24,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s25)){
                $pdo->beginTransaction();
                $sql="update score set s25=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s25,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s26)){
                $pdo->beginTransaction();
                $sql="update score set s26=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s26,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s27)){
                $pdo->beginTransaction();
                $sql="update score set s27=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s27,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s28)){
                $pdo->beginTransaction();
                $sql="update score set s28=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s28,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s29)){
                $pdo->beginTransaction();
                $sql="update score set s29=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s29,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }if(isset($s30)){
                $pdo->beginTransaction();
                $sql="update score set s30=? where name=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$s30,PDO::PARAM_STR);
                $stmh->bindValue(2,$name,PDO::PARAM_STR);
                $stmh->execute();
                $pdo->commit();
            }

?>
        <script>
        alert("수정이 완료되었습니다.");
        location.href="scoring.php";
        </script>
        <?php
?>
