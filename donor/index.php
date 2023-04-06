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
                    <h2>SafeWest Donor</h2>
                </div>
            </div>

            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome Jhon Doe!</strong>
                    </div>
                    

                </div>
            </div>

            <div class="row text-center pad-top">

            </div>

            <div class="row text-center pad-top">

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="viewprofile.php">
                            <i class="fa fa-user fa-5x"></i>
                            <h4>View Profile</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="updateprofile.php">
                            <i class="fa fa-gear fa-5x"></i>
                            <h4>Update Profile</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="viewdonations.php">
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>View Donations</h4>
                        </a>
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