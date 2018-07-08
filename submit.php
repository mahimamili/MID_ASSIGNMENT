<?php

if(isset($_post['txt'])) 
      {
	      $str=$_POST['txt'];
	      echo "Character count: " .strlen($str);
      }
      ?>