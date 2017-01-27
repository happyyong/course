<?php

function date_th($strDate)
{
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    //$strHour= date("H",strtotime($strDate));
    //$strMinute= date("i",strtotime($strDate));
    //$strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
function date_en($strDate)
{
    $strYear = date("Y",strtotime($strDate));
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    //$strHour= date("H",strtotime($strDate));
    //$strMinute= date("i",strtotime($strDate));
    //$strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","Jan.","Feb.","Mar.","Apr.","May","Jun.","Jul.","Aug.","Sept.","Oct.","Nov.","Dec.");
    $strMonthThai=$strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}

function _print_r($arr)
{
    echo '<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />';
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
    exit;
}

function member_status($status){
    $text = "";
    if($status == 1){
        $text = "อาจารย์";
    }else{
        $text = "นักเรียน";
    }

    return $text;
}

function generateCode($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "CS".date('YmdHis').$randomString;
}

function course_status($status){
    $text = "";
    if($status == 1){
        $text = "ปิด";
    }else{
        $text = "เปิด";
    }

    return $text;
}

?>

