<style>

.user-img {
  height: 30px;
  width: 30px;
  object-fit: cover;
  border-radius: 50%;
}

.btn-rounded {
  border-radius: 50px;
}


body {
  padding-top: 60px;
}


#top-Nav {  
  position: fixed !important;
  top: 0 !important;
  z-index: 1037;
  width: 100%;
  padding: 0.5rem !important;
  background-color: transparent;
  backdrop-filter: blur(3em);
}

.navbar-brand img {
  height: 40px;
  width: auto;
  border-radius: 50%;
}

.navbar-brand {
  display: flex;
  align-items: center;
}

.nav-link {
  color: rgb(104, 64, 5) !important;
  transition: all 0.5s ease-in-out;
  font-weight: semibold !important;
  width: 100%;
  align-items: center;
  display: flex;
}

.nav-link, .nav-link.active {
  color: rgba(100, 45, 0, 0.72) !important;
  font-weight: bold;
  border-radius: 1em;
}

.navbar-toggler {
  border: none;
}

.name {
  background: linear-gradient(90deg, rgba(135, 88, 0, 1) 0%, rgba(117, 99, 5, 0.93) 40%, rgba(68, 65, 3, 0.6) 95%);
  font-weight: bold;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 1.5rem;
}


.user-info {
    color: #5C4033;
  display: flex;
  align-items: center;
  gap: 5px!important;
}

.user-section {
  display: flex;
  align-items: center;
}

.user-info a {
  text-decoration: none;
}

.nav-item {
  margin-left: 0.5em;
}

@media screen and (max-width: 991px) {
  .navbar-collapse {
    background: #eacda3;
    background: -webkit-linear-gradient(to right, #d6ae7b, #eacda3);
    background: linear-gradient(to right, #d6ae7b, #eacda3);
    border-radius: 1em;
    padding; 1em;
    text-align: center;
  }

  .navbar-nav {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .nav-item {
    width: 100%;
  }

  .nav-link {
    justify-content: center;

  }

  .user-section {
    width: 100%;
    display: flex;
    justify-content: center;
  padding:0.5em;
    margin-top: 0.5em;
    border-top: 1px solid rgba(104, 64, 5, 0.2);
  }
}

  @media screen and (max-width: 576px) {
    .user-info span.d-none {
      max-width: 80px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  }
}

/* Prevent container overflows on very small screens */
@media screen and (max-width: 576px) {
  #top-Nav {
    padding: 0.5rem 1rem !important;
  }
  
  .navbar-brand .name {
    font-size: 1.25rem !important;
  }
}
</style>
<!-- Main Navbar -->
<nav id="top-Nav" class="navbar navbar-expand-xl navbar-dark shadow-sm">
  <div class="container">
    <a href="./" class="navbar-brand d-flex align-items-center">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Site Logo">
      <span class="name ml-2 "> <?= $_settings->info('short_name') ?> </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto fw-semibold">
        <li class="nav-item"><a href="./" class="nav-link <?= isset($page) && $page == 'home' ? 'active' : '' ?>">Home</a></li>
        <li class="nav-item"><a href="./?page=appointment" class="nav-link <?= isset($page) && $page == 'appointment' ? 'active' : '' ?>">Appointment</a></li>
        <li class="nav-item"><a href="./?page=services" class="nav-link <?= isset($page) && $page == 'services' ? 'active' : '' ?>">Services</a></li>
        <li class="nav-item"><a href="./?page=about" class="nav-link <?= isset($page) && $page == 'about' ? 'active' : '' ?>">About Us</a></li>
        <li class="nav-item"><a href="./?page=contact_us" class="nav-link <?= isset($page) && $page == 'contact_us' ? 'active' : '' ?>">Contacts</a></li>

        <?php if ($_settings->userdata('id') > 0 && $_settings->userdata('login_type') != 1): ?>
          <li class="nav-item"><a href="./?page=profile" class="nav-link <?= isset($page) && $page == 'profile' ? 'active' : '' ?>">Profile</a></li>
        <?php endif; ?>


      
 
      </ul>
      
     
      <div class="user-section ml-auto">
        <?php if ($_settings->userdata('id') > 0): ?>
          <div class="user-info">
            <span class="d-flex align-items-center">
              <img src="<?= validate_image($_settings->userdata('avatar')) ?>" alt="User Avatar" class="user-img mr-1">
              <span class="d-none  d-md-inline"><?= !empty($_settings->userdata('username')) ? $_settings->userdata('username') : $_settings->userdata('email') ?></span>
            </span>
                       <span class="nav-link"><i class="fa fa-phone"></i> <?= $_settings->info('contact') ?></span>
    
            <a href="./admin" class="btn text-dark"> <i class="fas fa-home"></i></a>
            <a href="<?= base_url . 'classes/Login.php?f=logout' ?>" class="text-danger"><i class="fa fa-power-off"></i></a>
          
          </div>
        <?php else: ?>
          <a href="./admin" class="btn btn-sm btn-primary">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>