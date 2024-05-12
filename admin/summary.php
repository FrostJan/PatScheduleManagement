<?php session_start(); ?>

<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 

?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php include 'navbar.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow-y: scroll;height: 100vh;padding-bottom: 50px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Summary Statistics
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Summary Statistics</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="card text-center">
                <h2>Approve</h2>
                <canvas id="approved" width="600" height="120"></canvas>
              </div>
              <br>
              <div class="card text-center">
                <h2>Declined</h2>
                <canvas id="declined" width="600" height="120"></canvas>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>
<?php include 'modal/deleteModal.php'; ?>
<?php include 'modal/dashboardModal.php'; ?>
<!-- Active Script -->
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
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
  })
</script>

<script>
  $('.delete').click(function(){
    $('#deleteModal').modal('show');
    delete_id = $(this).data('delete_id')
    $('#delete_id').val(delete_id)
  })

  $('.createevent').click(function(){
    $('#event_entry_modal').modal('show');
    request_id = $(this).data('request_id')
    users_id = $(this).data('users_id')

    $('#request_id').val(request_id)
    $('#users_id').val(users_id)
  })
</script>

<!-- Active Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


   <?php
    $sql = "SELECT COUNT(id) AS dep1 FROM request WHERE status = 'Declined' AND department = 'College of Arts and Sciences'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep1 = $row['dep1'];

    $sql = "SELECT COUNT(id) AS dep2 FROM request WHERE status = 'Declined' AND department = 'College of Business and Accountancy'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep2 = $row['dep2'];

    $sql = "SELECT COUNT(id) AS dep3 FROM request WHERE status = 'Declined' AND department = 'College of Computer Studies'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep3 = $row['dep3'];

    $sql = "SELECT COUNT(id) AS dep4 FROM request WHERE status = 'Declined' AND department = 'College of Criminology'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep4 = $row['dep4'];

    $sql = "SELECT COUNT(id) AS dep5 FROM request WHERE status = 'Declined' AND department = 'College of Education'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep5 = $row['dep5'];

    $sql = "SELECT COUNT(id) AS dep6 FROM request WHERE status = 'Declined' AND department = 'College of Engineering and Aviation'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep6 = $row['dep6'];

    $sql = "SELECT COUNT(id) AS dep7 FROM request WHERE status = 'Declined' AND department = 'College of International Hospitality Management'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep7 = $row['dep7'];

    $sql = "SELECT COUNT(id) AS dep8 FROM request WHERE status = 'Declined' AND department = 'College of Maritime'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep8 = $row['dep8'];

    $sql = "SELECT COUNT(id) AS dep9 FROM request WHERE status = 'Declined' AND department = 'Senior High School'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep9 = $row['dep9'];

    $sql = "SELECT COUNT(id) AS dep10 FROM request WHERE status = 'Declined' AND department = 'Basic Education'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep10 = $row['dep10'];
?>



<script>
  
let declined = document.getElementById('declined').getContext('2d');

var MonthlyChart = new Chart(declined, {

    type: 'bar',

    data: {

        labels: ['College of Arts and Sciences','College of Business and Accountancy','College of Computer Studies','College of Criminology','College of Education','College of Engineering and Aviation','College of International Hospitality Management','College of Maritime','Senior High School','Basic Education'],

        datasets: [
            {
                data: [<?php echo $dep1.",".$dep2.",".$dep3.",".$dep4.",".$dep5.",".$dep6.",".$dep7.",".$dep8.",".$dep9.",".$dep10; ?>],
            },


        ]

    },
    options: {
        plugins: {
            legend: false 
        },
    }
});



</script>






<?php
    $sql = "SELECT COUNT(id) AS dep1 FROM request WHERE status = 'Approved' AND department = 'College of Arts and Sciences'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep11 = $row['dep1'];

    $sql = "SELECT COUNT(id) AS dep2 FROM request WHERE status = 'Approved' AND department = 'College of Business and Accountancy'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep22 = $row['dep2'];

    $sql = "SELECT COUNT(id) AS dep3 FROM request WHERE status = 'Approved' AND department = 'College of Computer Studies'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep33 = $row['dep3'];

    $sql = "SELECT COUNT(id) AS dep4 FROM request WHERE status = 'Approved' AND department = 'College of Criminology'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep44 = $row['dep4'];

    $sql = "SELECT COUNT(id) AS dep5 FROM request WHERE status = 'Approved' AND department = 'College of Education'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep55 = $row['dep5'];

    $sql = "SELECT COUNT(id) AS dep6 FROM request WHERE status = 'Approved' AND department = 'College of Engineering and Aviation'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep66 = $row['dep6'];

    $sql = "SELECT COUNT(id) AS dep7 FROM request WHERE status = 'Approved' AND department = 'College of International Hospitality Management'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep77 = $row['dep7'];

    $sql = "SELECT COUNT(id) AS dep8 FROM request WHERE status = 'Approved' AND department = 'College of Maritime'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep88 = $row['dep8'];

    $sql = "SELECT COUNT(id) AS dep9 FROM request WHERE status = 'Approved' AND department = 'Senior High School'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep99 = $row['dep9'];

    $sql = "SELECT COUNT(id) AS dep10 FROM request WHERE status = 'Approved' AND department = 'Basic Education'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
    $dep1010 = $row['dep10'];
?>



<script>
  
let approved = document.getElementById('approved').getContext('2d');

var MonthlyChart = new Chart(approved, {

    type: 'bar',

    data: {

        labels: ['College of Arts and Sciences','College of Business and Accountancy','College of Computer Studies','College of Criminology','College of Education','College of Engineering and Aviation','College of International Hospitality Management','College of Maritime','Senior High School','Basic Education'],

        datasets: [
            {
                data: [<?php echo $dep11.",".$dep22.",".$dep33.",".$dep44.",".$dep55.",".$dep66.",".$dep77.",".$dep88.",".$dep99.",".$dep1010; ?>],
            },


        ]

    },
    options: {
        plugins: {
            legend: false 
        },
    }
});



</script>


</body>
</html>
<?php  } } $data = new data();  $data->managedata(); ?>