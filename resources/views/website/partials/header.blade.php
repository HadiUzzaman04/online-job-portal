<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Job <em>Portal</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Home')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="{{route('jobs.index')}}">Jobs</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('aboutus.index')}}">About Us</a></li>

                <li class="nav-item"><a class="nav-link" href="Events.html">Events</a></li>
                
                <li class="nav-item"><a class="nav-link" href="{{route('contactus.index')}}">Contact Us</a></li>

                 <li class="nav-item"><a class="nav-link" href="{{route('testimonials.index')}}">Testimonials</a></li>

                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                    
                    <div class="dropdown-menu">
                      @if(auth()->user())
                      <a class="dropdown-item" href="{{route('applicant.logout')}}">Applicant Logout</a>
                      @else
                      <a class="dropdown-item" href="{{route('applicant.login')}}">Applicant Login</a>
                      @endif

                      <a class="dropdown-item" href="{{route('company.login')}}">Company</a>
                      <a class="dropdown-item" href="{{route('admin.login')}}">Admin</a>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>