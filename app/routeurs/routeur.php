<?php
//route par défaut
//pattern:/
//ctrl: postsController
//ACTION: index
if(isset($_GET['postID'])):
    include '../app/controleurs/postsController.php';
    showAction($connexions, $_GET['postID']);
    
else:
    include '../app/controleurs/postsController.php';
    indexAction($connexions);
endif;
?>