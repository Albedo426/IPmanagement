<!DOCTYPE html>
<html lang="en">
<?php  ob_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<script type="text/javascript">
var counter = 1;
var limit = 3;
function addInput(){
   
  
}
var count=0;
function addInput(sayi){
    if(sayi!=""){
        if(sayi!=null){
      count++;
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "User IP  " + (sayi + count) + " <br><input  class='form-control' type='text' name='myInputs[]'>";
          document.getElementById("IPadd").appendChild(newdiv);
        }
        else{

          var newdiv = document.createElement('div');
          newdiv.innerHTML = "User IP  " + (counter + 1) + " <br><input  class='form-control' type='text' name='myInputs[]'>";
          document.getElementById("IPadd").appendChild(newdiv);
          counter++; 
        }
    }
       
  
}
</script>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part" style="width:140px">
                    <!-- Logo -->
                   <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="logo1.jpg" alt="home" class="dark-logo" width="33px" /><!--This is light logo text--><img src="logo1.jpg" width="120px"  alt="home" class="light-logo" />
                     </span> </a>

                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">User
                        </b><span class="caret"></span> </a>
                      
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                    <ul class="nav" id="side-menu">
                   
                    <li> <a href="index.php" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a>
                        <ul class="nav nav-second-level">
                      
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">IP Add<span class="fa arrow"></span><span class="label label-rouded label-warning pull-right">30</span></span></a>
                               <ul class="nav nav-second-level">
                            <li> <a href="useradd.php"><span class="hide-menu">IP Add </span></a> </li>
                          
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>