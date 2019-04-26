<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{ HTML::style('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ HTML::style('admin/bower_components/font-awesome/css/font-awesome.min.css') }}
    <!-- Ionicons -->
    {{ HTML::style('admin/bower_components/Ionicons/css/ionicons.min.css') }}
    <!-- Theme style -->
    {{ HTML::style('admin/dist/css/AdminLTE.min.css') }}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
            {{ HTML::style('admin/dist/css/skins/_all-skins.min.css') }}
            <!-- Morris chart -->
            {{ HTML::style('admin/bower_components/morris.js/morris.css') }}
            {{ HTML::style('admin/bower_components/sweet-alert/sweetalert2.min.css') }}
            {{ HTML::style('admin/bower_components/contextmanu/dist/jquery.contextMenu.css')}}
            <!-- jQuery 3 -->
            {{ HTML::script('admin/bower_components/jquery/dist/jquery.min.js') }}
            <!-- jQuery UI 1.11.4 -->
            {{ HTML::script('admin/bower_components/jquery-ui/jquery-ui.min.js') }}
            {{ HTML::script('admin/bower_components/contextmanu/src/jquery.contextMenu.js') }}
            {{ HTML::script('admin/bower_components/contextmanu/dist/jquery.ui.position.min.js') }}
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 3.3.7 -->
            {{ HTML::script('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    {{ HTML::style('admin/fonts/fonts.css') }}
    {{ HTML::style('admin/bower_components/sweet-alert/sweetalert2.all.min.js') }}
    <style>
        /*right click*/
        .context-menu ul{ 
            z-index: 1000;
            position: absolute;
            overflow: hidden;
            border: 1px solid #CCC;
            white-space: nowrap;
            font-family: sans-serif;
            background: #FFF;
            color: #333;
            border-radius: 5px;
            padding: 0;
        }
        /* Each of the items in the list */
        .context-menu ul li {
            padding: 8px 12px;
            cursor: pointer;
            list-style-type: none;
        }
        .context-menu ul li:hover {
            background-color: #DEF;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>DJ</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>JPDJ</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">Harshwardhan Sharma</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                    <p>
                                        Harshwardhan Sharma
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                        <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div> -->
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Harshwardhan Sharma</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">main Navigation</li>
                        <li><a href="superadmin"><i class="fa fa-dashboard"></i> <span>dashboard</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Category</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL('admin/category-tree-view') }}"><i class="fa fa-circle-o"></i> Category List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Product</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-circle-o"></i> Add Product</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Product List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            @yield('content')
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> All rights reserved.
                </footer>
                <!-- /.control-sidebar -->
                <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
                <div class="control-sidebar-bg"></div>
            <!-- <div class="context-menu" id="context-menu" style="display:none;position:absolute;z-index:99">
                <ul>
                  <li><a href="#"><i class="fa fa-eye"></i> View</a></li>       
                  <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>       
                  <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>       
                  <li><a href="#"><i class="fa fa-share fa-fw"></i> Move</a></li>       
                  <li><a href="#"><i class="fa fa-files-o"></i> Copy</a></li>       
                </ul>
            </div> -->
        </div>
        <!-- Morris.js charts -->
        {{ HTML::script('admin/bower_components/raphael/raphael.min.js') }}
        {{ HTML::script('admin/bower_components/morris.js/morris.min.js') }}
        <!-- Sparkline -->
        {{ HTML::script('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}
        <!-- jQuery Knob Chart -->
        {{ HTML::script('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}
        <!-- Slimscroll -->
        {{ HTML::script('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}
        <!-- FastClick -->
        {{ HTML::script('admin/bower_components/fastclick/lib/fastclick.js') }}
        <!-- AdminLTE App -->
        {{ HTML::script('admin/dist/js/adminlte.min.js') }}
        <script>
            // Trigger action when the contexmenu is about to be shown
            $(document).bind("contextmenu", function (event) {
                //console.log(event.which);
                if(event.which == 3){
                  // Avoid the real one
                  event.preventDefault();
                  
                  var menu = $(".context-menu");
                  
                  //get x and y values of the click event
                  var pageX = event.pageX;
                  var pageY = event.pageY;
                  
                  //position menu div near mouse cliked area
                  menu.css({top: pageY , left: pageX});
                  
                  //position menu div near mouse cliked area
                  menu.css({top: pageY , left: pageX});
                  var mwidth = menu.width();
                  var mheight = menu.height();
                  var screenWidth = $(window).width();
                  var screenHeight = $(window).height();
                  //if window is scrolled
                  var scrTop = $(window).scrollTop();
                  //if the menu is close to right edge of the window
                  if(pageX+mwidth > screenWidth){
                      menu.css({left:pageX-mwidth});
                  }
                  //if the menu is close to bottom edge of the window
                  if(pageY+mheight > screenHeight+scrTop){
                      menu.css({top:pageY-mheight});
                  }
                  //finally show the menu
                  menu.finish().toggle(100);
              }
          });
            // If the document is clicked somewhere
            $(document).bind("mousedown", function (e) {
                // If the clicked element is not the menu
                if (!$(e.target).parents(".context-menu").length > 0) {
                    // Hide it
                    $(".context-menu").hide(100);
                }
            });
        </script>
    </body>
    </html>