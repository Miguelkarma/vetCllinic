<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
   
   
<style>
 
  body{
  width: 100%;
  height: 100%;
  
  --s: 20em; 
  --c-half-left: hsl(29, 30.20%, 57.80%);
  --c-half-right: hsl(40, 50%, 80%);
  --c-bottom: hsla(41, 60.00%, 73.50%, 0.57);

  background: conic-gradient(
    var(--c-half-left) 0deg,
    var(--c-half-left) 120deg,
    var(--c-bottom) 120deg,
    var(--c-bottom) 240deg,
    var(--c-half-right) 240deg
  );
  background-size: var(--s);
}

  

  .hero{
      background: linear-gradient(rgb(44, 33, 1),rgb(148, 90, 2));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 3em;
   
  font-weight: bold;
  
  }
  #header{
    height:70vh;
    width:calc(100%);
    position:relative;
    top:-1em;
 
  }
  #header:before{
    content:"";
    position:absolute;
    height:calc(100%);
    width:calc(100%);
    background-image:url(<?= validate_image($_settings->info("cover")) ?>);
    background-size:cover;
    background-repeat:no-repeat;
    background-position: center center;
    
  }

 
  #header>div{
    position:absolute;
    height:calc(100%);
    width:calc(100%);
    z-index:2;
  }

  #top-Nav a.nav-link.active {
      color: #f8f9fa;
      font-weight: 900;
      position: relative;
  }
  #top-Nav a.nav-link.active:before {
    content: "";
    position: absolute;
    border-bottom: 2px solid #f8f9fa;
    width: 33.33%;
    left: 33.33%;
    bottom: 0;
  }
  .hback{
    
  background: #eacda3; 
background: -webkit-linear-gradient(to right, #d6ae7b, #eacda3);  
background: linear-gradient(to right, #d6ae7b, #eacda3);

  -webkit-backdrop-filter: blur(10px);
  box-shadow: 0 1em 4em 1em rgba(0, 0, 0, 1 );
  border-radius: 4em;
}

  }
</style>
<?php require_once('inc/header.php') ?>



  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
    
    <div class="wrapper">
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?>    
      <!-- Content Wrapper. Contains page content -->
   
        <?php if($page == "home" || $page == "about_us"): ?>
          <div id="header" class="shadow mt-3">
              <div class="d-flex justify-content-center h-100% w-100 align-items-center flex-column ">
                <div class="hback">
                  <h1 class="hero w-100 text-center site-title px-5"><?php echo $_settings->info('name') ?></h1>
                  <!-- <h3 class="w-100 text-center px-5 site-subtitle"><?php echo $_settings->info('name') ?></h3> -->
                   </div>
              </div>
          </div>
        <?php endif; ?>
        <!-- Main content -->
        <section class="content ">
          <div class="container">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section>
        <!-- /.content -->
  <div class="modal fade rounded-0" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body rounded-0">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body rounded-0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body rounded-0">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
      
  </body>
</html>
