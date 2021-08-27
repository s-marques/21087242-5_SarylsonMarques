<?php
  (isset($_GET['p'])) ? $p = $_GET['p'] : $p ='home';
  if(isset($p)){
    if(is_file("./pages/".$p.".php")){
      include "pages/".$p.".php";
    }else{
      include "pages/404.php";
    }
  }else{
    include "pages/home.php";
  }
?>