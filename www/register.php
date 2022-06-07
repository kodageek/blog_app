<?php
ob_start();
include "includes/header.php";
include "includes/db.php";


if(isset($_POST['register'])){
  $error=array();

if(empty($error)){
  $hash= password_hash($_POST['hash'],PASSWORD_BCRYPT);
   $stmt=$conn->prepare("INSERT INTO admin VALUES(NULL,:nm,:em,:hsh,NOW(),NOW())");
  $stmt->bindparam(":nm",$_POST['name']);
  $stmt->bindparam(":em",$_POST['email']);
  $stmt->bindparam(":hsh",$hash);
   $stmt->execute();
  header("location:register.php?message=Your account has been created");
 }
}
?>


<section id="content_main" class="clearfix">
  <div class="container">
    <div class="row main_content">
      <!-- begin content -->
      <div class="page-full col-md-12 post-5076 page type-page status-publish hentry" id="content">
        <div class="jl_cat_mid_title"><h3 class="categories-title title">My Account</h3></div>
        <div class="content_single_page post-5076 page type-page status-publish hentry">
          <div class="content_page_padding">
            <div class="woocommerce">
              <div class="woocommerce-notices-wrapper">
              </div>
              <h2>Register</h2>
              <?php
                if(isset($_GET['message'])){
                  echo $_GET['message'], " you may now proceed to the login page <a href='login.php'>Login</a>";
                }

              ?>
              <form class="woocommerce-form woocommerce-form-login login" action="" method="post">
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label for="username">Username&nbsp;<span class="required">*</span></label>
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="username" autocomplete="username" value="">
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label for="username">email address&nbsp;<span class="required">*</span></label>
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" autocomplete="username" value="">
                </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                    <span class="password-input">
                      <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="hash" id="password" autocomplete="current-password">
                      <span class="show-password-input"></span>
                    </span>
                  </p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password">Confirm-Password&nbsp;<span class="required">*</span></label>
                    <span class="password-input">
                      <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="cosh" id="password" autocomplete="current-password">
                      <span class="show-password-input"></span>
                    </span>
                  </p>
                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                      <span>Remember me</span>
                    </label>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="register" value="Log in">Register</button>
                  </p>
                  <p class="woocommerce-LostPassword lost_password">
                    <a href="login.php">Login</a>
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
include "includes/footer.php"
?>
