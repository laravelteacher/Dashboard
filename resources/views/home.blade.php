<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SimpleAdminLTE 2 | Blank Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="SimpleAdminLTE/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/fonts/ionicons.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="SimpleAdminLTE/dist/css/skins/_all-skins.min.css">
  </head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg">Simple<b>Admin</b>LTE</span>
      </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>
      <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
              </a>
            <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                      <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
              <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
          <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
              </a>
            <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
              <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
          <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
              </a>
            <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                <li>
                  <a href="#">
                    <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                        </h3>
                      <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              <li class="footer">
              <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
          <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="SimpleAdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
            <ul class="dropdown-menu">
              <li class="user-header">
              <img src="SimpleAdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                  </p>
                </li>
              <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                    </div>
                  <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                    </div>
                  <div class="col-xs-4 text-center">
                  <a href="#">Friends
                    </div>
                  </div>
                </li>
                <!-- name -->
              <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                <div class="pull-right">
                  <a href="{{ url('logou') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Sign out</a>
                    <form id="frm-logout" action="{{ url('logou') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
      <div class="pull-left image">
        <img src="SimpleAdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
        <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
          </div>
        </div>
      <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
              </div>
        </form>
      <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
        <li class="treeview">
   <a href="#">
     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
     <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
     </span>
   </a>
   <ul class="treeview-menu">
     <li><a href="{{ url('test') }}"  onclick="event.preventDefault(); document.getElementById('frm-test').submit();">Test</a>
      <!-- i used form for each page we need form  -->
      <form id="frm-test" action="{{ url('test') }}" method="POST" class="d-none">
       @csrf
      </form>
      </li>
     <li><a href="{{ url('test2') }}"  onclick="event.preventDefault(); document.getElementById('frm-test2').submit();">test2</a>
      <form id="frm-test2" action="{{ url('test2') }}" method="POST" class="d-none">
         @csrf
      </form>
     </li>
   </ul>
</li>
        <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
            <a href="#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
              <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                  <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>
    <!-- content -->
  <div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
       <main class="py-4">
         @yield('content')
       </main>
    </section>
    </div>
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b><a href="http://www.fb.com/softsed">Softsed-SimpleAdminLTE V 1.0</a></b> 
      </div>
    <strong> <a href="http://almsaeedstudio.com">Almsaeed Studio V 2.3.11</a></strong> 
    </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
              <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>
              <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
              <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                <p>nora@example.com</p>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>
              <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
                </h4>
              <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
                </h4>
              <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
                </h4>
              <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
          <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
                </h4>
              <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
              </label>
            <p>
              Some information about this general settings option
              </p>
            </div>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
              </label>

            <p>
              Other sets of options are available
              </p>
            </div>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
              </label>

            <p>
              Allow the user to show his name in blog posts
              </p>
            </div>
          <h3 class="control-sidebar-heading">Chat Settings</h3>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
              </label>
            </div>
          <div class="form-group">
          <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
          </form>
        </div>
      
      </div>
    </aside>
       <div class="control-sidebar-bg"></div>
  </div>
<script src="SimpleAdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="SimpleAdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="SimpleAdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="SimpleAdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="SimpleAdminLTE/dist/js/app.min.js"></script>
<script src="SimpleAdminLTE/dist/js/demo.js"></script>
</body>
</html>