<?php

$time_=date("Y-m-d H:i:s"); //获取当前 日期，时间
$chaoshitime='2023-05-23 22:50:00'; 
if(strtotime($time_)>strtotime($chaoshitime)){ //对两个时间差进行差运算
  echo '请重新下单';
  return false;
};


?>