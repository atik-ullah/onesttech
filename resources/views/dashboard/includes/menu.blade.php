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
                
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span>Online Admission</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Student Info</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Student Category</a></li>
                        <li><a href="#">Promote Students</a></li>
                        <li><a href="#">Disabled Students</a></li>
                        <li><a href="#">Guardian</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Academic</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Class</a></li>
                        <li><a href="#">Section</a></li>
                        <li><a href="#">Shift</a></li>
                        <li><a href="#">Class Setup</a></li>
                        <li><a href="#">Subject</a></li>
                        <li><a href="#">Subject Assign</a></li>
                        <li><a href="#">Time Schedule</a></li>
                        <li><a href="#">Class Room</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Routines</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Class Routine</a></li>
                        <li><a href="#">Exam Routine</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Attendance</a></li>
                        <li><a href="#">Attendance Report</a></li>
                    </ul>
                </li>


                {{-- @if(auth()->user()->role == 2) --}}

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>Fees</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">Group</a></li>
                            <li><a href="#">Type</a></li>
                            <li><a href="#">Master</a></li>
                            <li><a href="#">Assign</a></li>
                            <li><a href="#">Collect</a></li>
                        </ul>
                    </li>
                {{-- @endif --}}
                {{-- @if(auth()->user()->role == 2 || auth()->user()->role == 1) --}}
                    
                
                <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>Examination</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="#">Type</a></li>
                            <li><a href="#">Marks Grade</a></li>
                            <li><a href="#">Exam Assign</a></li>
                            <li><a href="#">Mark Register</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                {{-- @endif --}}
                {{-- @if(auth()->user()->role == 2 || auth()->user()->role == 1 || auth()->user()->role == 0) --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Library</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Book Category</a></li>
                        <li><a href="#">Book</a></li>
                        <li><a href="#">Member Category</a></li>
                        <li><a href="#">Member</a></li>
                        <li><a href="#">Issue Book</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Transactions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Income & Expense Head</a></li>
                        <li><a href="#">Income</a></li>
                        <li><a href="#">Expense</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Report</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Marksheet</a></li>
                        <li><a href="#">Merit List</a></li>
                        <li><a href="#">Due Fees</a></li>
                        <li><a href="#">Fees Collection</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Class Routine</a></li>
                        <li><a href="#">Exam Routine</a></li>
                        <li><a href="#">Attendance</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Language</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Staff Manage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Subscription</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Contact Message</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Website Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Enroll</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Settings</span>
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
