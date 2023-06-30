<?php
    $code=0;
    $data=[];
    $msg=["获取数据失败","获取数据成功"];
    include('conn.php');
    include('functions.php');
    $key=$_POST["key"];
    $sql="select * from save where value like '%$key%';";
    $rs=mysqli_query($conn,$sql);
    $i=0;
    //拼装data部分的对象数据
        while($row=mysqli_fetch_array($rs)){  //读取记录行 
            $data[$i]["id"]=$row["id"];
            $data[$i]["filename"]=$row["filename"];
            $data[$i]["value"]=$row["value"];
            $data[$i]["line"]=$row["line"];
            $i++;
    }

    if(count($data)>0) $code=1;
    header("content-type:application/json");
    echo getApiResult($code,$data,$msg);
    mysqli_close($conn);
?>