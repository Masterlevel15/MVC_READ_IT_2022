
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
              <h3 class="mb-5">3 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light" method="post">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="postId" value="4" />
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

