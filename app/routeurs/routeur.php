<?php
//route par défaut
//pattern:/
//ctrl: postsController
//ACTION: index
use \App\Controleurs\PostsController;
if(isset($_GET['postID'])):
    include '../app/controleurs/postsController.php';
    PostsController\showAction($connexions, $_GET['postID']);
    
else:
    include '../app/controleurs/postsController.php';
    indexAction($connexions);
endif;
?>