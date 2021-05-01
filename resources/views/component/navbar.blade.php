<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="/"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        {{-- <li><a href="/karyawan"><i class="fa fa-book"></i> <span>Karyawan</span></a></li> --}}
        @if (Auth::user()->role == 1)
            <li><a href="/department"><i class="fa fa-book"></i> <span>Department</span></a></li>
            <li><a href="/position"><i class="fa fa-book"></i> <span>Position</span></a></li>
            <li><a href="/employee"><i class="fa fa-book"></i> <span>Employee</span></a></li>
            <li><a href="/inventory"><i class="fa fa-book"></i> <span>Inventory</span></a></li>
            <li><a href="/archive"><i class="fa fa-book"></i> <span>Archive</span></a></li>
            <li><a href="/visitor"><i class="fa fa-book"></i> <span>Visitor</span></a></li>
        @else
            <li><a href="/inventory"><i class="fa fa-book"></i> <span>Inventory</span></a></li>
            <li><a href="/archive"><i class="fa fa-book"></i> <span>Archive</span></a></li>
        @endif


    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
