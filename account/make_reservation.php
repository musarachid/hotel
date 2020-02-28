    <?php 

    $room_no=$_POST['r_id'];
    $hotel_no=$_POST['hotel'];
    $room_name=$_POST['room_data'];
    $room_amount=$_POST['room_amount'];

    $sql5="SELECT * from hotel_tour where hotel_id='$hotel_no' ";
        $result5=$conn->query($sql5);
        while ($row5 = $result5->fetch_assoc()) {
            $h_mail=$row5['email'];
        }

    ?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Your Reservation Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Reservation Details </h4>
                        <div class="col-lg-12 ">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="index.php?reserve_data" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate"><strong>Room Details</strong></label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <label for="checkInDate">Room Name : <?php echo $room_name ?></label>
                                        </div>
                                        <div class="col-6">
                                            <label for="checkInDate">Price / Night : <?php echo $room_amount ?> $ </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-30">
                                <label for="checkInDate">Date</label>
                                <div class="input-text" >
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="date" class="input-small form-control" name="checkInDate" id="checkInDate" placeholder="Check In">
                                        </div>
                                        <div class="col-6">
                                            <input type="date" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30" style="display: none;">
                                <label for="checkInDate">client details</label>
                                <div class="input-text" >
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="text" class="input-small form-control" name="client" id="client" value="<?php echo $client_id ?>">

                                            <input type="text" class="input-small form-control" name="c_mail" id="c_mail" value="<?php echo $email ?>">

                                            <input type="text" class="input-small form-control" name="h_mail" id="h_mail" value="<?php echo $h_mail ?>">

                                            <input type="text" class="input-small form-control" name="r_name" id="r_name" value="<?php echo $room_name ?>">

                                            <input type="text" class="input-small form-control" name="room_no" id="room_no" value="<?php echo $room_no ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="checkInDate">Full Names</label>
                                <div class="input-text" >
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="text" class="input-small form-control" name="f_names" id="f_names" placeholder="Fill Your Full Names">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="checkInDate">Your Credit Card Number</label>
                                <div class="input-text" >
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="number" class="input-small form-control" name="card_data" id="card_data" placeholder="Fill Your Credit / Master Card Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Reserve Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                        <ul>
                            <li><img src="../img/core-img/icon1.png" alt=""> Air Conditioning</li>
                            <li><img src="../img/core-img/icon2.png" alt=""> Free drinks</li>
                            <li><img src="../img/core-img/icon3.png" alt=""> Restaurant quality</li>
                            <li><img src="../img/core-img/icon4.png" alt=""> Cable TV</li>
                            <li><img src="../img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                            <li><img src="../img/core-img/icon6.png" alt=""> Service 24/24</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
    