<html>

<link rel="style.css" href="">
<title>Annecy - Voyage</title>
<body>
<?php

include("header.php");

if(isset($_GET['page'])){
    $request_page = $_GET['page'];
}else{
    $request_page = 'home';
}

switch ($request_page) {
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include '404.php';
        break;
}

require('footer.php');
?>
</body>
</html>

