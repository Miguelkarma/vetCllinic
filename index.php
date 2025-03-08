<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
   
   
<style>
body {
background:
radial-gradient(hsl(34, 90%, 85%) 4%, hsl(34, 80%, 75%) 9%, hsla(34, 80%, 77%, 0) 9%) 0 0,
radial-gradient(hsl(34, 90%, 85%) 4%, hsl(34, 80%, 75%) 8%, hsla(34, 80%, 77%, 0) 10%) 50px 50px,
radial-gradient(hsla(34, 90%, 85%, 0.8) 20%, hsla(34, 80%, 75%, 0)) 50px 0,
radial-gradient(hsla(34, 90%, 85%, 0.8) 20%, hsla(34, 80%, 75%, 0)) 0 50px,
radial-gradient(hsla(34, 90%, 80%, 1) 35%, hsla(34, 80%, 75%, 0) 60%) 50px 0,
radial-gradient(hsla(34, 90%, 80%, 1) 35%, hsla(34, 80%, 75%, 0) 60%) 100px 50px,
radial-gradient(hsla(34, 80%, 75%, 0.7), hsla(34, 80%, 75%, 0)) 0 0,
radial-gradient(hsla(34, 80%, 75%, 0.7), hsla(34, 80%, 75%, 0)) 50px 50px,
linear-gradient(45deg, hsla(34, 80%, 75%, 0) 49%, hsla(34, 80%, 60%, 1) 50%, hsla(34, 80%, 75%, 0) 70%) 0 0,
linear-gradient(-45deg, hsla(34, 80%, 75%, 0) 49%, hsla(34, 80%, 60%, 1) 50%, hsla(34, 80%, 75%, 0) 70%) 0 0;
background-color: #5a3e2b;
background-size: 100px 100px;

}



  
  
  .hero{
     background: linear-gradient(90deg, rgba(100, 71, 4, 0.87) 0%, rgba(60, 25, 3, 0.93) 40%, rgba(146, 89, 3, 0.6) 95%);
  font-weight: bold;
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
backdrop-filter: blur(6em);
  box-shadow: 0 0.5em 2em 1em inset rgba(0, 0, 0, 1 );
  border-radius: 4em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 30vh; 
  width: 60%;
  text-align: center;
  
}

@media (max-width:606px) {
 .hback{
  font-size:0.7em;
 }

}
@media (max-width:500px) {
 .hback{
  font-size:0.6em;
  width: 100%;
 }
 
}

.button {
  --white: #F5F5DC; /* Beige */
  --bg:rgba(215, 182, 138, 0.73); /* Tan */
  --radius: 100px;
  outline: none;
  cursor: pointer;
  border: 0;
  position: relative;
  border-radius: var(--radius);
  background-color: var(--bg);
  transition: all 0.2s ease;
  box-shadow:
    inset 0 0.3rem 0.9rem rgba(255, 255, 255, 0.3),
    inset 0 -0.1rem 0.3rem rgba(0, 0, 0, 0.7),
    inset 0 -0.4rem 0.9rem rgba(255, 255, 255, 0.5),
    0 3rem 3rem rgba(0, 0, 0, 0.3),
    0 1rem 1rem -0.6rem rgba(0, 0, 0, 0.8);
}
.button .wrap {
  font-size: 1.4em;
  font-weight: 500;
  color: rgba(75, 56, 10, 0.7);
  padding: 0em;
  border-radius: inherit;
  position: relative;
  overflow: hidden;
  
}
.button .wrap p span:nth-child(2) {
  display: none;
}
.button:hover .wrap p span:nth-child(1) {
  display: none;
}
.button:hover .wrap p span:nth-child(2) {
  display: inline-block;
}
.button .wrap p {
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 0;
  transition: all 0.2s ease;
  transform: translateY(2%);
  mask-image: linear-gradient(to bottom, white 40%, transparent);

}
.button .wrap::before,
.button .wrap::after {
  content: "";
  position: absolute;
  transition: all 0.3s ease;
}
.button .wrap::before {
  left: -15%;
  right: -15%;
  bottom: 25%;
  top: -100%;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.12);
}
.button .wrap::after {
  left: 6%;
  right: 6%;
  top: 12%;
  bottom: 40%;
  border-radius: 22px 22px 0 0;
  box-shadow: inset 0 10px 8px -10px rgba(255, 255, 255, 0.8);
  background: linear-gradient(
    180deg,
    rgba(255, 255, 255, 0.3) 0%,
    rgba(0, 0, 0, 0) 50%,
    rgba(0, 0, 0, 0) 100%
  );
}
.button:hover {
  box-shadow:
    inset 0 0.3rem 0.5rem rgba(255, 255, 255, 0.4),
    inset 0 -0.1rem 0.3rem rgba(0, 0, 0, 0.7),
    inset 0 -0.4rem 0.9rem rgba(255, 255, 255, 0.7),
    0 3rem 3rem rgba(0, 0, 0, 0.3),
    0 1rem 1rem -0.6rem rgba(0, 0, 0, 0.8);
}
.button:hover .wrap::before {
  transform: translateY(-5%);
}
.button:hover .wrap::after {
  opacity: 0.4;
  transform: translateY(5%);
}
.button:hover .wrap p {
  transform: translateY(-4%);
}
.button:active {
  transform: translateY(4px);
  box-shadow:
    inset 0 0.3rem 0.5rem rgba(255, 255, 255, 0.5),
    inset 0 -0.1rem 0.3rem rgba(0, 0, 0, 0.8),
    inset 0 -0.4rem 0.9rem rgba(255, 255, 255, 0.4),
    0 3rem 3rem rgba(0, 0, 0, 0.3),
    0 1rem 1rem -0.6rem rgba(0, 0, 0, 0.8);
}


@media (max-width: 1600px) {
  .button {
    font-size: 1em;
    padding: 0.3em 0.8em;
    min-width: 100px;
  }
  .button .wrap {
    font-size: 1em;
  }
  .button .wrap p {
    gap: 8px;
  }
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
                  <h1 class="hero w-100 text-center site-title px-5"><?php echo $_settings->info('name') ?>
                </h1>
                  <button class="button" onClick="window.location.href='http://localhost/ovas/?page=appointment'">

  <div class="wrap">
    <p>
    
      Book an Appointment <i class="fas fa-arrow-right"></i>
    </p>
  </div>
</button>
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
