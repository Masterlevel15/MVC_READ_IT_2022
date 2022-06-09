<div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php foreach($posts as $post):?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/images/<?php echo $post['postImage']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="?postID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>
                    <?php echo Core\Functions\getFormatedDate($post['created_at']);?> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              
              <?php endforeach;?>
            </div>