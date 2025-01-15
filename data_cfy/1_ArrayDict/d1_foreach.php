<?php
// —————————————————————————————————————————————————————————————————————————————— 【Array】foreach 的第一种格式
  $array = array('C语言中文网','PHP 教程','PHP 数组','http://c.biancheng.net/php/');
  $num = 0;
  foreach ($array as $value) {
     echo '数组第'.$num.'个元素的值是：'.$value.'<br>';
     $num++;
  }
// —————————————————————————————————————————————————————————————————————————————— 【Array】foreach 的第二种格式：可以省略掉变量 $num
  $array = array('C语言中文网','PHP 教程','PHP 数组','http://c.biancheng.net/php/'); 
  foreach ($array as $key => $value) {
     echo '数组第'.$key.'个元素的值是：'.$value.'<br>';
  }
// —————————————————————————————————————————————————————————————————————————————— 【Dict】foreach 的第三种格式： 嵌套：遍历多维数组时
  $array = array(
      array('name'=>'zhangsan','chinese'=>'89','math'=>'95','english'=>'88'),
      array('name'=>'lisi','chinese'=>'91','math'=>'86','english'=>'90')
  );
  foreach ($array as $key => $value) {
      echo '二维数组中第'.$key.'个数组的遍历结果：<br>';
      if(is_array($value)){
          foreach ($value as $k => $v) {
              echo '&nbsp;&nbsp;&nbsp;&nbsp;数组的键为：'.$k.'，值为：'.$v.'<br>';
          }
      }
  }


?> 