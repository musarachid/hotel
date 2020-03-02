    <?php 

    $r_id=$_POST['r_id'];

                                            $sql5="SELECT * from rooms where room_id='$r_id' ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $r_id=$row5['room_id'];
                                                $h_id=$row5['hotel_id'];
                                                $r_name=$row5['room_name'];
                                                $r_bed=$row5['room_beds'];
                                                $r_price=$row5['room_price'];
                                                $r_pers=$row5['room_capacity'];
                                                $r_serv=$row5['room_service'];
                                                $room_profile=$row5['room_pic_1'];
                                                $room_profile_1=$row5['room_pic_2'];
                                                $room_profile_2=$row5['room_pic_3'];
                                                $room_profile_3=$row5['room_pic_4'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                }

    ?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title"><?php echo $r_name ?></h2>
                        <h2 class="room-price">$<?php echo $r_price ?> <span>/ Per Night</span></h2>
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
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img style="width: 100%;height: 5l00px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile ?>" alt="<?php echo $r_name ?>" class="d-block w-100" >
                                    </div>
                                    <div class="carousel-item">
                                        <img style="width: 100%;height: 5l00px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_1 ?>" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img style="width: 100%;height: 5l00px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_2 ?>" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img style="width: 100%;height: 5l00px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_3 ?>" class="d-block w-100" alt="">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img style="width: 100%;height: 100px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile ?>" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                        <img style="width: 100%;height: 100px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_1 ?>" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img style="width: 100%;height: 100px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_2 ?>" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img style="width: 100%;height: 100px;" src="../hotels/rooms_data/<?php echo $r_name ?>/<?php echo $room_profile_3 ?>" class="d-block w-100" alt="">
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Size: <span>350-425sqf</span></h6>
                            <h6>Capacity: <span>Max persion <?php echo $r_pers ?></span></h6>
                            <h6>Bed: <span><?php echo $r_bed ?></span></h6>
                            <h6>Services: <span><?php echo $r_serv ?> ...</span></h6>
                        </div>

                        <p>If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go.</p>

                        <ul>
                            <li><i class="fa fa-check"></i> Mauris molestie lectus in irdiet auctor.</li>
                            <li><i class="fa fa-check"></i> Dictum purus at blandit molestie.</li>
                            <li><i class="fa fa-check"></i> Neque non fermentum suscipit.</li>
                            <li><i class="fa fa-check"></i> Donec id dui ac massa malesuada.</li>
                            <li><i class="fa fa-check"></i> In sit amet sapien quis orci maximus.</li>
                            <li><i class="fa fa-check"></i> Vestibulum rutrum diam vel eros tristique.</li>
                        </ul>

                        <p>Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.</p>
                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img src="../img/core-img/icon1.png" alt=""> Air Conditioning</li>
                            <li><img src="../img/core-img/icon2.png" alt=""> Free drinks</li>
                            <li><img src="../img/core-img/icon3.png" alt=""> Restaurant quality</li>
                            <li><img src="../img/core-img/icon4.png" alt=""> Cable TV</li>
                            <li><img src="../img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                            <li><img src="../img/core-img/icon6.png" alt=""> Service 24/24</li>
                        </ul>
                    </div>

                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>
                        <?php
                            $sql5="SELECT * from reviews where room_id='$r_id' ";
                                $result5=$conn->query($sql5);

                                while ($row5 = $result5->fetch_assoc()) {
                                $account_name=$row5['client'];
                                $review=$row5['message'];
                                $rate=$row5['rating'];
                                $day=$row5['date'];

                                if ($rate == 1) {
                                    echo "<i class='fa fa-star'></i>" ;
                                } else {
                                    # code...
                                }
                                
                        ?>
                        <!-- Single Review Area -->
                        <div class="single-room-review-area d-flex align-items-center">
                            <div class="reviwer-thumbnail">
                                <img src="../img/bg-img/53.jpg" alt="">
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating d-flex align-items-center justify-content-between">
                                    <div class="reviwer-title">
                                        <span><?php echo $day ?></span>
                                        <h6><?php echo $account_name ?></h6>
                                    </div>
                                    <div class="reviwer-rating">
                                                            <?php 

                                                                if ($rate == 1) {
                                                                    echo "<i class='fa fa-star'></i>";
                                                                } else if ($rate == 2) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                } else if ($rate == 3) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($rate == 4) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($rate == 5) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($rate == 6) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($rate == 7) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else{
                                                                    echo "<i class='fa fa-star-half'></i>";
                                                                }      
                                                            ?>
                                    </div>
                                </div>
                                <p><?php echo $review ?></p>
                            </div>
                        </div>
                        <?php
                            }
                        ?>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <h3 for="checkInDate">Reserve This Rooom</h3>
                    <div class="hotel-reservation--area mb-100">
                        <form action="index.php?reserve" method="post">
                            <div class="form-group mb-30">
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input style="display: none;" type="text" name="r_id" id="r_id" value="<?php echo $r_id ?>">

                                            <input style="display: none;" type="text" name="hotel" id="hotel" value="<?php echo $h_id ?>">

                                            <input style="display: none;" type="text" name="room_data" id="room_data" value="<?php echo $r_name ?>">

                                            <input style="display: none;" type="text" name="room_amount" id="room_amount" value="<?php echo $r_price ?>">
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
                <div class="col-12 col-lg-12">
                    <div class="roberto-contact-form mb-100">
                        <h3 for="checkInDate">Leave a Review</h3>
                        <form action="index.php?review" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div style="display: none;">
                                       <input type="text" name="room_id" id="room_id" value="<?php echo $r_id ?>">
                                       <input type="text" name="client" id="client" value="<?php echo $username ?>"> 
                                    </div>
                                    
                                    <select class="form-control mb-30" name="rating" id="rating" >
                                        <option value="0">--- Rate this Room ---</option>
                                        <option value="1">1Star</option>
                                        <option value="2">2 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="5">5 Stars</option>
                                        <option value="6">6 Stars</option>
                                    </select>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="rev_message" id="rev_message" class="form-control mb-30" placeholder="Your Review Message"></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-10">Send Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->