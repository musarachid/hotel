<?php
include "../../config/connection.php";
?>
 
<?php
$room_account_id=$_POST['room_account_id'];

$sql="SELECT * from rooms where room_id='$room_account_id'";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
    $r_name=$row['room_name'];
    $r_type=$row['room_beds'];
    $r_cap=$row['room_capacity'];
    $r_price=$row['room_price'];
    $r_serv=$row['room_service'];
    $profile_pic_1=$row['room_pic_1'];
    $profile_pic_2=$row['room_pic_2'];
    $profile_pic_3=$row['room_pic_3'];
    $profile_pic_4=$row['room_pic_4'];

  $id1="Mine".$a;
  $id2="Mine1".$a;

}

?>
 
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">Update <strong><?php echo $r_name; ?> Details</strong></div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="update_new_room_data();return false;"  method="post" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input id="account_id" name="account_id" type="text" class="form-control cc-cvc" value="<?php echo $room_account_id ?>" style="display: none;" >
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Room Name</label>
                                                        <input id="r_name" name="r_name" value="<?php echo $r_name; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >

                                                        <input id="r_a_name" name="r_a_name" value="<?php echo $r_name; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Room Bed Type</label>
                                                        <input id="r_type" name="r_type" value="<?php echo $r_type; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Room Capacity</label>
                                                        <input id="r_cap" name="r_cap" value="<?php echo $r_cap; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Room Price</label>
                                                        <input id="r_price" name="r_price" value="<?php echo $r_price; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Room Service</label>
                                                        <input id="r_serv" name="r_serv" value="<?php echo $r_serv; ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <!-- Image place -->

                                                     <div class="col-lg-4">
                                                        
                                                    </div>

                                                    <div class="row">

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="rooms_data/<?php echo $r_name ?>/<?php echo $profile_pic_1 ?>" id="room_photo_1" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_1" name="profile_1" onchange="read_1(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="rooms_data/<?php echo $r_name ?>/<?php echo $profile_pic_2 ?>" id="room_photo_2" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_2" name="profile_2" onchange="read_2(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="rooms_data/<?php echo $r_name ?>/<?php echo $profile_pic_3 ?>" id="room_photo_3" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_3" name="profile_3" onchange="read_3(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="rooms_data/<?php echo $r_name ?>/<?php echo $profile_pic_4 ?>" id="room_photo_4" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_4" name="profile_4" onchange="read_4(this);" />
                                                        </div>
                                                      </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update <?php echo $r_name; ?> Room</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>