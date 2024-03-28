<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" >

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

              
                @can('branch-view')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Branch</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        @can('branch-create')

                        <li><a href="{{url('/branch/create')}}">Add New</a></li>
                       
                        @endcan
                        @can('branch-list')
                        <li><a href="{{url('/branch')}}">List</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('user-view')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="typcn typcn-group"></i>
                        <span>Staff</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        @can('user-create')
                        <li><a href="{{url('/users/create')}}">Add New</a></li>
                        @endcan

                        @can('user-list')
                        <li><a href="{{url('/users')}}">List</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('parcel-view')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-boxes"></i>
                        <span>Parcels</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('parcel-create')
                        <li><a href="{{url('/parcels/create')}}">Add New</a></li>
                        @endcan

                        @can('parcel-list')
                        <li><a href="{{url('/parcels')}}">  <i class="fas fa-align-justify"></i> List </a></li>
                        @endcan
                        @role('delivary boy')
                        
                        <li>
                            <a href="{{url('/myParcel')}}" >
                                <i class="ion ion-ios-cube"></i>
                                <span>MyParcel</span>
                            </a>
                        </li>   
                        
                        @endrole

                    </ul>
                </li>
                @endcan
                
                @can('status-view')
                <li>
                    <a href="{{url('/tracking')}}" class="waves-effect">
                        <i class="mdi mdi-chart-line"></i>
                        <span>Status</span>
                    </a>
                </li>
                @endcan

                 @can('role-view')
                <li>
                    <a href="{{url('/roles')}}" class="waves-effect">
                        <i class="fas fa-user-shield"></i>
                        <span>Roles</span>
                    </a>
                </li>
                @endcan 

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->