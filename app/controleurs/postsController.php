<?php   
    function indexAction(PDO $connexions){
        include_once '../app/modeles/modeles.php';
        $posts = findAll($connexions);

        GLOBAL $content;
        ob_start();
        include_once '../app/vues/posts/index.php';
        $content = ob_get_clean();
    }
?>