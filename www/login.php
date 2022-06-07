<?php
ob_start();
session_start();
include "includes/admin_header.php";
include "includes/db.php";


If(isset($_POST['submit'])){
  $error=array();
  if(empty($error)){

     $stmt=$conn->prepare("SELECT * FROM admin WHERE email=:em");
     $stmt->bindparam(":em",$_POST['email']);
     $stmt->execute();
     $row=$stmt->fetch(PDO::FETCH_BOTH);

     // var_dump($_POST, $row);
     // die;
     if($stmt->rowcount() > 0 && password_verify($_POST['hash'],$row['hash'])){
       echo "I did it";
            $_SESSION['admin_id']=$row['admin_id'];
            $_SESSION['name']=$row['name'];
           header("location:index.php");
     }

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
              <h2>Login</h2>
               <?php

               ?>
              <form class="woocommerce-form woocommerce-form-login login" method="post">
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" autocomplete="username" value=""></p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                    <span class="password-input">
                      <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="hash" id="password" autocomplete="current-password">
                      <span class="show-password-input"></span>
                    </span>
                  </p>
                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                      <span>Remember me</span>
                    </label>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="submit" value="Log in">Log in</button>
                  </p>
                  <p class="woocommerce-LostPassword lost_password">
                    <a href="#">Lost your password?</a>
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
