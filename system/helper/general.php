<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function token($length = 32) {
	// Create random token
	$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	
	$max = strlen($string) - 1;
	
	$token = '';
	
	for ($i = 0; $i < $length; $i++) {
		$token .= $string[mt_rand(0, $max)];
	}	
	
	return $token;
}

function remove_vietnamese_accents($str)
{
    $accents_arr=array(
        "à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
		"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
		"ế","ệ","ể","ễ",
		"ì","í","ị","ỉ","ĩ",
		"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
		"ờ","ớ","ợ","ở","ỡ",
		"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
		"ỳ","ý","ỵ","ỷ","ỹ",
		"đ",
		"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
		"Ằ","Ắ","Ặ","Ẳ","Ẵ",
		"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
		"Ì","Í","Ị","Ỉ","Ĩ",
		"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ",
		"Ờ","Ớ","Ợ","Ở","Ỡ",
		"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
		"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
		"Đ"," ","\"","!","@","#","$","%","^","&","*","(",")",".",",",";","'","[","]","{","}"
		,":","“","”","--",'.','>','<','--','---','‘','’','/','?','~',"|"
    );
    $no_accents_arr=array(
        "a","a","a","a","a","a","a","a","a","a","a",
		"a","a","a","a","a","a",
		"e","e","e","e","e","e","e","e","e","e","e",
		"i","i","i","i","i",
		"o","o","o","o","o","o","o","o","o","o","o","o",
		"o","o","o","o","o",
		"u","u","u","u","u","u","u","u","u","u","u",
		"y","y","y","y","y",
		"d",
		"a","a","a","a","a","a","a","a","a","a","a","a",
		"a","a","a","a","a",
		"e","e","e","e","e","e","e","e","e","e","e",
		"i","i","i","i","i",
		"o","o","o","o","o","o","o","o","o","o","o","o",
		"o","o","o","o","o",
		"u","u","u","u","u","u","u","u","u","u","u",
		"y","y","y","y","y",
		"d","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-",
		"-","-","-","-",'-','-','-','-','---','-','-','-','','',''
    );
    
    return strtolower(str_replace($accents_arr,$no_accents_arr,$str));
}

function convertDate($startDate, $endDate){
    $startDateArr = explode('-',$startDate);
    $endDateArr = explode('-',$endDate);
    
    $start = strtotime($startDateArr[2].'-'.$startDateArr[1].'-'.$startDateArr[0]);
    $end = strtotime($endDateArr[2].'-'.$endDateArr[1].'-'.$endDateArr[0]);
    $numDate = ceil(abs($end - $start) / 86400);
    
    $output =  '<div class="relative">
                    <div class="date-month">
                        Tháng '. $startDateArr[1] . '
                    </div>
                    <div class="date-detail">
                        <div class="date-num color-6">'. $startDateArr[0] .' </div>
                        <div class="date-day nearly">
                            '. $numDate .' ngày
                        </div>
                    </div>
                </div>';
    return $output;
     
}