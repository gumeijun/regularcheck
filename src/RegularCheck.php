<?php
namespace RegularCheck;
class RegularCheck{
    /**
     * 校验手机号
     * @param $mobile
     * @return bool|void
     */
    public static function mobileCheck($mobile){
        if (empty($mobile)) return;
        if(preg_match("/^1[345789]\d{9}$/", $mobile)){
            return true;
        }
        return false;
    }
    public static function IDcardCheck($idcard){

    }
}