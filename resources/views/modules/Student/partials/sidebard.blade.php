<div class="sidebar">
    <div class="profile">
        <img src="{{ asset('images/student/boy.png') }}" height="100px" width="100px" alt="Profile Picture">
        <p>Christopher Jonota</p>
        <p>23-1855</p>
    </div>
    <div class="divider">
        
    </div>
    <div class="sidebar-navigations">
        <div class="home">
            <div>
                <img src="{{ asset('images/student/navigation/home_selected.svg')}}" width=24 alt="home logo">
                <p>Home</p>
            </div>
        </div>
        <div class="academic"> 
            <div>
                <img src="{{ asset('images/student/navigation/academic_unselected.svg')}}" width=24 alt="home logo">
                <p>Academic</p>
            </div>
            <div class="dropdown-arrow">
                <img src="{{ asset('images/student/navigation/arrow_down.svg')}}" width=24 alt="home logo">
            </div>
        </div>
        <div class="academic-dropdown">
            <p>My Courses / Subjects</p>
            <p>Class Schedule</p>
            <p>Grades / Report Card</p>
            <p>Attendance Record</p>
            <p>Resources / Materials</p>
        </div>
        <div class="academic"> 
            <div>
                <img src="{{ asset('images/student/navigation/communication_unselected.svg')}}" width=24 alt="home logo">
                <p>Communication</p>
            </div>
            <div class="dropdown-arrow">
                <img src="{{ asset('images/student/navigation/arrow_down.svg')}}" width=24 alt="home logo">
            </div>
        </div>
        <div class="academic-dropdown">
            <p>Announcements / Notices</p>
            <p>Contact Directory</p>
        </div>
        <div class="transaction"> 
            <div>
                <img src="{{ asset('images/student/navigation/communication_unselected.svg')}}" width=24 alt="home logo">
                <p>Student Profile</p>
            </div>
            <div class="dropdown-arrow">
                <img src="{{ asset('images/student/navigation/arrow_down.svg')}}" width=24 alt="home logo">
            </div>
        </div>
        <div class="academic-dropdown">
            <p>Announcements / Notices</p>
            <p>Contact Directory</p>
        </div>
        <div class="transaction">
            <div>
                <img src="{{ asset('images/student/navigation/student_services_unselected.svg')}}" width=24 alt="home logo">
                <p>Student Services</p>
            </div>
            <div class="dropdown-arrow">
                <img src="{{ asset('images/student/navigation/arrow_down.svg')}}" width=24 alt="home logo">
            </div>   
        </div>
        <div class="academic-dropdown">
            <a href="">Downloads / Forms</a>
            <a href="{{ route('student.billing') }}">Billing & Payments</a>
            <p>Events & Activities</p>
            <p>Help Desk / Support</p>
        </div>
        <div class="settings">
            <div>
                <img src="{{ asset('images/student/navigation/settings_unselected.svg')}}" width=24 alt="home logo">
                <a href="{{ route('student.billing') }}">Settings</a>
            </div>
            
        </div>
        <div class="logout-button">
            <div>
                <img src="{{ asset('images/student/navigation/logout_unselected.svg')}}" width=24 alt="home logo"> 
                <p>Log Out</p>
            </div>
            

            <!--Hidden form for logout-->
            <form id="logout-form" action="{{ route('student.logout') }}" method="post">
                @csrf
            </form>
        </div>
    </div>
</div>