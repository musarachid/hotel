<?php
include "../../config/connection.php";
?>
 
<?php
$staff=$_POST['staff'];

$sql="SELECT * from agent where id='$staff'";
$result=$conn->query($sql);

$a=1; 

while ($row = $result->fetch_assoc()) {
    $staff=$row['id'];
    $name=$row['username'];
    $pass=$row['password'];
    $email=$row['email'];
    $tel=$row['contact'];

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
                                    <div class="card-header">Update <strong><?php echo $name; ?></strong> Agent Data</div>
                                    <div class="card-body">
                                        <form  action="#/" onsubmit="update_agent_data();return false;" method="post" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input id="staff" name="staff"  value="<?php echo $staff; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Username</label>
                                                <input id="name" name="name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $name; ?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                                <input id="email" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $email; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Contact</label>
                                                <input id="tel" name="tel" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $tel; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Password</label>
                                                <input id="pass" name="pass" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $pass; ?>">
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update Agent Data</span> 
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