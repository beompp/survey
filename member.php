<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자가진단 입력 창</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
<?php
ob_start();
session_start();


?>


    <div class="page02_tit
    <?php if($_SESSION['type']=='01'){echo "cancer";}
     else if($_SESSION['type']=='02'){echo "liver";}
     else if($_SESSION['type']=='03'){echo "fat";}
     else if($_SESSION['type']=='04'){echo "immu";}
     else if($_SESSION['type']=='05'){echo "brain";}
     else if($_SESSION['type']=='06'){echo "heart";}
     else if($_SESSION['type']=='07'){echo "stomach";}
     else if($_SESSION['type']=='08'){echo "lungs";}
     else if($_SESSION['type']=='09'){echo "uterus";}
     else if($_SESSION['type']=='10'){echo "life";}
     else if($_SESSION['type']=='11'){echo "work";}
    ?>">
       <div class="w_bg"></div>
        <div class="page02_tit_div">
            <a href="javascript:history.back();">
                < 다른 문항보기</a>
                <?php if($_SESSION['type']=='01'){?>
                <a>암</a>
                <?php }else if($_SESSION['type']=='02'){?>
                <a>간</a>
                <?php }else if($_SESSION['type']=='03'){?>
                <a>성인병</a>
                <?php }else if($_SESSION['type']=='04'){?>
                <a>면역</a>
                <?php }else if($_SESSION['type']=='05'){?>
                <a>뇌혈관</a>
                <?php }else if($_SESSION['type']=='06'){?>
                <a>심장</a>
                <?php }else if($_SESSION['type']=='07'){?>
                <a>위</a>
                <?php }else if($_SESSION['type']=='08'){?>
                <a>폐</a>
                <?php }else if($_SESSION['type']=='09'){?>
                <a>자궁</a>
                 <?php }else if($_SESSION['type']=='10'){?>
                <a>수명</a>
                 <?php }else if($_SESSION['type']=='11'){?>
                <a>직업병</a>
                <?php }?>
        </div>
    </div>
    <div class="main_div">
        <div class="page02_con">
            <div class="con_box">
                <a>총 문항 수</a>
                <a>20<span>문항</span></a>
            </div>
            <div class="con_box">
                <a>평균 진단 시간</a>
                <a>3<span>분</span></a>
            </div>
        </div>

		<form action = "proc.php" accept-charset="utf-8" id = "proc" name = "prock" method = "get" >
		<input type="hidden" name="step" value="member" />
        <div class="info">

            <div class="info_tit"><a>기본정보<div class="tri"></div></a></div>

            <a class="info_txt">* 디자이너스는 진단 정보를 저장하지 않습니다</a>

            <div class="info_box">
                <a class="info_enter">성별</a>
                <div class="info_input">
                    <label class="box-radio-input"><input class="info_btn" type="radio" name="sex" value="1"><span>남</span></label>
                   <label class="box-radio-input"><input class="info_btn" type="radio" name="sex" value="2"><span>여</span></label>
                </div><!-- 라디오 변경 -->
            </div>

            <div class="info_box">
                <a class="info_enter">나이</a>
                <div class="info_input input_txt"><input name="age" id="age" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="3"><a>세</a></div>
            </div>
            <div class="info_box">
                <a class="info_enter">몸무게</a>
                <div class="info_input input_txt"><input name="weight" id="weight" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3"><a>kg</a></div>
            </div>
        </div>

        <div class="start_btn">
            <button type="button" onclick="myfunction(this.form)" >자가진단 시작하기</button><!-- 버튼 변경 -->
        </div>
        </form>
    </div>

</body>

</html>


<script>
 function myfunction(){
     if($("input:radio[name=sex]").is(":checked") == false){
 	    alert("성별을 입력하세요."); 	    return false;
 	 } else if($('#age').val() == ''){
 	    alert("나이를 입력하세요."); 	    return false;
 	 } else if($('#weight').val() == '') {
 	    alert("몸무게를 입력하세요."); 	    return false;
 	 } else {   $('#proc').submit();   }
 }





</script>
