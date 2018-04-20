<?php

$a = [1, [2, [3, [4, [5]]]]];

function f($a) {
    // ここを実装してね
    for($i = 0; $i < count($a); $i++){
      if(is_array($a[$i])){
        echo $a[$i];
        f($i);
      }else{
        echo $a[$i];
      }
    }
}

// for($i = 0; $i < count($a); $i++){
//   if($a[i] is_array){
//
//   }else{
//     echo $a[$i];
//   }
// }
