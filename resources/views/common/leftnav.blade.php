<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-bar-chart"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('projects*') ? 'active' : '' }}">
                <a href="{{ route('newsletters.index') }}">
                    <i class="fa fa-send"></i> <span>Projects</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
