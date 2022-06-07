<?php
ob_start();
session_start();
include "includes/authenticate.php";
include "includes/db.php";
include "includes/admin_header.php";

if(isset($_GET['id'])){
$blog_id =$_GET['id'];
}else{
	header("location:myblog.php");
}

$statement= $conn->prepare("SELECT * FROM category");
$statement->execute();
$select= array();
while($row =$statement->fetch(PDO::FETCH_BOTH)){
   $select[]=$row;
};
$stmt=$conn->prepare("SELECT * FROM blog WHERE blog_id=:bid");
$stmt->bindparam(":bid",$blog_id);
$stmt->execute();

$record = $stmt->fetch(PDO::FETCH_BOTH);
if($stmt->rowcount() < 1){
	header("location_create_blog.php");
	exit();
};

if(isset($_POST['edit'])){
	 $error= array();

if(empty($error)){
  $fuck=$conn->prepare("UPDATE blog SET title=:tt, author=:au,category=:cat,blog=:bd WHERE blog_id=:bid");
  $fuck->bindparam(":tt",$_POST['title']);
  $fuck->bindparam(":au",$_POST['author']);
  $fuck->bindparam(":cat",$_POST['category']);
    $fuck->bindparam(":bd",$_POST['blog']);
  $fuck->bindparam(":bid",$blog_id);

  $fuck->execute();
  header("location:dashboard.php");
  exit();

}
}
 ?>


 <section id="content_main" class="clearfix">
   <div class="container">
     <div class="row main_content">
       <!-- begin content -->
       <div class="page-full col-md-12 post-5076 page type-page status-publish hentry" id="content">
         <div class="jl_cat_mid_title"><h3 class="categories-title title">Blog Edition</h3></div>
         <div class="content_single_page post-5076 page type-page status-publish hentry">
           <div class="content_page_padding">
             <div class="woocommerce">
               <div class="woocommerce-notices-wrapper">
               </div>
               <h2>Edit Blog</h2>
               <?php
                 if(isset($_GET['message'])){
                   echo $_GET['message'], " you may now proceed to the myblog page <a href='login.php'>View Blog</a>";
                 }

               ?>
               <form class="woocommerce-form woocommerce-form-login login" action="" method="post" enctype="multipart/form-data">
                 <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                   <!-- <label for="username">Username&nbsp;<span class="required">*</span></label> -->
                   <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="title" placeholder="title" id="username" autocomplete="username" value="<?=$record['title']?>">
                 </p>
                 <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                   <!-- <label for="username">email address&nbsp;<span class="required">*</span></label> -->
                   <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="author" placeholder="Author" id="username" autocomplete="username" value="<?=$record['author']?>">
                 </p>
                   <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">


                  <select name="category">
                     <?php foreach($select as $value):?>
                       <option value="<?=$value['category_name'];?>">
                        <?=$value['category_name'];?>
                         </option>
                     <?php endforeach; ?>
										 </select>
                   </p>
                   <!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
                     <!-- <label for="username">email address&nbsp;<span class="required">*</span></label> -->
                     <!-- <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="author" placeholder="Ar" autocomplete="username" value=""> -->
                   <!-- </p> -->
                   <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                     <!-- <label for="password">Confirm-Passwor&nbsp;<span class="required">*</span></label> -->
                     <span class="password-input">
                       <textarea class="woocommerce-Input woocommerce-Input--text input-text" style="height:500px"  type="password"  name="blog" id="password" autocomplete="current-password" ><?=$record['blog']?></textarea>
                       <!-- <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="cosh" id="password" autocomplete="current-password"> -->
                       <span class="show-password-input"></span>
                     </span>
                   </p>
                   <p class="form-row">
                     <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                       <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">

                     </label>
                     <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="edit" value="Log in">Edit Blog</button>
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



<?php include "includes/footer.php"; ?>
