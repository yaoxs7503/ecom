<?php

  $select_op=$_GET['select_op'];
  if(isset($select_op)){
  if($select_op!==""){
    if($select_op=="1"){
      echo "你选择到1的选项";
    }else if($select_op=="2"){
      echo "你选择到2的选项";
    }else if($select_op=="3"){
      echo "你选择到3的选项";
    }
  }else{
    echo "请选择一个选项";
  }
}else{
  echo "没有传到数据";
}