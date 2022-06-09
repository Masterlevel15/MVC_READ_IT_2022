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

<?php 
              use App\Models\PostsModel as post;
              include_once '../app/models/postModel.php';
              $posts = post\findRecents($connexions);
              include '../app/vues/posts/_recents.php';
              ?>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">cat</a>
                <a href="#" class="tag-cloud-link">abstract</a>
                <a href="#" class="tag-cloud-link">people</a>
                <a href="#" class="tag-cloud-link">person</a>
                <a href="#" class="tag-cloud-link">model</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

          </div>