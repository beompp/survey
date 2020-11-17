<!DOCTYPE html>
<html lang="en">
<?php 


ob_start();
session_start();


include("q.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자가진단 설문 창</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="main_div">
        <div class="qa_div">
            <div class="pg_num">
                <a <?php if($_GET['qNumber']>='1'){echo 'class="page_active"';}?>>
                <?php if($_GET['qNumber']>='1' && $_GET['qNumber'] <='5'){echo "1";}
                else if($_GET['qNumber']>='6'  && $_GET['qNumber'] <='10'){echo "6";}
                else if($_GET['qNumber']>='11' && $_GET['qNumber'] <='15'){echo "11";}
                else if($_GET['qNumber']>='16' && $_GET['qNumber'] <='20'){echo "16";}
                else if($_GET['qNumber']>='21' && $_GET['qNumber'] <='25'){echo "21";}
                else if($_GET['qNumber']>='26' && $_GET['qNumber'] <='30'){echo "26";}
                else if($_GET['qNumber']>='31' && $_GET['qNumber'] <='33'){echo "31";}
                ?>
                </a> 
                <a <?php if($_GET['qNumber']!='1' && $_GET['qNumber'] !='6' && $_GET['qNumber']!='11' && $_GET['qNumber']!='16' && 
                    $_GET['qNumber']!='21'&& $_GET['qNumber']!='26'&& $_GET['qNumber']!='31'|| $_GET['qNumber']>='32'){echo 'class="page_active"';}?>><?php if($_GET['qNumber']<'31'){echo ">";}?></a> 
                <a <?php if($_GET['qNumber']!='1' && $_GET['qNumber'] !='6' && $_GET['qNumber']!='11' && $_GET['qNumber']!='16' && 
                    $_GET['qNumber']!='21'&& $_GET['qNumber']!='26'&& $_GET['qNumber']!='31'|| $_GET['qNumber']>='32'){echo 'class="page_active"';}?>>
                <?php if($_GET['qNumber']>='1' && $_GET['qNumber'] <='5'){echo "2";}
                else if($_GET['qNumber']>='6'  && $_GET['qNumber'] <='10'){echo "7";}
                else if($_GET['qNumber']>='11' && $_GET['qNumber'] <='15'){echo "12";}
                else if($_GET['qNumber']>='16' && $_GET['qNumber'] <='20'){echo "17";}
                else if($_GET['qNumber']>='21' && $_GET['qNumber'] <='25'){echo "22";}
                else if($_GET['qNumber']>='26' && $_GET['qNumber'] <='30'){echo "27";}
                else if($_GET['qNumber']>='31' && $_GET['qNumber'] <='33'){echo ">";}
                ?>
                </a> 
                <a <?php if($_GET['qNumber']>='3' && $_GET['qNumber']<'6' || $_GET['qNumber']>='8' && $_GET['qNumber']<'11' ||  $_GET['qNumber']>='13' && $_GET['qNumber']<'16' || 
                    $_GET['qNumber']>='18' && $_GET['qNumber']<'21' ||$_GET['qNumber']>='23' && $_GET['qNumber']<'26' || $_GET['qNumber']>='28' && $_GET['qNumber']<'31' ){echo 'class="page_active"';}?>><?php if($_GET['qNumber']<'31'){echo ">";}?></a> 
                <a <?php if($_GET['qNumber']>='3' && $_GET['qNumber']<'6' || $_GET['qNumber']>='8' && $_GET['qNumber']<'11' ||  $_GET['qNumber']>='13' && $_GET['qNumber']<'16' || 
                    $_GET['qNumber']>='18' && $_GET['qNumber']<'21' ||$_GET['qNumber']>='23' && $_GET['qNumber']<'26' || $_GET['qNumber']>='28' && $_GET['qNumber']<'31' || $_GET['qNumber']>='32'){echo 'class="page_active"';}?>>
                <?php if($_GET['qNumber']>='1' && $_GET['qNumber'] <='5'){echo "3";}
                else if($_GET['qNumber']>='6'  && $_GET['qNumber'] <='10'){echo "8";}
                else if($_GET['qNumber']>='11' && $_GET['qNumber'] <='15'){echo "13";}
                else if($_GET['qNumber']>='16' && $_GET['qNumber'] <='20'){echo "18";}
                else if($_GET['qNumber']>='21' && $_GET['qNumber'] <='25'){echo "23";}
                else if($_GET['qNumber']>='26' && $_GET['qNumber'] <='30'){echo "28";}
                else if($_GET['qNumber']>='31' && $_GET['qNumber'] <='33'){echo "32";}
                ?>
                </a> 
                <a <?php if($_GET['qNumber']>='4' && $_GET['qNumber']<'6' || $_GET['qNumber']>='9' && $_GET['qNumber']<'11' || 
                    $_GET['qNumber']>='14' && $_GET['qNumber']<'16' || $_GET['qNumber']>='19' && $_GET['qNumber']<'21' || $_GET['qNumber']>='24' && $_GET['qNumber']<'26' || $_GET['qNumber']>='29' && $_GET['qNumber']<'31'){echo 'class="page_active"';}?>><?php if($_GET['qNumber']<'31'){echo ">";}?></a> 
                <a <?php if($_GET['qNumber']>='4' && $_GET['qNumber']<'6' || $_GET['qNumber']>='9' && $_GET['qNumber']<'11' || 
                    $_GET['qNumber']>='14' && $_GET['qNumber']<'16' || $_GET['qNumber']>='19' && $_GET['qNumber']<'21' || $_GET['qNumber']>='24' && $_GET['qNumber']<'26' || $_GET['qNumber']>='29' && $_GET['qNumber']<'31' || $_GET['qNumber']>'32'){echo 'class="page_active"';}?>>
                <?php if($_GET['qNumber']>='1' && $_GET['qNumber'] <='5'){echo "4";}
                else if($_GET['qNumber']>='6'  && $_GET['qNumber'] <='10'){echo "9";}
                else if($_GET['qNumber']>='11' && $_GET['qNumber'] <='15'){echo "14";}
                else if($_GET['qNumber']>='16' && $_GET['qNumber'] <='20'){echo "19";}
                else if($_GET['qNumber']>='21' && $_GET['qNumber'] <='25'){echo "24";}
                else if($_GET['qNumber']>='26' && $_GET['qNumber'] <='30'){echo "29";}
                else if($_GET['qNumber']>='31' && $_GET['qNumber'] <='33'){echo ">";}
                ?>
                </a> 
                <a <?php if($_GET['qNumber']=='5' || $_GET['qNumber']=='10' || $_GET['qNumber']=='15' || $_GET['qNumber']=='20' || $_GET['qNumber']=='25' || $_GET['qNumber']=='30' || $_GET['qNumber']=='33'){echo 'class="page_active"';}?>><?php if($_GET['qNumber']<'31'){echo ">";}?></a> 
                <a <?php if($_GET['qNumber']=='5' || $_GET['qNumber']=='10' || $_GET['qNumber']=='15' || $_GET['qNumber']=='20' || $_GET['qNumber']=='25' || $_GET['qNumber']=='30' || $_GET['qNumber']=='33'){echo 'class="page_active"';}?>>
                <?php if($_GET['qNumber']>='1' && $_GET['qNumber'] <='5'){echo "5";}
                else if($_GET['qNumber']>='6'  && $_GET['qNumber'] <='10'){echo "10";}
                else if($_GET['qNumber']>='11' && $_GET['qNumber'] <='15'){echo "15";}
                else if($_GET['qNumber']>='16' && $_GET['qNumber'] <='20'){echo "20";}
                else if($_GET['qNumber']>='21' && $_GET['qNumber'] <='25'){echo "25";}
                else if($_GET['qNumber']>='26' && $_GET['qNumber'] <='30'){echo "30";}
                else if($_GET['qNumber']>='31' && $_GET['qNumber'] <='33'){echo "33";}
                ?>
                </a>
                <div class="page_bar <?php if($_GET['qNumber']>='1'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='2'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='3'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='4'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='5'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='6'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='7'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='8'){echo "bar_active";}?>"></div>
				<div class="page_bar <?php if($_GET['qNumber']>='9'){echo "bar_active";}?>"></div>
				<div class="page_bar <?php if($_GET['qNumber']>='10'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='11'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='12'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='13'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='14'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='15'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='16'){echo "bar_active";}?>"></div>
                <div class="page_bar <?php if($_GET['qNumber']>='17'){echo "bar_active";}?>"></div>
				<div class="page_bar <?php if($_GET['qNumber']>='18'){echo "bar_active";}?>"></div>
				<div class="page_bar <?php if($_GET['qNumber']>='19'){echo "bar_active";}?>"></div>
				<div class="page_bar <?php if($_GET['qNumber']>='20'){echo "bar_active";}?>"></div>
<!--            20문항으로 축소 (20201105)
				<div class="page_bar <//?php if($_GET['qNumber']>='21'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='22'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='23'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='24'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='25'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='26'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='27'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='28'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='29'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='30'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='31'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='32'){echo "bar_active";}?>"></div>
				<div class="page_bar <//?php if($_GET['qNumber']>='33'){echo "bar_active";}?>"></div>
-->
            </div>
            <div class="q_tit">
                <a>질문 <?php echo $_GET['qNumber'];?></a><!-- GET -->
                <a><?php echo $qNm1 ;?></a>
            </div>
            <form action = "proc.php" accept-charset="utf-8" id="survey" name="survey" method="get" >
			<input type="hidden" name="step" value="survey" />
			<input type="hidden" name="qNumber" value="<?php echo $_GET['qNumber'];?>" /><!-- GET -->
            <div class="answer">
               <div><label><input type="radio" name="chk_answer" value="5" <?php if( $qN == "3") {echo 'checked="checked"' ;} ?> ><?php echo $q1 ;?></label></div>
               <div><label><input type="radio" name="chk_answer" value="3" <?php if( $qN == "1") {echo 'checked="checked"' ;} ?> ><?php echo $q2 ;?></label></div>
               <div><label><input type="radio" name="chk_answer" value="0" <?php if( $qN == "0") {echo 'checked="checked"' ;} ?> ><?php echo $q3 ;?></label></div>
            </div>
            <div class="page_btn">
                <?php if ($_GET['qNumber'] =='1'){?>
                <a class="page_prev" href="/member.php">이전</a>
                <?php }else{?>
                <a class="page_prev" href="/survey.php?step=survey&qNumber=<?php echo $_GET['qNumber']-1;?>">이전</a>
                <?php }?>
                <?php if ($_GET['qNumber'] =='20'){?> <!-- qNumber = 33 (20201105) -->
                <button type="button" class="page_next"  onclick="myfunction(this.form)" >결과 확인하기</button>
                <?php }else{?>
                <button type="button" class="page_next"  onclick="myfunction(this.form)" >다음</button>
                <?php }?>
                
                
            </div>
            </form>
             <?php if ($_GET['qNumber'] =='20'){?> <!-- qNumber = 33 (20201105) -->
            <div style="margin-top: 60px">
            	<ul style="font-size: 18px;  list-style-type:disc; margin-left:10px">
             		<li> 어제도 오늘도 바쁜 생활에 건강을 잊지는 않으셨나요? </li>
                    <li> 건강정보를 찾기보다는 <span style="color: #f32e89">찾아가는 건강정보</span>를 받아보세요. </li>
                    <li> 나와 가족, 사랑하는 사람들까지 챙겨보세요. </li>
                    <li> <span style="color: #f32e89">디자이너스</span>는 여러분의 건강한 미래를 기원합니다. </li>
                    <li> 문진 결과는 <span style="color: #f32e89">간단한</span> 가입 후 확인 가능합니다. </li>
             	</ul>
            </div>
			<?php }?>
        </div>
    </div>
    
   


</body>

<script type="text/javascript">
function myfunction(){
    
    if($("input:radio[name=chk_answer]").is(":checked") == false){
		alert("답변항목에 체크하세요");	return false;	    
    }else{
		$('#survey').submit();
	}
    
}

</script>


