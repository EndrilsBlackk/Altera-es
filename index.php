<?php
include_once "paginas/includes/header.php";



$paginas = isset($_GET['pg']);
if ($paginas) {
 switch ($_GET['pg']){
     case 'corpo':
         include_once "paginas/corpo.php";
         break;
 }   
} else {
    include_once "paginas/corpo.php";
}





include_once "paginas/includes/footer.php";
?>