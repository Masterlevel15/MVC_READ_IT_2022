
          	<p class="mb-5">
              <img src="assets/images/<?php echo $post['image'];?>" alt="" class="img-fluid">
            </p>
 
            <h1 class="mb-3 h1">A<?php echo $post['title'];?></h1>
            <div>
                <?php echo $post['content'];?>
            </div>
            <!--TAGS-->
            <?php 
                include_once '../app/models/tagsModel.php';
                $tags = \App\Models\TagsModel\findAllByPostId($connexions, $post['id']);
                include '../app/vues/tags/_indexByPostId.php';
                //indexBypostIdAction($connexions, $post['id'];);
            ?>
            
            <!--AUTHOR-->
            <?php 
            use App\Models\AuthorsModel as author;
                include_once '../app/models/authorModel.php';
                $author = author\findOneById($connexions, $post['author_id']);
                include '../app/vues/authors/_show.php';
            ?>
           


            <div class="pt-5 mt-5">
              <!-- COMMENTS  Ne pas oublier de rajouter des commentaires dans la db avec generate data-->
              <?php 
              use App\Models\CommentModel as comment;
              include_once '../app/models/commentModel.php';
              $comments = comment\findAll($connexions, $post['id']);
              include '../app/vues/comments/_index_comments.php';
              ?>
              

              <!--Formulaire-->
              <?php 
              include '../app/vues/comments/_form.php';
              ?>

              
              
            </div>

