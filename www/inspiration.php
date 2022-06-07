<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";

$m=$conn->prepare("SELECT * FROM blog  WHERE category='Inspiration' ORDER BY blog_id DESC ");
$m->execute();
$r=array();
while($n=$m->fetch(PDO::FETCH_BOTH)){
  $r[]=$n;
}
 ?>


<div class="jl_single_style3">
                  <div class="single_content_header single_captions_overlay_image_full_width">
                    <div class="image-post-thumb" style="background-image: url('img/markus-spiske-exUbjEirAsY-unsplash-1920x982.jpg')">
                    </div>
                    <div class="single_post_entry_content">
                      <span class="meta-category-small">
                        <a class="post-category-color-text" style="background:#d66300" href="#">Inspiration</a>
                      </span>
                      <?php
                        echo "<h3>";

                          echo "<a href='#'>";
                           $g=$conn->prepare("SELECT * FROM blog  WHERE category='Inspiration' ORDER BY blog_id DESC LIMIT 1 ");
                           $g->execute();
                             $h=$g->fetch(PDO::FETCH_BOTH);
                            echo $h['title'];
                         echo "</a>";
                       echo "</h3>";
                       echo  "<span class='jl_post_meta'>";
                        echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                             rel='author'>".$h['author']."</a>";
                        echo   "</span>";

                        echo   "<span class='post-date'><i class='jli-pen'></i>".$h['date_created']."</span>";

                        ?>
                    </div>
                  </div>
                </div>
                <section id="content_main" class="clearfix jl_spost">
                  <div class="container">
                    <div class="row main_content">
                      <div class="col-md-8 loop-large-post" id="content">
                        <div class="widget_container content_page">
                          <!-- start post -->
                          <div class="post-2963 post type-post status-publish format-standard has-post-thumbnail hentry category-science tag-gaming" id="post-2963">
                            <div class="single_section_content box blog_large_post_style">
                              <div class="post_content_w">
                                <div class="post_sw">
                                  <div class="post_s">
                                    <div class="jl_single_share_wrapper jl_clear_at">
                                      <ul class="single_post_share_icon_post">
                                        <li class="single_post_share_facebook">
                                          <a href="#" target="_blank"><i class="jli-facebook"></i></a>
                                        </li>
                                        <li class="single_post_share_twitter">
                                          <a href="#" target="_blank"><i class="jli-twitter"></i></a>
                                        </li>
                                        <li class="single_post_share_pinterest">
                                          <a href="#" target="_blank"><i class="jli-pinterest"></i></a>
                                        </li>
                                        <li class="single_post_share_linkedin">
                                          <a href="#" target="_blank"><i class="jli-linkedin"></i></a>
                                        </li>
                                      </ul>
                                    </div>
                                    <span class="single-post-meta-wrapper jl_sfoot">
                                      <a href="#" class="jm-post-like liked" data-post_id="2963" title="Unlike">
                                        <i class="jli-love-full"></i>
                                        <span>2</span>
                                      </a>
                                      <span class="view_options"><i class="jli-view-o"></i><span>3.7k</span></span>
                                    </span>
                                  </div>
                                </div>
                                <div class="post_content jl_content">
                                  <?php
                                  $g=$conn->prepare("SELECT * FROM blog  WHERE category='Inspiration' ORDER BY blog_id DESC LIMIT 1 ");
                                  $g->execute();
                                  $h=$g->fetch(PDO::FETCH_BOTH);
                                 echo $h['blog'];
                                 ?>

                                 <?php foreach($r as $value):?>

                                   <div class="wp-block-group alignwide">
                                        <div class="wp-block-group__inner-container">
                                          <figure class="wp-block-gallery alignwide columns-2 is-cropped">
                                      <ul class="blocks-gallery-grid">
                                    <li class="blocks-gallery-item">
                                   <figure>
                                 <img loading="lazy" width="1000" height="1500" src="img/hunter-newton-WQEe4c757Gs-unsplash.jpg" alt="" data-id="5449" data-full-url="#WQEe4c757Gs-unsplash.jpg" data-link="#" class="wp-image-5449">
                                  </figure>
                                </li>
                              <li class="blocks-gallery-item">
                                 <figure>
                               <img loading="lazy" width="2064" height="1699" src="img/pexels-ba-tik-3754296.jpg" alt="" data-id="5401" data-full-url="#" data-link="#" class="wp-image-5401">
                              </figure>
                                </li>
                                </ul>
                            </figure>
                              <p>
                            </p>
                           </div>
                              </div>
                              <strong><h3>
                              <?=$value['title']?>
                            </h3></strong>
                            <?=$value['blog']?>
                            <?php endforeach;?>

                                    </div>
                                  </div>




                                      <!-- #respond -->
                                    </div>
                                  </div>
                                  <!-- end post -->

                                </div>
                              </div>

                                  </div>
                                </div>
                              </div>
                            </section>
<?php include "includes/footer.php"?>
