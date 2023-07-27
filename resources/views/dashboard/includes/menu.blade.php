<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- @if(auth()->user()->role == 2) --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>Fees</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">Group</a></li>
                            <li><a href="#">Manage Teacher</a></li>
                        </ul>
                    </li>
                {{-- @endif --}}
                {{-- @if(auth()->user()->role == 2 || auth()->user()->role == 1) --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>Courses</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">Add Course</a></li>
                            <li><a href="#">Manage Course</a></li>
                        </ul>
                    </li>
                {{-- @endif --}}
                {{-- @if(auth()->user()->role == 2 || auth()->user()->role == 1 || auth()->user()->role == 0) --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Enroll</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>
                    {{-- @endif --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
