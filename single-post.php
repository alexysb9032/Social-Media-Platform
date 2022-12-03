<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Title</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  <title>Document</title>

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/section.css">

  <link rel="stylesheet" href="assets/css/posting.css">

  <link rel="stylesheet" href="assets/css/right_col.css">

  <link rel="stylesheet" href="assets/css/responsive.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

<!-- Nav Bar Design -->

<nav class="navbar">

  <div class="nav-wrapper">

    <img src="assets/images/black_logo.png" class="brand-img">

    <div class="nav-items">

      <i class="icon fas fa-home fa-lg"></i>

      <i class="icon fas fa-plus-square fa-lg"></i>

      <i class="icon fas fa-heart fa-lg"></i>

      <div class="icon user-profile">

        <i class="fas fa-user-circle fa-lg"></i>

      </div>

    </div>

  </div>

</nav>

<!-- New Section -->

<?php 

include('config.php');

if(isset($_GET['post_id']))
{
  $post_identification = $_GET['post_id'];

  $stmt = $conn->prepare("SELECT * FROM Posts WHERE Post_ID = $post_identification;");
  
  $stmt->execute();
  
  $post_array = $stmt->get_result();

}
else{
  header('location: home.php');

  exit;
}

?>

<section class="main">

  <div class="wrapper">

    <!-- Design for left column -->

    <div class="left-col">

    <?php if(isset($_GET['error_message'])){ ?>
        
      <p id="error_message" class="text-center alert-danger mt-3"><?php echo $_GET['error_message'];?></p>
        
    <?php }?>

    <?php if(isset($_GET['success_message'])){ ?>
        
      <p class="text-center alert alert-success mt-3"><?php echo $_GET['success_message'];?></p>
        
    <?php }?>

    <!-- Wrapper for single posting -->

    <?php foreach($post_array as $post){ ?>

      <div class="post">

        <div class="info">

          <div class="user">

            <div class="profile-pic"><img src="<?php echo "assets/images/posts/". $post['Profile_Img']; ?>"></div>

            <p class="username"><?php echo $post['USER_NAME'];?></p>

          </div>

          <i class="fas fa-ellipsis-v options"></i>

        </div>

        <img src="<?php echo "assets/images/posts/". $post['Img_Path']; ?>" class="post-img">

        <div class="post-content">

          <div class="reactions-wrapper">

            <i class="icon fas fa-thumbs-up"></i>

            <i class="icon fas fa-calendar-alt"></i>

          </div>
          
          <p class="reactions"><?php echo $post['Likes'];?> Reactions</p>
          
          <p class="description">
            
            <span><?php echo $post['USER_NAME'];?> Says :<br></span>

            <?php echo $post['Caption'];?>
          </p>

          <p class="post-time"><?php echo date("M,Y,d", strtotime($post['Date_Upload']));?></p>

        </div>

        <div class="comments-section">

          <img src="assets/images/default.png" class="icon">

          <form method="post" action="comments_action.php" class="comments-section">
            
            <input type="text" class="comment-box" placeholder="Your Opinion" name="comment">

            <input type="hidden" name="post_id" value="<?php echo $post['Post_ID']?>">
            
            <button class="comment-button" type="submit" name="submit">WRITE</button>
          
          </form>
        </div>

      </div>

    <?php }?>

    </div>

    <!-- Design for right column -->

    <div class="right-col">

      <!-- structure for profile card section-->

      <div class="profile_card">

        <div class="profile-pic">

          <img src="assets/images/default.png">

        </div>

        <div>

          <p class="username">EventsWave Official</p>

          <p class="sub-text">Events with Elegance</p>

        </div>

        <button class="logout-btn">LogOut</button>

      </div>

    </div>

  </div>

</section>



</body>

</html>