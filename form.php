<?php require_once('connection.php'); ?>


<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Votes Management Service</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">

                        <h3>Votes Management Service</h3>

                        <form action="votes.php" method="POST" class="pt-3">
                            <div class="f norm-group">
                                <label for="fname">Enter Contestant Code</label>
                                <input type="number" name="code" class="form-control form-control-lg" id="contestant_code" placeholder="Code" required>
                            </div>
                            <div class="f norm-group">
                                <label for="fname">Enter number of Votes</label>
                                <input type="number" name="votes" class="form-control form-control-lg" id="contestant_votes" placeholder="Votes" required>
                            </div>
                            <div class="mt-3">

                                <input type="submit" class="btn btn-lg btn-primary pull-right" value="Submit" name="submit">

                            </div>

                        </form>
                          <a href="results.php">Click Here To Read Results</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>