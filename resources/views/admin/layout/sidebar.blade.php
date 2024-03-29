<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input style="border: 1px solid transparent;" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search"  class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center">MAIN NAVIGATION</li>
            {{--
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-arrow-right"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-arrow-right"></i> Dashboard v2</a></li>
                </ul>
            </li>
            --}}
            <li><a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Student Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{URL::to('student/create')}}"><i class="fa fa-arrow-right"></i> Add Student</a></li>
                    <li><a href="{{URL::to('student/viewall')}}"><i class="fa fa-arrow-right"></i> Students List</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> Students Upload</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> Students Chart</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i> <span>Classs Mangement</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-arrow-right"></i> Add Class</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> Class List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Subject Mangement</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-arrow-right"></i> Add Subject</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> Subject List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clipboard"></i> <span>Exam Mangement</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-arrow-right"></i> Add Exam</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> Exam List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-mortar-board"></i> <span>Result Mangement</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-arrow-right"></i> Add Single Mark</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-arrow-right"></i> Add Multi Mark</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> View Result</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-arrow-right"></i> View All Results</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>