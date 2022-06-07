<?php
ob_start();
include "includes/db.php";
include "includes/header.php";

if(isset($_GET['id'])){
  $blog_id=$_GET['id'];
$error=array();

if(empty($error)){
$m=$conn->prepare("SELECT * FROM blog  WHERE category=:bid ");
$m->bindparam(":bid",$_GET['id']);
$m->execute();
$r=array();
while($n=$m->fetch(PDO::FETCH_BOTH)){
  $r[]=$n;
}

}
}
 ?>







                <section id="content_main" class="clearfix jl_spost">
                  <div class="container">
                    <div class="row main_content">
                      <div class="col-md-8 loop-large-post" id="content">
                        <div class="widget_container content_page">
                          <!-- start post -->
                          <div class="post-2963 post type-post status-publish format-standard has-post-thumbnail hentry category-science tag-gaming" id="post-2963">
                            <div class="single_section_content box blog_large_post_style">
                              <div class="post_content_w">

                                <div class="post_content jl_content">

                                 <?php foreach($r as $value):?>
                                         <h3><?=$value['category']?></h3>
                                   <div class="wp-block-group alignwide">
                                        <div class="wp-block-group__inner-container">
                                          <figure class="wp-block-gallery alignwide columns-2 is-cropped">
                                      <ul class="blocks-gallery-grid">
                                    <li class="blocks-gallery-item">
                                   <figure>

                                 <img loading="lazy" width="1000" height="1500" src="img/hunter-newton-WQEe4c757Gs-unsplash.jpg" alt="" data-id="5449" data-full-url="#WQEe4c757Gs-unsplash.jpg" data-link="#" class="wp-image-5449">
                                  </figure>
                                  <span class='jl_f_cat'>

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
<?php include "includes/footer.php" ?>
