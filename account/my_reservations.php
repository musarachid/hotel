    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Your Reservation</h2>
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
                <div class="col-12 col-lg-12">
                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <div class="col-lg-12 ">
                    <!-- Hotel Reservation Area -->
                        <?php
                            $sql5=" SELECT reservation.res_id,reservation.res_data,reservation.res_date,reservation.check_in,reservation.check_out,reservation.client_names,hotel_tour.hotel_id,hotel_tour.hotel_name,hotel_tour.role,rooms.room_id,rooms.room_name,rooms.room_price
                                FROM reservation,hotel_tour,rooms
                                WHERE reservation.room_id=rooms.room_id AND rooms.hotel_id=hotel_tour.hotel_id AND reservation.client_id=$client_id ORDER BY reservation.res_id DESC ";
                                $result5=$conn->query($sql5);

                                    $a=1;

                                    while ($row5 = $result5->fetch_assoc()) {
                                    $reserv_id=$row5['res_id'];
                                    $room_data=$row5['room_id'];
                                    $reserv_no=$row5['res_data'];
                                    $check_in_date=$row5['check_in'];
                                    $check_out_date=$row5['check_out'];
                                    $cat_name=$row5['role'];
                                    $r_name=$row5['room_name'];
                                    $r_price=$row5['room_price'];

                                        $id1="Mine".$a;
                                        $id2="Mine1".$a;

                                        
                        ?>
                    <div class="card">
                      <div class="card-header">
                            <strong><?php echo $cat_name ?> Reservation</strong> 
                      </div>
                      <div class="card-body">
                        <p><strong>Reservation No </strong> : <?php echo $reserv_no ?></p>
                        <p><strong>Reservation Name </strong> : <?php echo $r_name ?></p>
                        <div class="row">
                            <div class="col-lg-4">
                                <p><strong>Check In Date</strong> : <?php echo $check_in_date ?> </p>
                            </div>
                            <div class="col-lg-4">
                                <p><strong>Check Out Date</strong> : <?php echo $check_out_date ?></p>
                            </div>
                            <div class="col-lg-4">
                                <form action="index.php?reservation_deny" method="post">
                                    <div style="display: none;">
                                        <input type="text" name="reserv_id" id="reserv_id" value="<?php echo $reserv_id ?>">
                                        <input type="text" name="room_data" id="room_data" value="<?php echo $room_data ?>">
                                    </div>
                                    <button type="submit" class="btn view-detail-btn">Cancel reservation</button >
                                </form>
                            </div>
                        </div>                      
                      </div>
                    </div>
                    <br>
                    <?php 
                      }
                      ?>
                    <!-- Hotel Reservation Area -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Rooms Area End -->
    