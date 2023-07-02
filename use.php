<?php
include "sql.php";
include "pic-b64.php";
#picture
$pic = new picture();
$pic -> put_path("temp.png");
$pic -> pic_base64();
#sql
$sql = new sql();
$sql->config("root","","pic","picture");
/*$data=['',$pic->path,$pic->b64_img];
$sql->put_data($data);
$sql->add();*/
#sql sel
$data=["id","name","data"];
$sql->put_data($data);
$arr = $sql->sel();
$val = "<img src=\"data:image/png;base64,";
$val = $val . $arr[0]['data'];
$val = $val . "\">";
echo  $val;
?>