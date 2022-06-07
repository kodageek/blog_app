<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";
 ?>

 <div class="jl_home_bw">
   <?php
   $x=array();
   $z=$conn->prepare("SELECT * FROM blog Where admin_id=:aid ORDER BY blog_id DESC LIMIT 4");
   $z->bindparam(":aid",$_SESSION['admin_id']);
   $z->execute();
     while($y=$z->fetch(PDO::FETCH_BOTH)){
        $x[]=$y;
     }

   ?>
   <?php
   $r=array();
   $m=$conn->prepare("SELECT * FROM blog  Where admin_id=:aid ORDER BY blog_id DESC LIMIT 1");
      $m->bindparam(":aid",$_SESSION['admin_id']);
   $m->execute();
     while($y=$m->fetch(PDO::FETCH_BOTH)){
        $r[]=$y;
     }

   ?>
       <section class="home_section1">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="jl_mright_wrapper jl_clear_at">
                 <div class="jl_mix_post">
                   <div class="jl_m_center blog-style-one blog-small-grid">
                     <div class="jl_m_center_w jl_radus_e">
                       <div class="jl_f_img_bg" style="background-image: url('img/pexels-daria-shevtsova-1071162-scaled-1000x0.jpg');"></div>
                       <a href="#" class="jl_f_img_link"></a> <span class="jl_post_type_icon"><i class="jli-gallery"></i></span>
                      <?php foreach($r as $value):?>
                       <div class="text-box">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #eba845;" href="business.php"><?=$value['category']?></a>
                            <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                         </span>

                          <h3>

                            <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>
                              <?= $value['title']?>

                           </a>
                         </h3>
                         <span class='jl_post_meta'>
                          <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                               rel='author'><?=$value['author']?></a>
                          </span>"
                          <span class='post-date'><i class='jli-pen'></i><?=$value['time_created']?></span>
                           <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>
                           <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                             </span>

                       </div>
                     </div>
                   </div>
                 <?php endforeach?>
                      <?php foreach($x as $value):?>
                   <div class="jl_m_right">
                     <div class="jl_m_right_w">
                       <div class="jl_m_right_img jl_radus_e">
                         <a href="#"><img width="120" height="120" src="img/andre-maliik-v5Kd6MSmzoQ-unsplash-scaled-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                             alt="" loading="lazy"></a></div>
                       <div class="jl_m_right_content">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #91bd3a;" href="inspiration.php"><?= $value['category']?>
                           </a>
                           <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                         </span>

                           <h3>
                             <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>
                                  <?=$value['title']?>
                              </a>
                          </h3>
                           <span class='jl_post_meta'>
                             <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                                  rel='author'><?=$value['author']?></a>
                             </span>

                             <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>


                       </div>
                     </div>
                   </div>
                 <?php endforeach;?>


                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>
       <section class="home_section2">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div id="blockid_72be465" class="block-section jl-main-block" data-blockid="blockid_72be465" data-name="jl_mgrid" data-page_max="11" data-page_current="1" data-author="none" data-order="date_post" data-posts_per_page="6"
                 data-offset="5">
                 <div class="jl_grid_wrap_f jl_clear_at g_3col">
                   <div class="jl-roww content-inner jl-col3 jl-col-row">
                     <div class="jl_sec_title">
                       <h3 class="jl_title_c">
                         <span>Editors Picks Post</span>
                       </h3>
                       <br/>
                       <h4>Active</h4>
                     </div>

                     <?php
                     $a=array();
                     $i=$conn->prepare("SELECT * FROM blog  WHERE  admin_id=:aid AND category='Active' ORDER BY blog_id DESC ");
                        $i->bindparam(":aid",$_SESSION['admin_id']);
                     $i->execute();
                     while($j=$i->fetch(PDO::FETCH_BOTH)){
                        $a[]=$j;
                     }
                     ?>

                     <div class="container">
                       <div class="row">
                     <?php foreach($a as $value):?>
                      <div class='jl-grid-cols'>
                      <div class='p-wraper post-2957'>
                      <div class='jl_grid_w'>
                      <div class='jl_img_box jl_radus_e'>
                       <a href='sports.php'>
                            <span class='jl_post_type_icon'><i class='jli-gallery'></i></span>
                             <img width='500' height='350' src='img/oskar-zhitnitsa-d7bPBiGq668-unsplash-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'></a>
                                 <span class='jl_f_cat'><a class='post-category-color-text' style='background: #62ce5c;' href='sport.php'><?=$value['category']?>
                      </a>
                      <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                              </span>
                                  </div>
                             <div class='text-box'>

                        <h3>

                          <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>

                             <?=$value['title']?>
                         </a>
                       </h3>
                       <span class='jl_post_meta'>
                        <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                             rel='author'><?=$value['author']?></a>
                        </span>

                        <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>


                            <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                             </span>


                          </div>
                        </div>
                       </div>
                      </div>
                      <?php endforeach;?>
                    </div>
                  </div>

                     <?php
                     $b=array();
                     $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:aid AND  category='Business' ORDER BY blog_id DESC ");
                        $m->bindparam(":aid",$_SESSION['admin_id']);
                     $m->execute();
                     while($n=$m->fetch(PDO::FETCH_BOTH)){
                         $b[]=$n;
                     }
                     ?>
                     <h4>Business</h4>
                     <div class="container">
                       <div class="row">

                     <?php foreach($b as $value):?>

                      <div class='jl-grid-cols'>
                       <div class='p-wraper post-2957'>
                         <div class='jl_grid_w'>
                           <div class='jl_img_box jl_radus_e'>
                                   <a href='business.php'>
                               <img width='500' height='350' src='img/pexels-daria-shevtsova-709789-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>
                                </a>
                              <span class='jl_f_cat'><a class='post-category-color-text' style='background: #91bd3a;' href='business.php'><?=$value['category']?></a>
                                  <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                              </span>
                                 </div>
                          <div class='text-box'>

                        <h3>

                        <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>

                            <?=$value['title']?>
                         </a>
                       </h3>
                        <span class='jl_post_meta'>
                          <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                             rel='author'><?=$value['author']?></a>
                          </span>

                           <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>


                            <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                                 </span>



                               </div>
                             </div>
                            </div>
                        </div>

                      <?php endforeach;?>
<!-- </div> -->
<!-- </div> -->
</div>
</div>

                      <?php
                      $c=array();
                      $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:aid AND  category='Science' ORDER BY blog_id DESC ");
                          $m->bindparam(":aid",$_SESSION['admin_id']);
                      $m->execute();
                      while($n=$m->fetch(PDO::FETCH_BOTH)){
                        $c[]=$n;
                      }
                      ?>
                      <h4>Science</h4>
                      <div class="container">
                        <div class="row">
                      <?php foreach($c as $value):?>
                       <div class='jl-grid-cols'>
                        <div class='p-wraper post-2957'>
                            <div class='jl_grid_w'>
                               <div class='jl_img_box jl_radus_e'>
                                <a href='active.php'>
                                 <span class='jl_post_type_icon'>
                                    <i class='jli-quote-2'></i>
                                 </span>
                                <img width='500' height='350' src='img/daniel-korpai-L8y01mTuDZg-unsplash-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>
                                </a>
                                <span class='jl_f_cat'>
                                <a class='post-category-color-text' style='background: #4dcf8f;' href='active.php'><?=['category']?></a>
                                   <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                              </span>
                                </div>
                               <div class='text-box'>

                              <h3>

                              <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>

                             <?=$value['title']?>
                            </a>
                             </h3>
                            <span class='jl_post_meta'>
                              <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                              rel='author'>"<?=$value['author']?></a>
                             </span>

                             <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>


                             <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                            </span>



                            </div>
                          </div>
                       </div>
                     </div>
                   <?php endforeach; ?>
                 </div>
               </div>

                       <?php
                       $d=array();
                       $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:aid AND category='Inspiration' ORDER BY blog_id DESC ");
                             $m->bindparam(":aid",$_SESSION['admin_id']);
                       $m->execute();
                       while($n=$m->fetch(PDO::FETCH_BOTH)){
                        $d[]=$n;
                       }
                         ?>
                         <h4>Inspiration</h4>
                         <div class="container">
                           <div class="row">
                         <?php foreach($d as $value):?>
                        <div class='jl-grid-cols'>
                        <div class='p-wraper post-2957'>
                        <div class='jl_grid_w'>
                        <div class='jl_img_box jl_radus_e'>
                           <a href='inspiration.php'>
                           <img width='500' height='350' src='img/alex-block-O6PS-ts5C2A-unsplash-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>
                             </a>
                              <span class='jl_f_cat'>
                             <a class='post-category-color-text' style='background: #eba845;' href='inspiration.php'><?=['category']?></a>
                               <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                            </span>
                        </div>
                        <div class='text-box'>

                        <h3>

                        <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>

                             <?=$value['title']?>
                           </a>
                        </h3>
                         <span class='jl_post_meta'>
                          <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                               rel='author'>"<?=$value['author']?>"</a>
                          </span>

                          <span class='post-date'><i class='jli-pen'></i>"<?=$value['date_created']?>"</span>


                            <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                              </span>

                        </div>
                      </div>
                    </div>
                  </div>
                      <?php endforeach;?>
                    </div>
                  </div>

                        <?php
                        $e=array();
                        $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:aid AND  category='Health' ORDER BY blog_id DESC ");
                            $m->bindparam(":aid",$_SESSION['admin_id']);
                        $m->execute();
                        while($n=$m->fetch(PDO::FETCH_BOTH)){
                             $e[]=$n;
                        }
                          ?>
                          <h4>Health</h4>
                          <div class="container">
                            <div class="row">
                        <?php foreach($e as $value):?>
                         <div class='jl-grid-cols'>
                          <div class='p-wraper post-2957'>
                             <div class='jl_grid_w'>
                          <div class='jl_img_box jl_radus_e'>
                             <a href='#'>
                               <span class='jl_post_type_icon'>
                                  <i class='jli-quote-2'></i>
                            </span>
                              <img width='500' height='350' src='img/daniel-korpai-L8y01mTuDZg-unsplash-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>
                             </a>
                           <span class='jl_f_cat'>
                              <a class='post-category-color-text' style='background: #4dcf8f;' href='#'><?=$value['category']?></a>
                              <a href="admin_edit.php?id=<?=$value['blog_id']?>">Edit</a>
                         </span>
                                       </div>
                            <div class='text-box'>

                          <h3>

                             <a href='view_blog_admin.php?id=<?=$value['blog_id']?>'>

                                <?=$n['title']?>
                          </a>
                          </h3>
                          <span class='jl_post_meta'>
                             <span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                                rel='author'><?=$value['author']?></a>
                          </span>

                           <span class='post-date'><i class='jli-pen'></i><?=$value['date_created']?></span>


                              <span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>
                                </span>




                         </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach;?>
                </div>
              </div>


                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>

     </div>


 <?php include "includes/footer.php"?>
