<style>
  
    .fc-event-title-container{
      background-color: #eacda3!important;
        text-align:center;
        color:#5C4033 !important;
       
         
    }
    .fc-event-title.fc-sticky{
        font-size:2em;
      
    }
    .card-body{
    background-color:hsl(29, 30.20%, 57.80%);
    }

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
.header{
  background-color:hsl(29, 27.00%, 52.70%)!important;
padding:1em!important;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;

}
.title{
  color:#4b2a1b; 
}

</style>
<?php 
$appointments = $conn->query("SELECT * FROM `appointment_list` where `status` in (0,1) and date(schedule) >= '".date("Y-m-d")."' ");
$appoinment_arr = [];
while($row = $appointments->fetch_assoc()){
    if(!isset($appoinment_arr[$row['schedule']])) $appoinment_arr[$row['schedule']] = 0;
    $appoinment_arr[$row['schedule']] += 1;
}
?>
<div class="content py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class=" rounded-0 shadow">
                <div class="header">  
                        <h4 class="title fs-2">Appointment Availablity</h4>
                </div>
                <div class="card-body">
                   <div id="appointmentCalendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var calendar;
    var appointment = $.parseJSON('<?= json_encode($appoinment_arr) ?>') || {};
    start_loader();
    $(function(){
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var Calendar = FullCalendar.Calendar;

        calendar = new Calendar(document.getElementById('appointmentCalendar'), {
            headerToolbar: {
                left  : false,
                center: 'title',
            },
            selectable: true,
            initialView: 'dayGridMonth',
            events: [
                {
                    daysOfWeek: [0,1,2,3,4,5,6], // these recurrent events move separately
                    title:'<?= $_settings->info('max_appointment') ?>',
                    allDay: true,
                    }
            ],
            eventClick: function(info) {
                   console.log(info.el)
                   if($(info.el).find('.fc-event-title.fc-sticky').text() > 0)
                    uni_modal("Set an Appointment","add_appointment.php?schedule="+info.event.startStr,"mid-large")
                },
            validRange:{
                start: moment(date).format("YYYY-MM-DD"),
            },
            eventDidMount:function(info){
                // console.log(appointment)
                if(!!appointment[info.event.startStr]){
                    var available = parseInt(info.event.title) - parseInt(appointment[info.event.startStr]);
                     $(info.el).find('.fc-event-title.fc-sticky').text(available)
                }
                end_loader()
            },
            editable  : true
        });

    calendar.render();
    })
</script>