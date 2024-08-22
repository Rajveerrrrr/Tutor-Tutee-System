
<?php
  session_start();
  include 'connect.php';

  $query = "select * from parent_tutor_meet";
  $result1= mysqli_query($conn, $query);

  
  if(isset($_POST['submit']))
  {
   
    $st_name=$_POST['st_name'];
    $p_name=$_POST['p_name'];
    $d_t=$_POST['datetime']; 
    $remarks=$_POST['remark'];
    $SQL = "INSERT INTO parent_tutor_meet (meeting_id,student_name,parent_name ,date_time , remarks ) VALUES ('', ' $st_name','$p_name', ' $d_t' ,'$remarks')";
    $result = mysqli_query($conn,$SQL);
    
  $query = "select * from parent_tutor_meet";
  $result1 = mysqli_query($conn, $query);  
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


     <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div> 

      <!--logo start-->
      <a href="index.php" class="logo">
        <img class="JIETimage" elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/5fce63270356d927d7eecdbd/05cc8293-1285-4f97-a7c3-c4646d735f0b/JIET+Universe+Logo.png?format=1500w" alt="JIET Jodhpur " fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
      </a>
      <!--logo end-->
      

      <!-- <div class="nav search-row" id="top_menu">
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
              <button><i class="fa fa-search"></i></button>
            </form>
          </li>
        </ul>
      </div> -->

     <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu"> 

          <!-- task notificatoin start -->
           <li id="task_notificatoin_bar" class="dropdown">  
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!-- <i class="icon-task-l"></i> -->
                            <!-- <span class="badge bg-important">6</span> -->
                        </a> 
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div> 
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li> 
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!-- <i class="icon-envelope-l"></i> -->
                            <!-- <span class="badge bg-important">5</span> -->
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <!-- <i class="icon-bell-l"></i> -->
                            <!-- <span class="badge bg-important">7</span> -->
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <!-- <img alt="" src="img/avatar1_small.jpg"> -->
                            </span>
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.php"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.php"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <ul class="sub">
              <li><a class="" href="form_component.html">Form Elements</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="attendance.php" class="">
                          <!-- <i class="icon_desktop"></i> -->
                          <span>ATTENDANCE</span>
                          <!-- <span class="menu-arrow arrow_carrot-right"></span> -->
                      </a>
           
          </li>
          <li>
            <a class="" href="result.php">
                          <!-- <i class="icon_genius"></i> -->
                          <span>RESULT</span>
                      </a>
          </li>
          <li>
            <a class="" href="basic_info.php">
                          <!-- <i class="icon_genius"></i> -->
                          <span>BASIC INFORMATION</span>
                      </a>
          </li>
          <li>
            <a class="" href="tutor_tutee_meet.php">
                          <!-- <i class="icon_piechart"></i> -->
                          <span>TUTOR TUTEE MEET</span>

                      </a>

          </li>
          <li>
            <a class="" href="parentsmeet.php">
                          <!-- <i class="icon_piechart"></i> -->
                          <span>TUTOR PARENTS INFORMATION</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="skillEnhancement.php" class="" style="background-color: #1a2732;">
                          <!-- <i class="icon_table"></i> -->
                          <span>SKILLS ENHANCEMENT</span>
                          <!-- <span class="menu-arrow arrow_carrot-right"></span> -->
                      </a>
            <ul class="sub">
              <li><a class="" style="background-color: #1a2732;" href="basic_table.php">Basic Table</a></li>
            </ul>
          </li>

          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>PARENTS MEET</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Parents Meet</li>
            </ol>
          </div>
        </div>

        <button type="button" class="btn btn-default btn-lg" id="myBtn">ADD MEETING</button>
        <!--/.row-->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post">
                  <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span>Student Name</label>
                    <input type="text" class="form-control" id="usrname" name="st_name" placeholder="Student Name ">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Parent's Name</label>
                    <input type="text" class="form-control" id="psw" placeholder="Parent's Name" name="p_name">
                  </div>
                  <div class="form-group">
                  <label for="datetime">Select a date and time:</label><br>
                  <input type="datetime-local" id="datetime" name="datetime">
                </div>
                <div class="form-group">
                    <label for="Remarks">Remarks</label><br>
                    <textarea rows="10" cols="30" id="remarks" name="remark">
                    </textarea> 
                </div>
                 
                    <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span>submit</button>
                </form>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
                <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
                <!-- <p>Forgot <a href="#">Password?</a></p> -->
              <!-- </div> -->
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">

              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="fa-id-card"></i>Meeting_ID</th>
                    <th><i class="icon_profile"></i>Student Name</th>
                    <th><i class="fa fa-home"></i> Parent Name</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_mobile"></i> Remark</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <?php 
                      while($row = mysqli_fetch_assoc($result1))
                      {
                   ?>
                   <td><?php echo $row['meeting_id']; ?></td>
                   <td><?php echo $row['student_name']; ?></td>
                   <td><?php echo $row['parent_name']; ?></td>
                   <td><?php echo $row['date_time']; ?></td>
                   <td><?php echo $row['remarks']; ?></td>
                   <td>
                   <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                   </td>
                  </tr>
                  <?php
                      }
                  ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
         
        </div>
    </div>

        



       
       
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <!--custome script for all page-->
        <script src="js/scripts.js"></script>
        <script>
          $(document).ready(function(){
            $("#myBtn").click(function(){
              $("#myModal").modal();
            });
          });
        </script>
</body>

</html>
