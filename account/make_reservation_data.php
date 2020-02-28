
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

    $checkInDate = $_POST['checkInDate'];
    $checkOutDate = $_POST['checkOutDate'];
    $client = $_POST['client'];
    $h_mail = $_POST['h_mail'];
    $c_mail = $_POST['c_mail'];
    $f_names = $_POST['f_names'];
    $card_data = $_POST['card_data'];
    $r_name = $_POST['r_name'];
    $room_no = $_POST['room_no'];
    

if(empty($checkInDate)||empty($checkOutDate)||empty($client)||empty($h_mail)||empty($c_mail)||empty($f_names)||empty($card_data)) {

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
    $chop = substr("$r_name",0,3);
    $u_name = substr("$f_names",0,3);
    $gen= rand(10,1000);
    $tik="-";

    $sql="INSERT INTO reservation (  `res_data`, `client_id`,`room_id`,`check_in`,`check_out`,`client_names`,`card_no`,`client_mail`)
                    VALUE('$chop$tik$u_name$tik$gen','$client','$room_no','$checkInDate','$checkOutDate','$f_names','$card_data','$c_mail')";

        $sql1="UPDATE rooms set room_status='occupied' where room_id='$room_no'";

                if ($conn->query($sql)&&$conn->query($sql1)===TRUE) 
                {
                    ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <a href="index.php?reservations"><span class="badge badge-pill badge-success">Done</span> You have succeffuly Reserved Your Room .
                        <button type="button" class="close"  aria-label="Close" style=""
                        >
                        <span aria-hidden="true">&times;</span>
                        </button></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <?php

                    // Mail sending

                    // $to = 'maryjane@email.com';
                    // $subject = 'Marriage Proposal';
                    // $message = 'Hi Jane, will you marry me?'; 
                    // $from = 'peterparker@email.com';
                     
                    // // Sending email
                    // if(mail($to, $subject, $message)){
                    //     echo 'Your mail has been sent successfully.';
                    // } else{
                    //     echo 'Unable to send email. Please try again.';
                    // }

                }
                else
                {
                        ?>
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Error</span>
                            Sorry Something went wrong. Please try again .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <?php
                }
}
                        
 ?>



 

</body>
</html>