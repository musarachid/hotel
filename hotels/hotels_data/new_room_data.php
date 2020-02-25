
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
    include "../../config/connection.php";

    
    $account_id = $_POST['account_id'];
    $r_name = $_POST['r_name'];
    $r_type = $_POST['r_type'];
    $r_cap = $_POST['r_cap'];
    $r_price = $_POST['r_price'];
    $r_serv = $_POST['r_serv'];

    // photo detais

    // $profile_1=$_FILES['profile_1'];
    // $profile_2=$_FILES['profile_2'];
    // $profile_3=$_FILES['profile_3'];
    // $profile_4=$_FILES['profile_4'];
    
    

if(empty($_FILES['profile_1']['name'])||empty($_FILES['profile_2']['name'])||empty($_FILES['profile_3']['name'])||empty($_FILES['profile_4']['name'])||empty($r_name)||empty($account_id)||empty($r_type)||empty($r_cap)||empty($r_price)||empty($r_serv)) {

    ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Alert</span> You have not filled Room Details .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
            <span aria-hidden="true">&times;</span>
            </button>
            <br>
        </div>
    <?php  
}
else
{

    if (!file_exists("../rooms_data/".$r_name)) {

        mkdir('../rooms_data/'.$r_name, 0777, true); // folder creation 

            // checking for the pics
        if (($_FILES["profile_1"]["type"] == "image/gif") || ($_FILES["profile_1"]["type"] == "image/jpeg") || ($_FILES["profile_1"]["type"] == "image/pjpeg") || ($_FILES["profile_1"]["type"] == "image/bmp") || ($_FILES["profile_1"]["type"] == "image/png") && ($_FILES["profile_1"]["size"] < 20000000)) 
        {
            $filename1=$_FILES["profile_1"]["name"];
            if ($_FILES["profile_1"]["error"] > 0){
                echo "Return Code: " . $_FILES["profile_1"]["error"] . "<br />";
            } 
            else 
            {
                if (file_exists("../rooms_data/$r_name/".$filename1)) 
                {
                    echo $_FILES["profile_1"]["name"] . " already exists. ";
                } 
                else 
                {
                    move_uploaded_file($_FILES["profile_1"]["tmp_name"],"../rooms_data/$r_name/".$filename1);
                    
                }
            }
        }
        // second pic
        if (($_FILES["profile_2"]["type"] == "image/gif") || ($_FILES["profile_2"]["type"] == "image/jpeg") || ($_FILES["profile_2"]["type"] == "image/pjpeg") || ($_FILES["profile_2"]["type"] == "image/bmp") || ($_FILES["profile_2"]["type"] == "image/png") && ($_FILES["profile_2"]["size"] < 20000000)) 
        {
            $filename2="right".$_FILES["profile_2"]["name"];
            if ($_FILES["profile_2"]["error"] > 0){
                echo "Return Code: " . $_FILES["profile_2"]["error"] . "<br />";
            } 
            else 
            {
                if (file_exists("../rooms_data/$r_name/".$filename2)) 
                {
                    echo $_FILES["profile_2"]["name"] . " already exists. ";
                } 
                else 
                {
                    move_uploaded_file($_FILES["profile_2"]["tmp_name"],"../rooms_data/$r_name/".$filename2);
                    
                }
            }
        }
        // third pic
        if (($_FILES["profile_3"]["type"] == "image/gif") || ($_FILES["profile_3"]["type"] == "image/jpeg") || ($_FILES["profile_3"]["type"] == "image/pjpeg") || ($_FILES["profile_3"]["type"] == "image/bmp") || ($_FILES["profile_3"]["type"] == "image/png") && ($_FILES["profile_3"]["size"] < 20000000)) 
        {
            $filename3=$_FILES["profile_3"]["name"];
            if ($_FILES["profile_3"]["error"] > 0){
                echo "Return Code: " . $_FILES["profile_3"]["error"] . "<br />";
            } 
            else 
            {
                if (file_exists("../rooms_data/$r_name/".$filename3)) 
                {
                    echo $_FILES["profile_3"]["name"] . " already exists. ";
                } 
                else 
                {
                    move_uploaded_file($_FILES["profile_3"]["tmp_name"],"../rooms_data/$r_name/".$filename3);
                    
                }
            }
        }
        // fourth pic
        if (($_FILES["profile_4"]["type"] == "image/gif") || ($_FILES["profile_4"]["type"] == "image/jpeg") || ($_FILES["profile_4"]["type"] == "image/pjpeg") || ($_FILES["profile_4"]["type"] == "image/bmp") || ($_FILES["profile_4"]["type"] == "image/png") && ($_FILES["profile_4"]["size"] < 20000000)) 
        {
            $filename4=$_FILES["profile_4"]["name"];
            if ($_FILES["profile_4"]["error"] > 0){
                echo "Return Code: " . $_FILES["profile_4"]["error"] . "<br />";
            } 
            else 
            {
                if (file_exists("../rooms_data/$r_name/".$filename4)) 
                {
                    echo $_FILES["profile_4"]["name"] . " already exists. ";
                } 
                else 
                {
                    move_uploaded_file($_FILES["profile_4"]["tmp_name"],"../rooms_data/$r_name/".$filename4);
                    
                }
            }
        }
         // trying to insert into the fuckin table in the data base

        $sql="INSERT INTO rooms( room_name, hotel_id, room_beds, room_capacity, room_price, room_status, room_service, room_pic_1, room_pic_2,room_pic_3,room_pic_4)
            VALUES('$r_name','$account_id','$r_type','$r_cap','$r_price','available','$r_serv','$filename1','$filename2','$filename3','$filename4')";
        if ($conn->query($sql)===TRUE)
        {
            ?>
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Done</span>
                    You have Succefully created New Room <?php echo "$r_name"; ?> .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
                <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                <span class="badge badge-pill badge-danger">Error</span>
                Something went wrong. Please try again and try to rename the picture you was uploading. And try to refresh the page please.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <?php
        }

    }
    else
    {
        # code...
        
    }
}
                        
 ?>



 

</body>
</html>