<?php


function id()
{

    //実際IDはフェローコードではなさそうだけれど…


    $mim_id=0;
    $max_id=999999;


    $id=random_int($mim_id,$max_id);


    //トークン部分を返す
    return $id;


}

function token()
{

    //0~9,A~Zの入った配列を作る
    //$num_alpha_array=array(0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    //var_dump($num_alpha_array);
    //ランダムに取り出してトークンを作る
    //$length_num_alpha_array=count($num_alpha_array);
    //トークンの長さは40文字　

    $length_token=20;

    //と思ったけど便利な関数があるらしいし安全なことが確認されている

    $bytes=random_bytes($length_token);
    $token=bin2hex($bytes);

    /*random_bytesで20byte（160bit）のバイナリ文字列を返している。バイナリ文字列を16新数にbin2hexで戻すと、
    00~ffまでの数字を得られる。
    
    だから20にしてるよ～
    */

    //トークン部分を返す
    return $token;


}

function url($id,$token){

    $url="https://mypage.b-stylejob.jp/askpass/id=".$id."&token=".$token;
    return $url;
}
?>

