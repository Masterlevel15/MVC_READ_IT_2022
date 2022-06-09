<h3 class="mb-5"><?php echo count($comments);?> comment(s)</h3>

              <ul class="comment-list">
              <?php foreach($comments as $com):?>
                    <li class="comment">
                        <div class="comment-body">
                            <h3><?php echo $com['pseudo']; ?></h3>
                            <div class="meta mb-3">
                            <?php echo Core\Functions\getFormatedDate($com['created_at'], 'F j, Y \a\t h:ia '); ?>
                                
                            </div>

                            <p><?php echo $com['content']?></p>
                        </div>
                    </li>
                <?php endforeach;?>
                </ul>