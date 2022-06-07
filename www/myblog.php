<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";
 ?>


 <div class="jl_home_bw">
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
                       <div class="text-box">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #eba845;" href="create_category">Business</a></span>
                        <?php
                          echo "<h3>";

                            echo "<a href='#'>";
                             $a=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Business' ORDER BY blog_id DESC LIMIT 1 ");
                             $a->bindParam(":ad",$_SESSION['admin_id']);
                             $a->execute();
                               $b=$a->fetch(PDO::FETCH_BOTH);
                               // var_dump($b);
                              echo $b['title'];
                           echo "</a>";
                         echo "</h3>";
                         echo  "<span class='jl_post_meta'>";
                          echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                               rel='author'>".$b['author']."</a>";
                          echo   "</span>";
                          echo   "<span class='post-date'><i class='jli-pen'></i>".$b['time_created']."</span>";
                          echo   "<span class='post-date'><i class='jli-pen'></i>".$b['date_created']."</span>";
                          echo   "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span></span>";
                          echo   "<a href='admin_edit.php?id=".$b['blog_id']."'>Edit</a>";

                          ?>
                       </div>
                     </div>
                   </div>
                   <div class="jl_m_right">
                     <div class="jl_m_right_w">
                       <div class="jl_m_right_img jl_radus_e">
                         <a href="#"><img width="120" height="120" src="img/andre-maliik-v5Kd6MSmzoQ-unsplash-scaled-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image"
                             alt="" loading="lazy"></a></div>
                       <div class="jl_m_right_content">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #91bd3a;" href="#">Inspiration</a></span>
                           <?php
                             echo "<h3>";

                               echo "<a href='#'>";
                                $z=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Inspiration' ORDER BY blog_id DESC LIMIT 1 ");
                                $z->bindparam(":ad",$_SESSION['admin_id']);
                                $z->execute();
                                  $y=$z->fetch(PDO::FETCH_BOTH);
                                 echo $y['title'];
                              echo "</a>";
                            echo "</h3>";
                            echo  "<span class='jl_post_meta'>";
                             echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                                  rel='author'>".$y['author']."</a>";
                             echo   "</span>";

                             echo   "<span class='post-date'><i class='jli-pen'></i>".$y['date_created']."</span>";

                             ?>
                       </div>
                     </div>
                   </div>
                   <div class="jl_m_right">
                     <div class="jl_m_right_w">
                       <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="img/dan-smedley-TBNzDilPfzo-unsplash-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt=""
                             loading="lazy"></a></div>
                       <div class="jl_m_right_content">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #4dcf8f;" href="#">Active</a></span>
                           <?php
                             echo "<h3>";

                               echo "<a href='#'>";
                                $g=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Active' ORDER BY blog_id DESC LIMIT 1 ");
                                $g->bindparam(":ad",$_SESSION['admin_id']);
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
                   <div class="jl_m_right">
                     <div class="jl_m_right_w">
                       <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="img/markus-spiske-exUbjEirAsY-unsplash-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt=""
                             loading="lazy"></a></div>
                       <div class="jl_m_right_content">
                         <span class="jl_f_cat">
                           <a class="post-category-color-text" style="background: #d66300;" href="#">Science</a></span>
                           <?php
                             echo "<h3>";

                               echo "<a href='#'>";
                                $g=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Science' ORDER BY blog_id DESC LIMIT 1 ");
                                $g->bindparam(":ad",$_SESSION['admin_id']);
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
                   <div class="jl_m_right">
                     <div class="jl_m_right_w">
                       <div class="jl_m_right_img jl_radus_e"><a href="#"><img width="120" height="120" src="img/adam-jaime-dmkmrNptMpw-unsplash-120x120.jpg" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt=""
                             loading="lazy"></a></div>
                       <div class="jl_m_right_content"> <span class="jl_f_cat"><a class="post-category-color-text" style="background: #62ce5c;" href="#">Sports</a></span>
                         <?php
                           echo "<h3>";

                             echo "<a href='#'>";
                              $i=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Sports' ORDER BY blog_id DESC LIMIT 1 ");
                              $i->bindparam(":ad",$_SESSION['admin_id']);
                              $i->execute();
                                $j=$i->fetch(PDO::FETCH_BOTH);
                               echo $j['title'];
                            echo "</a>";
                          echo "</h3>";
                          echo  "<span class='jl_post_meta'>";
                           echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                                rel='author'>".$j['author']."</a>";
                           echo   "</span>";

                           echo   "<span class='post-date'><i class='jli-pen'></i>".$j['date_created']."</span>";

                           ?>
                       </div>
                     </div>
                   </div>
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
                       <p>This is an optional subtitle for post section</p>
                     </div>

                     <?php
                     $i=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Sports' ORDER BY blog_id DESC ");
                     $i->bindparam(":ad",$_SESSION['admin_id']);
                     $i->execute();
                     while($j=$i->fetch(PDO::FETCH_BOTH)){
                      echo "<div class='jl-grid-cols'>";
                      echo "<div class='p-wraper post-2957'>";
                      echo   "<div class='jl_grid_w'>";
                      echo     "<div class='jl_img_box jl_radus_e'>";
                      echo     "<a href='#'>";
                      echo       "<span class='jl_post_type_icon'><i class='jli-gallery'></i></span>";
                      echo          "<img width='500' height='350' src='img/oskar-zhitnitsa-d7bPBiGq668-unsplash-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'></a>";
                      echo            "<span class='jl_f_cat'><a class='post-category-color-text' style='background: #62ce5c;' href='#'>Sports";
                      echo    "</a>";
                         echo   "<a href='admin_edit.php?id=".$j['blog_id']."'>Edit</a>";
                      echo          "</span>";
                      echo               "</div>";
                      echo     "<div class='text-box'>";

                        echo "<h3>";

                          echo "<a href='#'>";

                            echo $j['title'];
                         echo "</a>";
                       echo "</h3>";
                       echo  "<span class='jl_post_meta'>";
                        echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                             rel='author'>".$j['author']."</a>";
                        echo   "</span>";

                        echo   "<span class='post-date'><i class='jli-pen'></i>".$j['date_created']."</span>";


                            echo "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>";
                             echo    "</span>";


                      echo     "</div>";
                      echo   "</div>";
                      echo "</div>";
                      echo  "</div>";
                    };
                      ?>

                     <?php
                     $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Business' ORDER BY blog_id DESC ");
                     $m->bindparam(":ad",$_SESSION['admin_id']);
                     $m->execute();
                     while($n=$m->fetch(PDO::FETCH_BOTH)){
                      echo "<div class='jl-grid-cols'>";
                      echo "<div class='p-wraper post-2957'>";
                      echo   "<div class='jl_grid_w'>";
                      echo     "<div class='jl_img_box jl_radus_e'>";
                      echo             "<a href='#'>";
                      echo          "<img width='500' height='350' src='img/pexels-daria-shevtsova-709789-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>";
                      echo          "</a>";
                      echo         "<span class='jl_f_cat'><a class='post-category-color-text' style='background: #91bd3a;' href='#'>Business</a>";
                      echo   "<a href='admin_edit.php?id=".$n['blog_id']."'>Edit</a>";
                      echo          "</span>";
                      echo               "</div>";
                      echo     "<div class='text-box'>";

                        echo "<h3>";

                          echo "<a href='#'>";

                            echo $n['title'];
                         echo "</a>";
                       echo "</h3>";
                       echo  "<span class='jl_post_meta'>";
                        echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                             rel='author'>".$n['author']."</a>";
                        echo   "</span>";

                        echo   "<span class='post-date'><i class='jli-pen'></i>".$n['date_created']."</span>";


                            echo "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>";
                             echo    "</span>";



                      echo     "</div>";
                      echo   "</div>";
                      echo "</div>";
                      echo  "</div>";
                    };
                      ?>

                      <?php
                      $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Active' ORDER BY blog_id DESC ");
                      $m->bindparam(":ad",$_SESSION['admin_id']);
                      $m->execute();
                      while($n=$m->fetch(PDO::FETCH_BOTH)){
                       echo "<div class='jl-grid-cols'>";
                       echo "<div class='p-wraper post-2957'>";
                       echo   "<div class='jl_grid_w'>";
                       echo     "<div class='jl_img_box jl_radus_e'>";
                       echo    "<a href='#'>";
                       echo      "<span class='jl_post_type_icon'>";
                       echo         "<i class='jli-quote-2'></i>";
                      echo      "</span>";
                      echo      "<img width='500' height='350' src='img/daniel-korpai-L8y01mTuDZg-unsplash-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>";
                      echo      "</a>";
                      echo      "<span class='jl_f_cat'>";
                      echo      "<a class='post-category-color-text' style='background: #4dcf8f;' href='#'>Active</a>";
                       echo   "<a href='admin_edit.php?id=".$n['blog_id']."'>Edit</a>";
                       echo          "</span>";
                       echo               "</div>";
                       echo     "<div class='text-box'>";

                         echo "<h3>";

                           echo "<a href='#'>";

                             echo $n['title'];
                          echo "</a>";
                        echo "</h3>";
                        echo  "<span class='jl_post_meta'>";
                         echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                              rel='author'>".$n['author']."</a>";
                         echo   "</span>";

                         echo   "<span class='post-date'><i class='jli-pen'></i>".$n['date_created']."</span>";


                             echo "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>";
                              echo    "</span>";



                       echo     "</div>";
                       echo   "</div>";
                       echo "</div>";
                       echo  "</div>";
                     };
                       ?>

                       <?php
                       $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Inspiration' ORDER BY blog_id DESC ");
                       $m->bindparam(":ad",$_SESSION['admin_id']);
                       $m->execute();
                       while($n=$m->fetch(PDO::FETCH_BOTH)){
                        echo "<div class='jl-grid-cols'>";
                        echo "<div class='p-wraper post-2957'>";
                        echo   "<div class='jl_grid_w'>";
                        echo     "<div class='jl_img_box jl_radus_e'>";
                        echo     "<a href='#'>";
                        echo  "<img width='500' height='350' src='img/alex-block-O6PS-ts5C2A-unsplash-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>";
                        echo  "</a>";
                        echo  "<span class='jl_f_cat'>";
                        echo  "<a class='post-category-color-text' style='background: #eba845;' href='#'>Inspiration</a>";
                              echo   "<a href='admin_edit.php?id=".$n['blog_id']."'>Edit</a>";
                        echo "</span>";
                        echo               "</div>";
                        echo     "<div class='text-box'>";

                          echo "<h3>";

                            echo "<a href='#'>";

                              echo $n['title'];
                           echo "</a>";
                         echo "</h3>";
                         echo  "<span class='jl_post_meta'>";
                          echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                               rel='author'>".$n['author']."</a>";
                          echo   "</span>";

                          echo   "<span class='post-date'><i class='jli-pen'></i>".$n['date_created']."</span>";


                              echo "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>";
                               echo    "</span>";



                        echo     "</div>";
                        echo   "</div>";
                        echo "</div>";
                        echo  "</div>";
                      };
                        ?>

                        <?php
                        $m=$conn->prepare("SELECT * FROM blog  WHERE admin_id=:ad AND category='Health' ORDER BY blog_id DESC ");
                        $m->bindparam(":ad",$_SESSION['admin_id']);
                        $m->execute();
                        while($n=$m->fetch(PDO::FETCH_BOTH)){
                         echo "<div class='jl-grid-cols'>";
                         echo "<div class='p-wraper post-2957'>";
                         echo   "<div class='jl_grid_w'>";
                         echo     "<div class='jl_img_box jl_radus_e'>";
                         echo    "<a href='#'>";
                         echo      "<span class='jl_post_type_icon'>";
                         echo         "<i class='jli-quote-2'></i>";
                        echo      "</span>";
                        echo      "<img width='500' height='350' src='img/daniel-korpai-L8y01mTuDZg-unsplash-scaled-500x350.jpg' class='attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image' alt='' loading='lazy'>";
                        echo      "</a>";
                        echo      "<span class='jl_f_cat'>";
                        echo      "<a class='post-category-color-text' style='background: #4dcf8f;' href='#'>Health</a>";
                         echo   "<a href='admin_edit.php?id=".$n['blog_id']."'>Edit</a>";
                         echo "</span>";
                         echo               "</div>";
                         echo     "<div class='text-box'>";

                           echo "<h3>";

                             echo "<a href='#'>";

                               echo $n['title'];
                            echo "</a>";
                          echo "</h3>";
                          echo  "<span class='jl_post_meta'>";
                           echo   "<span class='jl_author_img_w'><i class='jli-user'></i><a href='#' title='Posts by Spraya'
                                rel='author'>".$n['author']."</a>";
                           echo   "</span>";

                           echo   "<span class='post-date'><i class='jli-pen'></i>".$n['date_created']."</span>";


                               echo "<span class='post-read-time'><i class='jli-watch-2'></i>2 Mins read</span>";
                                echo    "</span>";




                         echo     "</div>";
                         echo   "</div>";
                         echo "</div>";
                         echo  "</div>";
                       };
                         ?>


                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>



     </div>

 <?php include "includes/footer.php"?>
