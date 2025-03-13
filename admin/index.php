<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
     <?php require_once('inc/navigation.php') ?>
     
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
     <?php endif;?>    

     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3">
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
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
      </div>
      <!-- /.content-wrapper -->

      <?php require_once('inc/footer.php') ?>
    </div>

    <!-- Fix Sidebar and Content Alignment -->
    <style>
      /* Fix Sidebar Width */
      .main-sidebar {
        width: 250px !important;
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        overflow-y: auto;
      }

      /* Adjust Content Wrapper */
      .content-wrapper {
        margin-left: 250px !important;
        width: calc(100% - 250px) !important;
        min-height: 100vh;
        padding: 20px;
      }

      /* Ensure Table Stays Within Bounds */
      .table-responsive {
        max-width: 100%;
        overflow-x: auto;
      }

      /* Fix Sidebar Responsiveness */
      @media (max-width: 768px) {
        .main-sidebar {
          width: 100% !important;
          position: absolute;
        }
        .content-wrapper {
          margin-left: 0 !important;
          width: 100% !important;
        }
      }
    </style>

    <!-- JavaScript Fix -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        function adjustLayout() {
          let sidebarWidth = document.querySelector('.main-sidebar')?.offsetWidth || 250;
          let content = document.querySelector('.content-wrapper');
          if (content) {
            content.style.marginLeft = sidebarWidth + "px";
            content.style.width = `calc(100% - ${sidebarWidth}px)`;
          }
        }
        adjustLayout();
        window.addEventListener('resize', adjustLayout);
      });
    </script>

  </body>
</html>
