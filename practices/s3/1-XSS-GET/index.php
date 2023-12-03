<?php 
// include of header
include_once 'includes/header.php'; 

// include navbar
include_once 'includes/navbar.php';

//  include of pages 
if (isset($_GET['page'])) 
{
   $page = 'pages/' . $_GET['page'] . '.php';
   if (file_exists($page)) 
   {
       include_once $page;
   } else {
        echo "Page '" . htmlspecialchars($_GET['page']) . "' Not Found"; 
   }
}else {
    include_once 'pages/home.php'; 
}
 
//  include of footer 
include_once 'includes/footer.php';




