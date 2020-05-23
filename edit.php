<?php  include 'header.php'; ?>
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    
                    <!-- /.col-lg-12 -->
                </div>
                <?php 
                   
                    $ID=$_GET['ID'] ;
                if(isset($_GET['ID'])){
                    if($_GET['ID']=""){
                           header('Location: index.php');
                    }
                    else{
                             try {
                            include 'baglan.php';
                             $sql = $db->prepare("SELECT * FROM users WHERE ID= ?");
                              $sql->execute(array($ID));
                              $row=$sql->fetch(PDO::FETCH_ASSOC);
                                $ad=$row['UserName'];
                                $IP=$row['UserIP'];
                            } catch ( PDOException $e ){
                                echo "hata";
                            }
                    }
                }


                 ?>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Ip edit</h3>
                            
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">User Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="UserName" value="<?php echo $ad ;?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" >User IP</label>
                                    <div class="col-md-12">
                                 <?php   

                                            $j=0;
                                                $deger = explode(" , ",$IP);
                                                    foreach ($deger as $eachInput) {
                                                        if($eachInput!=""){

                                                       
                                                          $j++;
                                                          }
                                                    }
                                            
                                                  for ($i=0; $i < $j ; $i++) { 
                                                      ?>
                                                     
                                                                
                                                                  <input type="text" style="margin-bottom: 5px"  name="myInputs[]" class="form-control" value="<?php  echo  $deger[$i]; ?>" > 
                                                        
                                                <?php } ?>
                                              <div id="dynamicInput"> 
                                             <div class="col-md-6" id="IPadd">
                                              User IP <input type="text" name="myInputs[]" class="form-control"> </div>
                                            
                                            </div>
                                            <div style="padding-top: 18px">
                                            <span onclick="addInput();"  class="circle circle-sm bg-success di"> <i class="ti-plus"></i></span> <span> IP Add</span></div>
                                         </div>
                                
                                       </div>
                                </div>
                                <button type="Submit" class="btn waves-effect waves-light btn-info">edit</button>           
                            </form>
                        </div>
                    </div>
                    <?php 
                            if(isset($_POST['UserName'])||isset($_POST['myInputs[]']) ){
                                if($_POST['UserName']!=""||$_POST['myInputs[]']!=""){
                                    $ad=$_POST['UserName'];
                                   
                                     $myInputs = $_POST["myInputs"];
                                                                $denemee="";
                                                                $fiyat2="";
                                                                    foreach ($myInputs as $eachInput) {
                                                                        if($eachInput!=""){

                                                                         $denemee= $denemee.$eachInput . " , ";
                                                                          }
                                                                    }
                                                                 
                                    include 'baglan.php';
                                      $query = $db->prepare("UPDATE users SET UserName = :Name ,UserIP = :SurName WHERE ID= :ID");
                                        $update = $query->execute(array(
                                             "ID" => $ID,
                                             "Name" => $_POST['UserName'],
                                             "SurName" => $denemee,
                                                                                
                                        ));
                                        if ( $update ){
                                             print "güncelleme başarılı!";
                                        }
                                        else{
                                        echo "güncellenmedi";
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