<?php

//pull request用
namespace BSC\NameSpace;

class TokenBase{
    
    //0~9,A~Zの入った配列を作る
    const $ARRAY_OF_NUM_ALPHA = array("0","1","2","3","4","5","6","7","8","9",
    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r",
    "s","t","u","v","w","x","y","z");
    const $LENGTH_OF_TOKEN=40;
    const $MIN_ID=0;
    const $MAX_ID=999999;
}

function createId(){
    //実際IDはフェローコードではなさそうだけれど…
    $createdId=random_int($MIN_ID, $MAX_ID);

    //Id部分を返す
    return $createdId;
}

function createToken(){
    //ランダムに取り出してトークンを作る
    $createdToken='';

    //array_rand使用
    for ($i=0; $i<=$LENGTH_OF_TOKEN; $i++){
        $createdToken=$createdToken.array_rand($ARRAY_OF_NUM_ALPHA);
        $createdToken.=array_rand($ARRAY_OF_NUM_ALPHA);
    }
    //トークン部分を返す
    return $createdToken;
}

function createUrl($createdId, $createdToken){

    $createdUrl="https://mypage.b-stylejob.jp/askpass/id=".$createdId."&token=".$createdToken;
    return $createdUrl;
}
?>

