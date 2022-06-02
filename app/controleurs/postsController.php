<?php  
//Un controlleur par table. 
// Table posts
namespace App\Controleurs\PostsController;
use \PDO, \App\Models\PostsModel;

    function indexAction(PDO $connexions){
        include_once '../app/models/postModel.php';
        $posts = PostsModel\findAll($connexions);

        GLOBAL $content;
        ob_start();
        include_once '../app/vues/posts/index.php';
        $content = ob_get_clean();
    }

    function showAction(PDO $connexions, int $id){
        include_once '../app/models/postModel.php';
        $post = PostsModel\findOneById($connexions, $id);

        GLOBAL $content;
        ob_start();
        include_once '../app/vues/posts/show.php';
        $content = ob_get_clean();
    }
?>