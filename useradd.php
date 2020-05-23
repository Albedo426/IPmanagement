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
                  
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">IP add</h3>
                            <form class="form-horizontal" action="" method="get">
                                <div class="form-group">
                                    <label class="col-md-12">User Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="UserName" > </div>
                                </div>
                          
                                  <div class="form-group">
                                    <label class="col-md-12">User IP Add</label>
                                    <div class="col-md-12">
                                        <div id="dynamicInput"> 
                                             <div class="col-md-6" id="IPadd">
                                              User IP <input type="text" name="myInputs[]" class="form-control"> </div>
                                            
                                            </div>
                                            <div style="padding-top: 18px">
                                            <span onclick="addInput();"  class="circle circle-sm bg-success di"> <i class="ti-plus"></i></span> <span> IP Add</span></div>
                                         </div>
                                    </div>
                                     <button type="Submit" class="btn waves-effect waves-light btn-info">Add</button>        
                                </div>
                                  
                            </form>
                        </div>
                    </div>
                    <?php 
                            if(isset($_GET['UserName'])||isset( $_GET["myInputs"]) ){
                                if($_GET['UserName']!=""|| $_GET["myInputs"]!=""){
                                    $ad=$_GET['UserName'];
                                    $ip=$_GET['UserIP'];
                                     $myInputs = $_GET["myInputs"];
                                        $deneme="";
                                         $j=0;
                                            foreach ($myInputs as $eachInput) {
                                               if($eachInput!=""){

                                                 $deneme= $deneme.$eachInput . " , ";
                                                  $j++;
                                                  }
                                            }
                                          
                                    include 'baglan.php';
                                    $query = $db->prepare("INSERT INTO users SET UserName=?,UserIP=?");
                                            $insert = $query->execute(array(
                                                 "$ad", "$deneme"
                                            ));
                                            if ( $insert ){
                                                $last_id = $db->lastInsertId();
                                                print "insert işlemi başarılı!";
                                            }
                                }

                            } 
                    ?>
                 
                </div>
                <!-- /.row -->
                <!-- .row -->
          
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
