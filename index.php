<?php

    require_once "view/header.php";

    if (isset($_GET['ctrl']) && ($_GET['ctrl']) != "") {
        
        $ctrl = $_GET['ctrl'];    

        switch ($ctrl) {
            case 'dangky':
                include_once "view/sig-in.php";
                break;

            case 'dangnhap':
                include_once "view/log-in.php";
                break;
            
            
            default:
                require_once "view/home.php";
                break;
        }
    }else{
        require_once "view/home.php";
    }



    
    require_once "view/footer.php";

?>
