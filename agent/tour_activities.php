                <div class="container-fluid">
                    <div id="hotel_invitation_complete_message" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                             <br>
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin2">
                        
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Tour Invitation Management</h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Tour Avatar</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Standard</th>
                                                <th>E-mail</th>
                                                <th>Contact</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                               <?php

                                                $sql5="SELECT * from hotel_tour WHERE role='tours' and hotel_approv=0 ";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $h_account_id=$row5['hotel_id'];
                                                $h_name=$row5['hotel_name'];
                                                $hotel_tour=$row5['role'];
                                                $stars=$row5['standard'];
                                                $h_mail=$row5['email'];
                                                $h_contact=$row5['contact'];
                                                $h_picture=$row5['profile'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                if (empty($profile_pic)) {
                                                    $fileName = "agent_data/avatar-06.jpg";
                                                } else {
                                                    $fileName = "$h_picture";
                                                }

                                                ?>                                      
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>" style="display: none;" ><?php echo $h_account_id ?></td>
                                                <td><?php echo $a ?></td>
                                                <td>
                                                   <img style="height:60px;width: 120px;float: left;" src="../tours/hotels_profile_data/<?php echo $fileName; ?>" />
                                                </td>
                                                <td><?php echo $h_picture ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $hotel_tour ?></span>
                                                </td>
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
                                                <td>
                                                    <span class="status--process"><?php echo $h_contact ?></span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <form action="#/" onsubmit="accept_tour_to_work();return false;" method="post" >
                                                            
                                                            <div style="display: none;">
                                                                <input type="text" value="<?php echo $account_id ?>" id="agent_data" name="agent_data">
                                                                <input type="text" value="<?php echo $h_account_id ?>" id="hotel_data" name="hotel_data">
                                                            </div>

                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Accept Hotel" type="submit" >
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                        </form>
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
                                        