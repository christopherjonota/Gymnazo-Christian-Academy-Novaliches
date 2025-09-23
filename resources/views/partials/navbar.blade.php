<nav class="navbar">
    <div class="navbar-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('images/Gymnazo Christian Academy Logo.png') }}" alt="GCA Logo"></a>
        <a href="{{ url('/') }}">GYMNAZO CHRISTIAN ACADEMY</a>
    </div>
    <div class="navbar-links">
        <ul class="navbar-links">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('about') }}">Admissions</a></li>
            <li><a href="{{ route('about') }}">Announcements</a></li>
            <li>
                <div class="services">
                    <a href="{{ route('about') }}">Services</a>
                    <div class="services-content">
                        <a href="{{ route('student')}}">Student Portal</a>
                        <a href="#">Teacher Portal</a>
                        <a href="#">Parent Portal</a>
                        <a href="#">Alumni Portal</a>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('about') }}"><button>Apply Now</button></a></li>
        </ul>
    </div>
</nav>