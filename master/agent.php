                <div class="container-fluid">
                     <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                     <br>
                        
                        <div id="loader_general_admin"></div>

                      <div class="row" id="loader_general_admin1">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Agents List</h3>
                                <div class="table-data__tool">
                                    
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small" id="add_new_agent" >
                                            <i class="zmdi zmdi-plus"></i>New Agent</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="Table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>E-mail</th>
                                                <th>Contact</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                                <?php

                                                $sql5="SELECT * from agent";
                                                $result5=$conn->query($sql5);

                                                $a=1;

                                                while ($row5 = $result5->fetch_assoc()) {
                                                $staff=$row5['id'];
                                                $username=$row5['username'];
                                                $email=$row5['email'];
                                                $tel=$row5['contact'];

                                                $id1="Mine".$a;
                                                $id2="Mine1".$a;

                                                ?>                                        
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td id="<?php echo $id1; ?>"><?php echo $staff ?></td>
                                                <td><?php echo $username ?></td>
                                                <td><?php echo $email ?></td>
                                                <td><?php echo $tel ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit Agent" onclick="update_agent('<?php echo $id1 ?>');">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>

                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Agent" onclick="delete_agent_data('<?php echo $id1 ?>');" >
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        
                                                        
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            
                                        </tbody>
                                        <?php $a++; }  ?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <?php include "footer.php"; ?>
                    </div>