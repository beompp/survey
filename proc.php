<?php 
ob_start();
session_start();
 

 
if( isset($_GET['step']) && $_GET['step']=='index'){
    $_SESSION['type']       = $_GET['type'];
    $_SESSION['flag']       = $_GET['flag'];
    
    echo("<script>location.href='member.php';</script>");
    exit;
}else if(  isset($_GET['step']) &&  isset($_GET['sex']) &&   isset($_GET['age']) &&  isset($_GET['weight']) &&  $_GET['step']=='member'){
   
    $_SESSION['sex']        = $_GET['sex'];
    $_SESSION['age']        = str_pad($_GET['age'],3,0,STR_PAD_LEFT);
    $_SESSION['weight']     =  str_pad($_GET['weight'],3,0,STR_PAD_LEFT);
  
    
    echo("<script>location.href='survey.php';</script>");
    exit;

    
    
}else if($_GET['step']=='survey'){
    
    
      
    if($_GET['qNumber']=='1'){        $_SESSION['qNumber1'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='2'){        $_SESSION['qNumber2'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='3'){        $_SESSION['qNumber3'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='4'){        $_SESSION['qNumber4'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='5'){        $_SESSION['qNumber5'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='6'){        $_SESSION['qNumber6'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='7'){        $_SESSION['qNumber7'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='8'){        $_SESSION['qNumber8'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='9'){        $_SESSION['qNumber9'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='10'){        $_SESSION['qNumber10'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='11'){        $_SESSION['qNumber11'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='12'){        $_SESSION['qNumber12'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='13'){        $_SESSION['qNumber13'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='14'){        $_SESSION['qNumber14'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='15'){        $_SESSION['qNumber15'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='16'){        $_SESSION['qNumber16'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='17'){        $_SESSION['qNumber17'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='18'){        $_SESSION['qNumber18'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='19'){        $_SESSION['qNumber19'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
/*  20문항으로 축소 (20201105)
    if($_GET['qNumber']=='20'){        $_SESSION['qNumber20'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='21'){        $_SESSION['qNumber21'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='22'){        $_SESSION['qNumber22'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='23'){        $_SESSION['qNumber23'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='24'){        $_SESSION['qNumber24'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='25'){        $_SESSION['qNumber25'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='26'){        $_SESSION['qNumber26'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='27'){        $_SESSION['qNumber27'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='28'){        $_SESSION['qNumber28'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='29'){        $_SESSION['qNumber29'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='30'){        $_SESSION['qNumber30'] = $_GET['chk_answer'];   echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='31'){        $_SESSION['qNumber31'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='32'){        $_SESSION['qNumber32'] = $_GET['chk_answer'];  echo("<script>location.href='survey.php?step=survey&qNumber=".($_GET['qNumber']+1)."';</script>");  }else
    if($_GET['qNumber']=='33' && $_SESSION['flag']=='member'){        $_SESSION['qNumber33'] = $_GET['chk_answer']; echo("<script>location.href='end.php?vid=".$_SESSION['vid']."&flag=".$_SESSION['flag']."&result=".$_SESSION['type'].$_SESSION['sex'].$_SESSION['age'].$_SESSION['weight']."';</script>");  }else  
    if($_GET['qNumber']=='33' && $_SESSION['flag']==''){        $_SESSION['qNumber33'] = $_GET['chk_answer'];  echo("<script>location.href='http://designus.kr/m/common/joinStep01.asp?vid=".$_SESSION['vid']."&result=".$_SESSION['type'].$_SESSION['sex'].$_SESSION['age'].$_SESSION['weight']."';</script>"); }
*/
    if($_GET['qNumber']=='20' && $_SESSION['flag']=='member'){        $_SESSION['qNumber20'] = $_GET['chk_answer']; echo("<script>location.href='end.php?vid=".$_SESSION['vid']."&flag=".$_SESSION['flag']."&result=".$_SESSION['type'].$_SESSION['sex'].$_SESSION['age'].$_SESSION['weight']."';</script>");  }else  
    if($_GET['qNumber']=='20' && $_SESSION['flag']==''){        $_SESSION['qNumber20'] = $_GET['chk_answer'];  echo("<script>location.href='http://designus.kr/m/common/joinStep01.asp?vid=".$_SESSION['vid']."&result=".$_SESSION['type'].$_SESSION['sex'].$_SESSION['age'].$_SESSION['weight']."';</script>"); }
    
    exit;

}else if ($_GET['step']=='end'){ 
    
    $_SESSION['vid']  = $_GET['vid'];
    $_SESSION['flag'] = $_GET['flag'];
    
    echo ("<script>location.href='http:///k-biche.com/index.php?vid=".$_SESSION['vid']."&flag=".$_SESSION['flag']."';</script>");
    
}else{
    echo("<script>alert('잘못된 접근입니다.')</script>");
    exit;
}




?>