
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../asset/css/normalize.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="../asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap-select.less"> --> 
    <link rel="stylesheet" href="../asset/css/style.css"> 

    <script src="../asset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/plugins.js"></script>
    <script src="../asset/js/main.js"></script>

  
    <script src="../js/princeop.js"></script>

    <!--Flot Chart-->

    <script src="../asset/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../asset/js/lib/flot-chart/jquery.flot.spline.js"></script>

    <script src="../asset/js/widgets.js"></script>
 
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>


<body>

<?php
    include "../config/connection.php";

    $res_id = $_POST['reserv_id'];
    $r_data = $_POST['room_data'];
    

if(empty($res_id)||empty($r_data)) {

    ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <a href="index.php?room"><span class="badge badge-pill badge-danger">Alert</span> You have not filled all fields .
                        
                        <button type="button" class="close"  style="" >
                        <span aria-hidden="true">&times;</span>
                        </button></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  
}
else
{

    $sql=" DELETE FROM reservation WHERE res_id='$res_id' ";

        $sql1="UPDATE rooms set room_status='available' where room_id='$r_data'";

                if ($conn->query($sql)&&$conn->query($sql1)===TRUE) 
                {
                    ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <a href="index.php?reservations"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Canceled Your Room Reservation .
                        <button type="button" class="close" aria-label="Close" style="" onclick="location.reload();">
                        <span aria-hidden="true">&times;</span>
                        </button></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <?php

                }
                else
                {
                        ?>
        <div class="roberto-rooms-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Error</span>
                            Sorry Something went wrong. Please try again .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <?php
                }
}
                        
 ?>



 

</body>
</html>