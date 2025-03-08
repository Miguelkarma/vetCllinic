<style>
   
body {
  height: 100%;
  margin: 0;
  display: flex;
  flex-direction: column;
}



    
#top-Nav .container {
  width: 100%;
  max-width: 1320px;
  padding: 0 15px;
}


#top-Nav .navbar-nav {
  width: auto;
}


.user-section {
  margin-left: auto;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}


#top-Nav .contact-info {
  white-space: nowrap;
}


#navbarCollapse {
  justify-content: space-between;
}


@media (min-width: 992px) {
  .navbar-nav {
    margin-right: 1rem;
  }
}


@media (max-width: 991px) {
  #top-Nav .container {
    padding: 0 10px;
  }
  
  #navbarCollapse {
    align-items: flex-start;
  }
  
  .user-section {
    width: 100%;
    justify-content: flex-start;
    margin-top: 10px;
  }
}
.card{

        background: #eacda3;
    background: -webkit-linear-gradient(to right, #d6ae7b, #eacda3);
    background: linear-gradient(to right, #d6ae7b, #eacda3);
    color:  color: #5C4033;
  }
}
</style>
<div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-5">
            <div class="card card-outline card-navy rounded-0 shadow ">
                <div class="card-header">
                    <h4 class="card-title">Contact</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <dt class="text-muted"><i class="fa fa-envelope"></i> Email</dt>
                        <dd class="pl-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted"><i class="fa fa-phone"></i> Contact #</dt>
                        <dd class="pl-4"><?= $_settings->info('contact') ?></dd>
                        <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Location</dt>
                        <dd class="pl-4"><?= $_settings->info('address') ?></dd>
                        <dt class="text-muted"><i class="fa fa-clock"></i> Daily Schedule</dt>
                        <dd class="pl-4"><?= $_settings->info('clinic_schedule') ?></dd>
                        <dt class="text-muted"><i class="fa fa-paw"></i> Maximum Daily Appointments</dt>
                        <dd class="pl-4"><?= $_settings->info('max_appointment') ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card rounded-0 card-outline card-navy shadow" >
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div>
                        <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>