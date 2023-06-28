<?php
function getApiResult($code,$data,$msg){
    //拼装成数组
    $output[0]["code"]=$code;
    $output[0]["data"]=$data;
    $output[0]["msg"]=$msg[$code];
    // echo (json_encode($output,JSON_UNESCAPED_UNICODE));
    return json_encode($output,JSON_UNESCAPED_UNICODE);

}

?>