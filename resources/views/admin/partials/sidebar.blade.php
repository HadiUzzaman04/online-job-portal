 <!--footer  -->
 <aside class="menu-sidebar d-none d-lg-block">
            <br>
            <br>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard  </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                            </ul>
                        </li>
                        @if(auth()->user()->role=='admin')
                        <li>
                            <a href="{{route('viewCompany')}}">
                                <i class="fas fa-table"></i>Companies </a>
                        </li>
                        <li>
                            <a href="{{route('viewApplicant')}}">
                                <i class="fas fa-table"></i>Applicant </a>
                        </li>

                        <li>
                            <a href="{{route('indexCategory')}}">
                                <i class="fas fa-table"></i>Categories </a>
                        </li>
                        <li>
                            <a href="{{route('index')}}">
                                <i class="fas fa-table"></i>Events </a>
                        </li>
                        <!-- <li>
                            <a href="{{route('testimonials')}}"> 
                                <i class="fas fa-table"></i>Testimonials </a>
                                
                        </li> -->
                        @endif
                        <li>
                            <li>
                                <a href="{{route('jobs')}}">
                                    <i class="fas fa-table"></i>Jobs </a>
                            </li>
                            <li>
                                    <a href="{{route('application')}}">
                                        <i class="fas fa-table"></i>Application </a>
                            </li>
                                    
                                    
                                    <a href="{{route('admin.logout')}}"> 
                                <i class="fas fa-table"></i>Logout </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
 
 
 
 
 
 
 
 