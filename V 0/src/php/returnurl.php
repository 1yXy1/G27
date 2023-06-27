<?php
    /**
     * 从数据库中获取图片URL
     */
   $code=0;
   $data=[];
   $msg=["获取数据失败","获取数据成功"];

    include('conn.php');
    include('functions.php');
    $sql="select * from db_menu";
    $rs=mysqli_query($conn,$sql);
    
    $i=0;
    
    //拼装data部分的对象数据
    while($row=mysqli_fetch_array($rs)){  //读取记录行 
        $data[$i]["id"]=$row["id"];
        $data[$i]["name"]=$row["name"];
        $data[$i]["url"]=$row["url"];
        $data[$i]["calorie"]=$row["calorie"];
        $data[$i]["protein"]=$row["protein"];
        $data[$i]["fat"]=$row["fat"];
        $data[$i]["price"]=$row["price"];
        $rs1=null;
        $row1=null;
        $i++;
    
}

if(count($data)>0) $code=1;
header("content-type:application/json");
echo getApiResult($code,$data,$msg);
?>
