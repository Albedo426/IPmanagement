<?php  include 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                 
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
              
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                       
                          
                            <div style="width: 50%" >
                            <table class="table table-striped table-bordered" id="editable-datatable">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>IP</th>
                                        <th>Managment</th>
                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php     
                                    
                                        include 'baglan.php';
                                        $query = $db->query("SELECT * FROM users  ORDER BY  ID DESC", PDO::FETCH_ASSOC);
                                        if ( $query->rowCount() ){
                                             foreach( $query as $row ){
                                                ?>
                                                         <tr id="1" class="gradeX">
                                                            <th><label name="isim"> <?php print $row['UserName']; ?></label></th>
                                                            <th><label name="ip"> <?php print $row['UserIP']; ?> </label> </th>
                                                            <th> <a href="index.php?ID=<?php echo $row['ID']; ?>"> <button type="button"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button></a>
                                                            <a href="edit.php?ID=<?php echo $row['ID'];?>"> <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button></a> </th> 

                                                        </tr>
                                                     <input style="visibility: hidden;" type="text" name="id" value="<?php print $row['ID']; ?>">   
                                                 
                                                <?php
                                             }
                                        }

                                     ?>
                           
                                   <?php
                                        if(isset($_GET['ID'])){
                                            if($_GET['ID']!=""){
                                                $query = $db->prepare("DELETE FROM users WHERE ID = :id");
                                               $delete = $query->execute(array(
                                                   'id' => $_GET['ID']
                                                )); 
                                             header('Location: http://localhost/IPmanagement/index.php');  
                                            }
                                        }
                                      ?>
                                </tbody>
                              
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <!-- /.row -->
                <!-- .row -->
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
   <?php  include 'footer.php'; ?>