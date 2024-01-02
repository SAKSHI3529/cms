<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{url('/dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                


                <li class="menu-title">Components</li>

              

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Branch</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{url('/branch/create')}}">Add New</a></li>
                        <li><a href="{{url('/branch')}}">List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="typcn typcn-group"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{url('/users')}}">Add New</a></li>
                        <li><a href="{{url('/users/index')}}">List</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-boxes"></i>
                        <span>Parcels</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('/parcels/create')}}">Add New</a></li>
                        <li><a href="{{url('/parcels')}}">List</a></li>
                       

                    </ul>
                </li>
                

                <li>
                    <a href="{{url('/tracking')}}" class="waves-effect">
                        <i class="mdi mdi-chart-line"></i>
                        <span>Status</span>
                    </a>
                </li>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->