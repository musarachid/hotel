                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Rooms Management</h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Avatar</th>
                                                <th>Room Name</th>
                                                <th>Room Type</th>
                                                <th>Room Price</th>
                                                <th>Room Status</th>
                                                <th>Status Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from rooms where hotel_id='$account_id'";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $r_id=$row5['room_id'];
                                                $r_name=$row5['room_name'];
                                                $r_bed=$row5['room_beds'];
                                                $r_price=$row5['room_price'];
                                                $r_stat=$row5['room_status'];
                                                $room_profile=$row5['room_pic_1'];

                                                $stat_roll="available";

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $r_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="rooms_data/<?php echo $r_name ?>/<?php echo $room_profile ?>" alt="<?php echo $r_name ?>" />
                                                </td>
                                                <td><?php echo $r_name ?></td>
                                                <td><?php echo $r_bed ?></td>
                                                <td><?php echo $r_price ?></td>
                                                <td><?php echo $r_stat ?><td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php
                                                        if ($r_stat == "available") {
                                                            ?>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Occupied" onclick="change_room_status_data('<?php echo $id1 ?>');" >
                                                                    <i class="zmdi zmdi-block"></i>
                                                                </button>
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Available" onclick="update_room_status_data('<?php echo $id1 ?>');" >
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <?php
                                                        }
                                                        
                                                    ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php include "footer.php"; ?>
                    </div>
                    <script>

                                            function read_1(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#room_photo_1')
                                                        .attr('src', e.target.result)
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                                }
                                            }

                                            function read_2(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#room_photo_2')
                                                        .attr('src', e.target.result)
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                                }
                                            }

                                            function read_3(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#room_photo_3')
                                                        .attr('src', e.target.result)
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                                }
                                            }

                                            function read_4(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#room_photo_4')
                                                        .attr('src', e.target.result)
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                        </script>
                                        