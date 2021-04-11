<?php
 
 namespace WeixinPhpServerApi\http;

 class HttpClient{
    public function test(){
        return "HttpClient Test.";
    }
    /**
	 * 获取登录信息
	 * @param $arr=[] $arr['appid'];$arr['secret'];$arr['code'];
     * 
	 * @return array 获取到的数据
	 */
    public function getWeixinSession($arr=[]) {
        $appid=$arr['appid'];
        $secret=$arr['secret'];
        $code=$arr['code'];
        $wx_id_string=file_get_contents("https://api.weixin.qq.com/sns/jscode2session?appid=$appid&secret=$secret&js_code=$code&grant_type=authorization_code");
        $wx_id_obj=json_decode($wx_id_string,true);
        return $wx_id_obj;
    }
 }