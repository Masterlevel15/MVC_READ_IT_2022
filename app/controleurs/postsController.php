<?php  
//Un controlleur par table. 
// Table posts
    function indexAction(PDO $connexions){
        include_once '../app/models/postModel.php';
        $posts = findAll($connexions);

        GLOBAL $content;
        ob_start();
        include_once '../app/vues/posts/index.php';
        $content = ob_get_clean();
    }

    function showAction(PDO $connexions, int $id){
        include_once '../app/models/postModel.php';
        $post = findOneById($connexions, $id);

        GLOBAL $content;
        ob_start();
        include_once '../app/vues/posts/show.php';
        $content = ob_get_clean();
    }
?>