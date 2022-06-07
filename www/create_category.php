<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";

if(isset($_POST['submit'])){
$error=array();

if(empty($error)){
$stmt=$conn->prepare("INSERT INTO category VALUES(NULL,:cn,:ad,NOW(),NOW())");
$stmt->bindparam(":cn",$_POST['name']);
$stmt->bindparam(":ad",$_SESSION['admin_id']);
$stmt->execute();
header("location:create_category.php");
}
}
?>

<section id="content_main" class="clearfix">
  <div class="container">
    <div class="row main_content">
      <!-- begin content -->
      <div class="page-full col-md-12 post-5076 page type-page status-publish hentry" id="content">
        <div class="jl_cat_mid_title"><h3 class="categories-title title">Category Creation</h3></div>
        <div class="content_single_page post-5076 page type-page status-publish hentry">
          <div class="content_page_padding">
            <div class="woocommerce">
              <div class="woocommerce-notices-wrapper">
              </div>
              <h2>Create Category</h2>
              <?php
                if(isset($_GET['message'])){
                  echo $_GET['message'], " you may now proceed to the login page <a href='login.php'>Login</a>";
                }

              ?>
              <form class="woocommerce-form woocommerce-form-login login" action="" method="post" enctype="multipart/form-data">
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <!-- <label for="username">Username&nbsp;<span class="required">*</span></label> -->
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" placeholder="Category name" id="username" autocomplete="username" value="">
                </p>

                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">

                    </label>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="submit" value="Log in">Create Category</button>
                  </p>

                  <p class="woocommerce-LostPassword lost_password">
                    <a href="login.php">Create</a>
                  </p>
                  <p>
                       <table border="2" class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" >
                          <tr>
                            <th>Category Name</th>
                            <th>Admin ID</th>
                            <th>Date Created</th>
                            <th>Time Created</th>
                          </tr>
                            <?php
                              $statement=$conn->prepare("SELECT * FROM category");
                              $statement->execute();
                              while($row=$statement->fetch(PDO::FETCH_BOTH)){
                                echo "<tr>";
                                echo "<td>".$row['category_name']."</td>";
                                echo "<td>".$row['admin_id']."</td>";
                                echo "<td>".$row['date_created']."</td>";
                                echo "<td>".$row['time_created']."</td>";
                                echo "</tr>";
                              }
                             ?>
                       </table>

                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "includes/footer.php";?>
