<div class="container-fluid">
    <div class="row">      
        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Complete Tours Profile</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b><?php echo $username ?></b> Complete your profile</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                        <form action="hotels_data/complete_profile_data.php"  method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="input-group">
                                                        <img class="align-self-center mr-3" src="hotels_profile_data/avatar-06.jpg" id="blah" alt="Card image cap" width="200px" height="230px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="account_id" name="account_id" type="text" class="form-control cc-cvc" value="<?php echo $account_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Tour Name</label>
                                                    <div class="input-group">
                                                        <input id="h_name" name="h_name" type="text" class="form-control cc-cvc" value="" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Country</label>
                                                    <div class="input-group">
                                                        <input id="h_country" name="h_country" type="text" class="form-control cc-cvc" value="" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">City</label>
                                                    <div class="input-group">
                                                        <input id="h_city" name="h_city" type="text" class="form-control cc-cvc" value="" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Tour Standard</label>
                                                    <div class="input-group">
                                                        <!-- <input id="h_stand" name="h_stand" type="text" class="form-control cc-cvc" value="" data-val="true"> -->
                                                        <select name="h_stand" id="h_stand" class="form-control-sm form-control">
                                                        <option value="0">Please select Standard</option>
                                                        <option value="1">1 Star</option>
                                                        <option value="2">2 Stars</option>
                                                        <option value="3">3 Stars</option>
                                                        <option value="4">4 Stars</option>
                                                        <option value="5">5 Stars</option>
                                                    </select>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Manager Names</label>
                                                    <div class="input-group">
                                                        <input id="h_manager" name="h_manager" type="text" class="form-control cc-cvc" value="" data-val="true">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Changes</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>             
    </div>
    <!-- <?php include "footer.php"; ?> -->
</div>
                                            <script>

                                                 function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(200)
                                                        .height(230);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                            </script>