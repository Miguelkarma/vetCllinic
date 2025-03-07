<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    
      }
        .user-img {
            position: absolute;
            height: 27px;
            width: 27px;
            object-fit: cover;
            left: -7%;
            top: -12%;
        }
        .btn-rounded {
            border-radius: 50px;
        }
          .nav-link {
            color: rgb(112, 64, 1) !important;

            border-radius: 1em;
        }
        .navbar-nav .nav-link.active {
            color: rgb(112, 64, 1) !important;
            background: rgba(112, 64, 1, 0.5) !important;
            border-radius: 1em;
        }
        .navbar-brand {
            background: linear-gradient(to bottom, rgb(100, 76, 22), rgba(180, 82, 2, 0.66));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            
        }
        .box {
            width: 40px;
            float: left;
            transition: .5s linear;
            position: relative;
            display: block;
            overflow: hidden;
            text-align: center;
            background: transparent;
            text-transform: uppercase;
            font-weight: 900;
        }
        .box i {
            font-size: 1.5rem;
            color: black;
        }
        #login-nav {
            position: fixed !important;
            top: 0 !important;
            z-index: 1037;
            padding: 0.3em 2.5em !important;
            background: linear-gradient(to right, #FFD194, #D1913C);
        }
        #top-Nav {
   
            background: linear-gradient(to right, #FFD194, #D1913C);
        }
        .navbar-toggler {
            border: none;
            outline: none;
        }
        #login-nav .d-flex {
  flex-wrap: nowrap !important;
}
.brand-image{
  height: 50px; width: 50px
}

.bi {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Creates an outline effect */
    font-size: 1.5rem; /* Adjust the icon size */
    color: white; /* Set icon color */
}
.fa {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Creates an outline effect */
    font-size: 1.5rem; /* Adjust the icon size */
    color: white; /* Set icon color */
}


@media (max-width: 576){
  #login-nav .d-flex {
     flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
  }

  #login-nav span,
  #login-nav button {
    font-size: 14px; 
    white-space: nowrap;
  }

  #login-nav img {
    height: 22px; 
    width: 22px;
  }
   .navbar-nav{
    flex-direction: row;
    align-items: center;
    justify-content: center;

}
}
        
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="top-Nav">
    <div class="container">
        <a href="./" class="navbar-brand fw-bold">
            <img src="<?= validate_image($_settings->info('logo')) ?>" alt="Site Logo" class="brand-image img-circle elevation-3" style="opacity: .8;">
            <span><?= $_settings->info('short_name') ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav fw-semibold mx-auto">
                <li class="nav-item">
                    <a href="./" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./?page=appointment" class="nav-link <?= isset($page) && $page =='appointment' ? "active" : "" ?>">Appointment</a>
                </li>
                <li class="nav-item">
                    <a href="./?page=services" class="nav-link <?= isset($page) && $page =='services' ? "active" : "" ?>">Our Services</a>
                </li>
                <li class="nav-item">
                    <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? "active" : "" ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="./?page=contact_us" class="nav-link <?= isset($page) && $page =='contact_us' ? "active" : "" ?>">Contact Us</a>
                </li>
                <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type' != 1)): ?>
                <li class="nav-item">
                    <a href="./?page=profile" class="nav-link <?= isset($page) && $page =='profile' ? "active" : "" ?>">Profile</a>
                </li>
                <?php endif; ?>
            </ul>

            <!-- User Menu (Aligned to the Right) -->
            <ul class="navbar-nav ms-auto d-flex align-items-start ">
              
    <li class="nav-item d-flex align-items-center me-3">
        <span class="me-2 fw-semibold" style="color:#704001"><?= !empty($_settings->userdata('username')) ? $_settings->userdata('username') : $_settings->userdata('email') ?></span>
        <img src="<?= validate_image($_settings->userdata('avatar')) ?>" alt="User Avatar" class="rounded-circle" style="height: 40px; width: 40px;">
   
        <a href="./admin" class="nav-link ms-2"><i class="bi bi-house-door" style="color:#000; font-size: 1.5rem;"></i></a>
        <a href="<?= base_url.($_settings->userdata('login_type') == 1 ? 'classes/Login.php?f=logout' : 'classes/Login.php?f=client_logout') ?>" class="nav-link">
            <i class="fa fa-power-off text-danger ms-2" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

        </div>
    </div>
</nav>

</body>
</html> 