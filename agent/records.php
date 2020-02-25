                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">My Records</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Activity Avatar</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Country</th>
                                                <th>Standard</th>
                                                <th>E-mail</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php

                                                $sql5="SELECT hotel_tour.hotel_id,hotel_tour.hotel_name,hotel_tour.profile,hotel_tour.standard,hotel_tour.role,hotel_tour.email,hotel_tour.origin,agent_activity.id,agent_activity.hotel_id,agent_activity.date
                                                    
                                                    FROM hotel_tour,agent_activity
                                                    
                                                    WHERE hotel_tour.hotel_id=agent_activity.hotel_id AND agent_activity.id='$account_id' ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $h_account_id=$row5['hotel_id'];
                                                $h_name=$row5['hotel_name'];
                                                $hotel_tour=$row5['role'];
                                                $stars=$row5['standard'];
                                                $h_mail=$row5['email'];
                                                $h_country=$row5['origin'];
                                                $h_picture=$row5['profile'];
                                                $appro_date=$row5['date'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                if (empty($profile_pic)) {
                                                    $fileName = "agent_data/avatar-06.jpg";
                                                } else if($hotel_tour == 'hotel') {
                                                    $fileName = "../hotels/hotels_profile_data/$h_picture";
                                                }else{
                                                    $fileName = "../tours/hotels_profile_data/$h_picture";
                                                }

                                                ?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="<?php echo $fileName ?>" alt="<?php echo $h_name ?>" />
                                                </td>
                                                <td><?php echo $h_name ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $hotel_tour ?></span>
                                                </td>
                                                <td class="desc"><?php echo $h_country ?></td>
                                                <td class="desc">
                                                    <?php 

                                                                if ($stars == 1) {
                                                                    echo "<i class='fa fa-star'></i>";
                                                                } else if ($stars == 2) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                } else if ($stars == 3) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($stars == 4) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($stars == 5) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($stars == 6) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else if ($stars == 7) {
                                                                    echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
                                                                }else{
                                                                    echo "<i class='fa fa-star-half'></i>";
                                                                }      
                                                            ?>
                                                </td>
                                                <td><?php echo $h_mail ?></td>
                                                <td><?php echo $appro_date ?></td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php $a++; }  ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <?php include "footer.php"; ?>
                    </div>