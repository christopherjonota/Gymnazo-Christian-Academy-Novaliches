<div class="sidebar">
    <div class="profile">
        <img src="{{ asset('images/student/boy.png') }}" alt="Profile Picture">
        <h2>Christopher Jonota</h2>
        <p>23-1855</p>
    </div>
    <div class="divider">
        
    </div>
    <div class="sidebar-navigations">
        <div class="home">
            <img src="{{ asset('images/student/navigation/home_selected.svg')}}" width=24 alt="home logo">
            <p>Home</p>
        </div>
        <div class="transaction"> 
            <div>
                <img src="{{ asset('images/student/navigation/academic_unselected.svg')}}" width=24 alt="home logo">
                <p>Academic</p>
            </div>
            <div>
                <img src="{{ asset('images/student/navigation/arrow_down.svg')}}" width=24 alt="home logo">
            </div>
        </div>
        <div class="transaction"> 
            <img src="{{ asset('images/student/navigation/communication_unselected.svg')}}" width=24 alt="home logo">
            <p>Communication</p>
        </div>
        <div class="transaction">
            <img src="{{ asset('images/student/navigation/student_services_unselected.svg')}}" width=24 alt="home logo">
            <p>Student Services</p>
        </div>
        <div class="transaction">
            <img src="{{ asset('images/student/navigation/settings_unselected.svg')}}" width=24 alt="home logo">
            
            <p>Settings</p>
        </div>
        <div class="logout-button">
            <img src="{{ asset('images/student/navigation/logout_unselected.svg')}}" width=24 alt="home logo"> 
            <p>Log Out</p>
            <!--Hidden form for logout-->
            <form id="logout-form" action="{{ route('student.logout') }}" method="post">
                @csrf

            </form>
        </div>
    </div>
</div>