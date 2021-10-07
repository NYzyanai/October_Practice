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
    $numAlphaArray=array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    //var_dump($num_alpha_array);

    //ランダムに取り出してトークンを作る
    $token='';
    $lengthOfToken=40;




    //array_rand使用
    for($i=0;i<=$length_token;i++){
        $token=$token.array_rand($numAlphaArray);
    }




    //もし自分でarray_randを作るとしたら？
    //時間をキーにして関数作ったりしたら、逆に再現できる気がする…
    for($i=0;i<=$length_token;i++){
        //再現できてもよい？
        $tokenBaseSeconds=date('ss');
        $tokenBaseMinutes=date('ii');
        //idと時間を加えたやつを取り出す
        $randamTime=($id+$tokenBaseSeconds)*$tokenBaseMinutes;

        //配列の全長
        $numAlphaArrayLength=count($numAlphaArray)
        //配列の全長で割って、その余り番目の配列の要素を取り出す
        $takeArray=$randamTime%$numAlphaArrayLength
        //tokenにくっつける
        $token=$token.$numAlphaArray[$takeArray];
    }




    //トークン部分を返す
    return $token;


}

function url($id,$token){

    $url="https://mypage.b-stylejob.jp/askpass/id=".$id."&token=".$token;
    return $url;
}
?>

