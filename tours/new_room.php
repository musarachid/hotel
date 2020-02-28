

 
 <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                                    <div id="profile_complete_message">
                                        </div>

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Car Details</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_room_data();return false;"  method="post" novalidate="novalidate">
                                           
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input id="account_id" name="account_id" type="text" class="form-control cc-cvc" value="<?php echo $account_id ?>" style="display: none;" >
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Car Name</label>
                                                        <input id="r_name" name="r_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Car Bed Type</label>
                                                        <input id="r_type" name="r_type" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Car Capacity</label>
                                                        <input id="r_cap" name="r_cap" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Car Price</label>
                                                        <input id="r_price" name="r_price" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Car Service</label>
                                                        <input id="r_serv" name="r_serv" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>

                                                    <!-- Image place -->

                                                     <div class="col-lg-4">
                                                        
                                                    </div>

                                                    <div class="row">

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="hotels_profile_data/avatar-06.png" id="room_photo_1" alt="Card image cap" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_1" name="profile_1" onchange="read_1(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="hotels_profile_data/avatar-06.png" id="room_photo_2" alt="Card image cap" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_2" name="profile_2" onchange="read_2(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="hotels_profile_data/avatar-06.png" id="room_photo_3" alt="Card image cap" width="200px" height="230px">
                                                            <br><br>
                                                            <input type='file' id="profile_3" name="profile_3" onchange="read_3(this);" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-3">
                                                        <div class="input-group">
                                                            <img class="align-self-center mr-3" src="hotels_profile_data/avatar-06.png" id="room_photo_4" alt="Card image cap" width="200px" height="230px">
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
                                                    <span id="payment-button-amount">Save New Car</span>
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