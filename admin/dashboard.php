<?php session_start(); ?>

<?php
  include '../config/config.php';
  class controller extends Connection{ 
      public function managecontroller(){ 



?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?>
 <style>
  .fc-day-header {
    padding-bottom: 15px !important;
    
}
.custom-day-header {
    background-color: #ff6a00 !important;
    border: 5px solid #000 !important;
    padding-top: 5px !important;
    padding-bottom: 15px !important; /* Adjust the spacing as needed */
}

.custom-day-header::after {
    content: ''; /* Add a pseudo-element for the white bottom border */
    display: block;
    width: 100%;
    height: 5px;
    background-color: white;
    position: absolute;
    bottom: 0;
}

td.fc-day-top {
    padding-right: 20px;
}

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number{
  margin-right: 10px;
}

td.fc-event-container{
  padding: 20px !important;
}
.fc-content {
    padding: 10px !important;
    text-align: center;
}


 </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php include 'navbar.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow-y: scroll;height: 100vh;padding-bottom: 50px;background-color: white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Products</li-->
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-lg-12 col-12">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div id="calendar"></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>

     
  </div>

</div>
<!-- ./wrapper -->

<?php include 'footer2.php'; ?>
<?php include 'modal/dashboardModal.php'; ?>

<script>


    $(document).on('click', '#admin_profile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var user_id = $(this).data('user_id');
    var firstname = $(this).data('firstname');
    var email = $(this).data('email');
    var password = $(this).data('password');


    $('#user_id').val(user_id)
    $('#firstname').val(firstname)
    $('#email').val(email)
    $('#password').val(password)


    getRow(id);
  });
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;
  
	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<script>
$(document).ready(function() {
  display_events();
}); //end document.ready block

function display_events() {
  var events = new Array();
$.ajax({
    url: '../dynamic_event_calendar/display_event.php',  
    dataType: 'json',
    success: function (response) {
         
    var result=response.data;
    $.each(result, function (i, item) {
      events.push({
            event_id: result[i].event_id,
            request_id: result[i].request_id,
            users_id: result[i].users_id,
            title: result[i].title,
            start: result[i].start,
            end: result[i].end,
            color: result[i].color,
            url: result[i].url
        });   
    })
  var calendar = $('#calendar').fullCalendar({
     header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
  },
  dayNamesShort: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],

      defaultView: 'month',
     timeZone: 'local',
      editable: true,
        selectable: true,
    selectHelper: true,
        select: function(start, end) {
        //alert(start);
        //alert(end);
        $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
        $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
        // $('#event_entry_modal').modal('show');
      },
        events: events,
         dayRender: function (date, cell) {
  
            borderColor = 'white';
      
        // Apply the border color
        cell.css('border-color', borderColor);
        cell.css('outline', '5px solid #fff');
        cell.css('border', '5px solid #fff');
        cell.css('background-color', '#ecf0f5');

    },
  viewRender: function(view, element) {
    // Customize the top week header styling here
    var dayHeaders = $('.fc-day-header');
    dayHeaders.each(function(index) {
      $(this).addClass('custom-day-header');
        $(this).css('background-color', '#ff6a00');
        $(this).css('outline', '5px solid #fff');

        $(this).css('padding-top', '5px');
        $(this).css('padding-bottom', '5px');

    });
},


      eventRender: function(event, element, view) { 
            element.bind('click', function() {
          $('#delte_modal').modal('show');
          $('#event_id').val(event.event_id)
          $('#see_request_id').val(event.request_id)
          
        });
      }
    }); //end fullCalendar block  
    },//end success block
    error: function (xhr, status) {
    alert(response.msg);
    }
  });//end ajax block 
}

$('.seedetails').click(function(){
  request_id= $('#see_request_id').val()
  location.href = "details.php?id="+request_id
})

</script>

</body>
</html>

<?php } }

  $controller = new controller();
  $controller->managecontroller();
            
?>