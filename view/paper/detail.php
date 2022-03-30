  <!-- start content section -->
  <section class="content my-5 ">
  <div class="container">
          <div class="breadcrumb">
              <li class="breadcrumb-item "><a href="index.php" >خانه</a></li>
              <li class="breadcrumb-item "><a href="index.php?c=paper&a=list">مقاله ها</a></li>
              <li class="breadcrumb-item active "> <?php echo  $result['title']; ?></li>
          </div>
      </div>
      <div class="container d-flex justify-content-center">
          <div class=" content-course-item ">
              <div class=" content-course-image ">
                  <img src="<?php echo  $result['image']; ?>" alt="paper-image" class="img-fluid ">
              </div>
              <div class="d-flex justify-content-between mt-3">
                  <span class="seen-writer" title="نویسنده مقاله"><i class="fas fa-book-reader fa-fw"></i> <?php echo  $result['name']; ?> </span>
                  <span class="seen-writer" title="زمان انتشار مقاله"><i class="fas fa-calendar fa-fw"></i><?php echo jdate("l Y/m/d ", $result['date']); ?> </span>
                  <span class="seen-caption" title="تعداد بازدید"><i class="fas fa-eye fa-fw"></i><?php echo  $result['view_paper']; ?></span>
              </div>
              <hr>
              <div class="content-caption">
                  <a href="index.php?c=paper&a=detail&id=<?php echo  $result['id']; ?>" class="content-link"> <?php echo  $result['title']; ?></a>
                  <p> <?php echo $result['body']; ?> </p>
              </div>
              <hr>
              <div class="content-tag row d-flex justify-content-start">
                  <?php if ($result['tags']) {
                        $array_tags = explode(",", $result['tags']);
                        foreach ($array_tags as $tag) {
                    ?>
                          <span><?php echo $tag; ?></span>
                  <?php }
                    }  ?>
              </div>
              <hr>
              <b>نظرات کاربران</b>
              <form method="POST" action="index.php?c=paper&a=add&id=<?php echo  $result['id']; ?>">
                  <div class="form-group m-3">
                      <input type="text" class="form-control  p-3 mt-3" name="frm[name]" placeholder="  نام شما (الزامی) " required>
                      <input type="email" class="form-control  p-3 mt-3" name="frm[email]" placeholder="پست الکترونیک شما (الزامی)  " required>
                      <textarea class="form-control ckeditor p-3 mt-3" name="frm[body]" id="editor1" cols="30" rows="10" required placeholder="پیام خود را وارد کنید.(الزامی)"></textarea>
                      <script>
                          CKEDITOR.replace('frm[body]', {
                              language: 'fa',
                              removeButtons: 'PasterFromWord'
                          });
                      </script>
                      <button type="submit" class="btn btn-success px-3 mt-3 float-left" name="btn">ثبت دیدگاه شما</button>
                  </div>
              </form>
              <br>
              <br>
              <br>
              <hr>
              <div class="comment p-3">
                  <?php foreach ($comments as  $comment) : ?>
                      <div class="comment-item d-flex row mb-3">
                          <div class="comment-img col-md-2  col-3">
                              <img src="public/default/image/<?php echo $comment['image']; ?>.png" alt="user-profile-picture" class="img-fluid">
                          </div>
                          <div class="comment-text p-2 col-md-10 col-7">
                              <b class="d-block mb-2"> <?php echo $comment['name']; ?></b>
                              <span class="d-block d-md-inline mb-2">ارسال شده در <?php echo  jdate(" Y/m/d ", $comment['comment_date']); ?></span>
                              <a type="submit" class="btn btn-success btn-sm" href="#">ثبت پاسخ</a>
                              <a href="#" class="btn btn-warning "> گزارش</a>
                              <div>
                                  <?php echo $comment['body']; ?>
                              </div>
                          </div>
                      </div>
                      <div class="mr-5">
                          <?php
                            $values = $paper->reply_comment_show_insite($comment['id']);
                            if($values){
                                echo '<b class="mb-2">پاسخ ها</b>';
                            }
                            foreach ($values as $value) :
                            ?>
                              <div class="comment-item d-flex row mb-3">
                                  <div class="comment-img col-md-2  col-3">
                                      <img src="public/default/image/<?php echo $value['image']; ?>.png" alt="user-profile-picture" class="img-fluid">
                                  </div>
                                  <div class="comment-text p-2 col-md-10 col-7">
                                      <b class="d-block mb-2"> <?php echo $value['name']; ?></b>
                                      <span class="d-block d-md-inline mb-2">ارسال شده در <?php echo  jdate(" Y/m/d ", $value['comment_date']); ?></span>
                                      <div>
                                          <?php echo $value['body']; ?>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; ?>
                      </div>
                  <?php endforeach; ?>

              </div>
          </div>
      </div>
  </section>
  <!-- end content section -->