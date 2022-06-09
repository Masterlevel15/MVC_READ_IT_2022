<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

            <?php
            include '../app/vues/template/partials/_search.php';
            ?>
            
            <!-- categories -->
            <?php 
              use App\Models\CategorieModel as categorie;
              include_once '../app/models/categorieModel.php';
              $categories = categorie\findAll($connexions);
              include '../app/vues/categories/_index.php';
              ?>
            <!-- Recent -->
            <?php 
              use App\Models\PostsModel as post;
              include_once '../app/models/postModel.php';
              $posts = post\findRecents($connexions);
              include '../app/vues/posts/_recents.php';
              ?>
            <!--Liste TAGS-->
            <?php include_once '../app/models/tagsModel.php';
            $tags = \App\models\TagsModel\findAll($connexions); 
            include '../app/vues/tags/_index.php';?>

            
            

          </div>