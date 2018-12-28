<nav class="navbar navbar-toggleable-sm navbar-light fixed-top topmarging" id="header_nav"
     style="background-color:white;">

    <div class="container widht100">
        <div class="navbar-header">
            <button aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler"
                    data-target="#main-menu" data-toggle="collapse" type="button"></button>
            <a class="navbar-brand"
               href="{{ url('/')  }}">
                <img alt="TechMedi" src="{{ asset('assets/img/logo.png')  }}" width="110"
                     height="80"
                     style="padding-bottom: 15px">
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="main-menu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Company <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li>
                            <a class="dropdown-item" href="company/aboutus.html">About Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="company/testimonials.html">Testimonials</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="company/careers.html">Careers</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Our Services <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown">Software Development</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="our-services/web-development.html">Web Application Development</a>
                                </li>
                                <li>
                                    <a href="our-services/customsoftwaredevelopment.html">Custom Software Development
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown">Enterprise Solutions</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item"
                                       href="enterprise-solutions/staff-augmentation-services.html">Staff Augmentation
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                       href="enterprise-solutions/dedicated-development-center.html">Dedicated
                                        Development Center
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="enterprise-solutions/business-intelligence.html">
                                        Business Intelligence
                                    </a>
                                </li>
                                <li>
                                    <a href="enterprise-solutions/custom-software-development.html">Custom Software
                                        Development
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="blog/blogs.html">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="contact/contacts.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><img
                                src="assets/img/icon/vietnam-flag-icon-32.png"></a>
                    <ul class="dropdown-menu" style="min-width:0px;width: 70px;">
                        <li>
                            <a href="#"><img src="assets/img/icon/united-states-of-america-flag-icon-32.png"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>