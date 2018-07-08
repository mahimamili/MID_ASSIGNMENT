<?php   
 $count_array = array("webtech", "assignment", "no", "three", "this");  
 $string = "this is a webtech assignment,assignment no three.";  
 echo $string . '<br /><br />';  
 foreach($count_array as $word)  
 {  
      echo '<b>' . $word . ' word ' . substr_count(strtolower($string), $word) . " count.</b><br />";  
 }  