<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="평소 걱정 되었던 당신의 건강 고민을 단 3분만에 자가 진단해보세요.">
    <meta property="og:image" content="http://k-biche.com//asset/img/share_thumbnail.png">
    <title>자가진단 선택 창</title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>
<?php
ob_start();
session_start();

// if(!isset($_GET['vid']) && !$_SESSION['vid'] ){
//      echo("<script>alert('잘못된 접근입니다.vid 값이 없습니다.')</script>");
//      exit;
//  }


// if(!$_SESSION['vid']){
// $_SESSION['vid'] = $_GET['vid'];
// }
$_SESSION['qNumber1'] = '';
$_SESSION['qNumber2'] = '';
$_SESSION['qNumber3'] = '';
$_SESSION['qNumber4'] = '';
$_SESSION['qNumber5'] = '';
$_SESSION['qNumber6'] = '';
$_SESSION['qNumber7'] = '';
$_SESSION['qNumber8'] = '';
$_SESSION['qNumber9'] = '';
$_SESSION['qNumber10'] = '';
$_SESSION['qNumber11'] = '';
$_SESSION['qNumber12'] = '';
$_SESSION['qNumber13'] = '';
$_SESSION['qNumber14'] = '';
$_SESSION['qNumber15'] = '';
$_SESSION['qNumber16'] = '';
$_SESSION['qNumber17'] = '';
$_SESSION['qNumber18'] = '';
$_SESSION['qNumber19'] = '';
$_SESSION['qNumber20'] = '';
$_SESSION['qNumber21'] = '';
$_SESSION['qNumber22'] = '';
$_SESSION['qNumber23'] = '';
$_SESSION['qNumber24'] = '';
$_SESSION['qNumber25'] = '';
$_SESSION['qNumber26'] = '';
$_SESSION['qNumber27'] = '';
$_SESSION['qNumber28'] = '';
$_SESSION['qNumber29'] = '';
$_SESSION['qNumber30'] = '';
$_SESSION['qNumber31'] = '';
$_SESSION['qNumber32'] = '';
$_SESSION['qNumber33'] = '';
?>
<body>

    <div class="main_bg">
        <div class="black_bg"></div>
        <div class="main_div">
            <div class="main_tit">
                <a>디자이너스 건강 자가진단</a>
            </div>
            <div class="main_btn">
               <div>
                <a href="proc.php?step=index&type=01&flag=<?php echo $_GET['flag']?>"><img src="asset/img/cancer.png" /><img style="width: 20px" src="asset/img/cancer_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=02&flag=<?php echo $_GET['flag']?>"><img src="asset/img/liver.png" /><img style="width: 20px" src="asset/img/liver_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=03&flag=<?php echo $_GET['flag']?>"><img src="asset/img/fat.png" /><img style="width: 52px" src="asset/img/fat_txt.png" alt=""/></a>
                </div>
                <div>
                <a href="proc.php?step=index&type=04&flag=<?php echo $_GET['flag']?>"><img src="asset/img/immune.png" /><img style="width: 34px" src="asset/img/immune_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=05&flag=<?php echo $_GET['flag']?>"><img src="asset/img/brain.png" /><img style="width: 52px" src="asset/img/brain_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=06&flag=<?php echo $_GET['flag']?>"><img src="asset/img/heart.png" /><img style="width: 37px" src="asset/img/heart_txt.png" alt=""/></a>
                </div>
                <div>
                <a href="proc.php?step=index&type=07&flag=<?php echo $_GET['flag']?>"><img src="asset/img/stomach.png" /><img style="width: 18px" src="asset/img/stomach_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=08&flag=<?php echo $_GET['flag']?>"><img src="asset/img/lungs.png" /><img style="width: 19px" src="asset/img/lungs_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=09&flag=<?php echo $_GET['flag']?>"><img src="asset/img/uterus.png" /><img style="width: 37px" src="asset/img/uterus_txt.png" alt=""/></a>
                </div>
                <div><!--<div style="margin-bottom:30px">-->
                <a href="proc.php?step=index&type=10&flag=<?php echo $_GET['flag']?>"><img src="asset/img/lifeline.png" /><img style="width: 34px" src="asset/img/lifeline_txt.png" alt=""/></a>
                <a href="proc.php?step=index&type=11&flag=<?php echo $_GET['flag']?>"><img src="asset/img/work.png" /><img style="width: 50px" src="asset/img/work_txt.png" alt=""/></a>
                </div>
                <div style="margin-top: 20px; margin-bottom: 20px">
                <ul style="font-size: 12px; width: 340px;  margin-left: auto; margin-right: auto; text-align: center;">
                    <a>디자이너스는 AI 기반의 헬스케어 서비스를 제공합니다.<br>
                    진단 결과는 로그인 후 확인이 가능합니다.<br>        
                    (주)디자이너스 | 대표 : 박성후<br>
                    대표번호 : 02-525-0988<br></a>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>

</html>