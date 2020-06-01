<?php

require_once('db.php');

$query  = "SELECT User.email, food.Name, food.Price, food_order.number, food_order.cost, Payment_Method ";
$query .= "FROM food_order, food, Payment_Method, User ";
$query .= "WHERE food_order.name_id = User.uid AND food_order.food_id = food.id AND Payment_Method.Payment_Method_no = food_order.payment_id";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Chengdu Bus Company</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" id="card-header1" >Food Order Lists</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>Username</th>
                      <th>Food Name</th>
                      <th>Price per Unit</th>
                      <th>Order Number</th>
                      <th>Total Cost</th>
                      <th>Payment Method</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Username</th>
                      <th>Food Name</th>
                      <th>Price per Unit</th>
                      <th>Order Number</th>
                      <th>Total Cost</th>
                      <th>Payment Method</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php

            while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Price"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
                echo "<td>" . $row["cost"] . "</td>";
                echo "<td>" . $row["Payment_Method"] . "</td>";
                echo "</tr>";
                
            }
?>
                  </tbody>
                </table>
                  <h6 class="m-0 font-weight-bold text-primary" id="card-header1"><a href="manager.php">Go Back!!</a></h6>
                </div>
              </div>
            </div>

          </div>
<!-- /.container-fluid -->

</div>
  <!-- End of Main Content -->

      <!-- End of Footer -->
  <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/datatables-demo.js"></script>
  <!-- Page add scripts -->
  <script></script>

</body>

</html>