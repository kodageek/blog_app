<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";

if(isset($_POST['submit'])){
  $error=array();

if(empty($error)){
$state=$conn->prepare("INSERT INTO blog VALUES(NULL,:ad,:tt,:au,:ct,:bg,NOW(),NOW())");
$state->bindparam(":ad",$_SESSION['admin_id']);
$state->bindparam(":tt",$_POST['title']);
$state->bindparam(":au",$_POST['author']);
$state->bindparam(":ct",$_POST['category']);
$state->bindparam(":bg",$_POST['blog']);
$state->execute();
header("location:create_blog.php?message=Your blog has been created");
}
}
?>

<section id="content_main" class="clearfix">
  <div class="container">
    <div class="row main_content">
      <!-- begin content -->
      <div class="page-full col-md-12 post-5076 page type-page status-publish hentry" id="content">
        <div class="jl_cat_mid_title"><h3 class="categories-title title">Blog Creation</h3></div>
        <div class="content_single_page post-5076 page type-page status-publish hentry">
          <div class="content_page_padding">
            <div class="woocommerce">
              <div class="woocommerce-notices-wrapper">
              </div>
              <h2>Create Blog</h2>
              <?php
                if(isset($_GET['message'])){
                  echo $_GET['message'], " you may now proceed to the myblog page <a href='login.php'>View Blog</a>";
                }

              ?>
              <form class="woocommerce-form woocommerce-form-login login" action="" method="post" enctype="multipart/form-data">
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <!-- <label for="username">Username&nbsp;<span class="required">*</span></label> -->
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="title" placeholder="title" id="username" autocomplete="username" value="">
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <!-- <label for="username">email address&nbsp;<span class="required">*</span></label> -->
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="author" placeholder="Author" id="username" autocomplete="username" value="">
                </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

                   <?php
                      $statement=$conn->prepare("SELECT * FROM category");
                      $statement->execute();
                      echo "<br>";
                        echo "<br>";
                    echo "<select class='woocommerce-Input woocommerce-Input--text input-text' type='password' name='category' id='password' autocomplete='current-password'>";

                     echo "<option select>--Select Category--</option>";
                     while($row=$statement->fetch(PDO::FETCH_BOTH)){
                      echo "<option value='".$row['category_name']."'>".$row['category_name']."</option>";

                    }
                      echo "</select>";



                    ?>
                  </p>
                  <!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
                    <!-- <label for="username">email address&nbsp;<span class="required">*</span></label> -->
                    <!-- <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="author" placeholder="Ar" autocomplete="username" value=""> -->
                  <!-- </p> -->
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <!-- <label for="password">Confirm-Passwor&nbsp;<span class="required">*</span></label> -->
                    <span class="password-input">
                      <textarea class="woocommerce-Input woocommerce-Input--text input-text" style="height:500px"  type="password" name="blog" id="password" autocomplete="current-password" ></textarea>
                      <!-- <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="cosh" id="password" autocomplete="current-password"> -->
                      <span class="show-password-input"></span>
                    </span>
                  </p>
                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">

                    </label>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="submit" value="Log in">Create Blog</button>
                  </p>

                  <p class="woocommerce-LostPassword lost_password">
                    <a href="login.php">Create</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
include "includes/footer.php";

?>
