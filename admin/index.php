<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="style.css" />
</head>

<body>



    <?php include 'header.php' ?>

    <?php include 'sidebar.php' ?>

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SafeWest ADMIN DASHBOARD</h2>
                </div>
            </div>

            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                    </div>

                </div>
            </div>

            <div class="row text-center pad-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="checkdata.php">
                            <i class="fa fa-circle-o-notch fa-5x"></i>
                            <h4>Check Data</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="manageblood.php">
                            <i class="fa fa-list fa-5x"></i>
                            <h4>Manage Blood</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="bloodavailabilty.php">
                            <i class="fa fa-check fa-5x"></i>
                            <h4>Blood Availability</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="managerequest.php">
                            <i class="fa fa-envelope-o  fa-5x"></i>
                            <h4>Manage Requests</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="viewallrequests.php">
                            <i class="fa fa-comments fa-5x"></i>
                            <h4>View All Requests</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="manageuser.php">
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Manage User</h4>
                        </a>
                    </div>


                </div>
            </div>

            <div class="row text-center pad-top">



            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="managecamp.php">
                        <i class="fa fa-hospital-o fa-5x"></i>
                        <h4>Manage Camp</h4>
                    </a>
                </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="managebloodgroup.php">
                        <i class="fa  fa-tint fa-5x"></i>
                        <h4>Manage Blood Group </h4>
                    </a>
                </div>


            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="viewdonors.php">
                        <i class="fa fa-group fa-5x"></i>
                        <h4>View Donors</h4>
                    </a>
                </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="viewcamp.php">
                        <i class="fa fa-home fa-5x"></i>
                        <h4>View Camps</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="viewalldonations.php">
                        <i class="fa fa-book fa-5x"></i>
                        <h4>View All Donations</h4>
                    </a>
                </div>
            </div>
        </div>



    </div>

    </div>

    </div>
    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
            </div>
        </div>
    </div>



    <script src="assets/js/jquery-1.10.2.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/custom.js"></script>


</body>

</html>