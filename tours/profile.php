<style type="text/css">
    .input-group p{
        padding: 5px;
        font-size: 17px;
    }
</style>

<div class="container-fluid">
    
    <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
    <div id="loader_agenda_data_post"></div>
    <div class="row" id="loader_agenda_data">
        <div class="col-lg-12">
            <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"> Tour Profile Card</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <?php
                                                            if (empty($profile_pic)) {
                                                                $fileName = "avatar-06.jpg";
                                                            } else {
                                                                $fileName = "$profile_pic";
                                                            }
                                                            
                                                        ?>
                                                        <img class="align-self-center  mr-3" src="hotels_profile_data/<?php echo $fileName ?>" alt="<?php echo $username ?>" style="height: 260px;" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <p><strong>Tour Name</strong>  <?php echo $name ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Country</strong>  <?php echo $country ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Location</strong>  <?php echo $city ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Tour Star (s)</strong> 
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
                                                        </p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Tour Manager</strong>  <?php echo $boss ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Email</strong> <?php echo $email ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Contact</strong> <?php echo $tel ?></p>
                                                    </div>
                                                    
                                                    <a href="index.php?update_data">
                                                        <div class="au-message__item-time">
                                                            <p>Edit Tour Profile</p>
                                                        </div>
                                                    </a>


                                                </div>
                                            </div>
                                            <div>
                                    </div>
                                </div>
        </div>
    </div>