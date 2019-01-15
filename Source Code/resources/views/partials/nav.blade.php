@php
    $categories = \App\ServiceCategory::all();
@endphp
<header>
    <nav class="navbar navbar-toggleable-sm navbar-light fixed-top topmarging" id="header_nav" style="background-color:white;">
        <div class="container widht100">
            <div class="navbar-header">
                <button aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                        data-target="#main-menu" data-toggle="collapse" type="button"></button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img alt="TechMedi" src="{{ asset('assets/img/logo/LogoTekmedi.png') }}"
                         style="padding-bottom: 15px; height: 80px"></a>
            </div>
            <div class="collapse navbar-collapse justify-content-end topnav" id="main-menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="{{ url('/')  }}">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dịch vụ
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level">
                            @foreach($categories as $category)
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($category->services as $service)
                                            <li>
                                                <a href="{{ route('service', $service->id) }}">{{ $service->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('news')  }}">Tin tức</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="contact/contacts.html">Liên hệ</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            <img src="assets/img/icon/vietnam-flag-icon-32.png"></a>
                        <ul class="dropdown-menu" style="min-width:0px;width: 70px;">
                            <li>
                                <a href="#"><img src="assets/img/icon/united-states-of-america-flag-icon-32.png"></a>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
            <ul class="wpb-mobile-menu">
                <li>
                    <a class="active" href="index/index.html">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Our Services</a>
                    <ul>

                        <li>
                            <a>Software Development</a>
                            <ul>
                                <li>
                                    <a href="our-services/web-development.html">Web Application Development</a>
                                </li>
                                <li>
                                    <a href="our-services/customsoftwaredevelopment.html">Custom Software Development
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a>Enterprise Solutions</a>
                            <ul>
                                <li>
                                    <a href="enterprise-solutions/staff-augmentation-services.html">Staff Augmentation
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="enterprise-solutions/dedicated-development-center.html">Dedicated
                                        Development Center
                                    </a>
                                </li>
                                <li>
                                    <a href="enterprise-solutions/business-intelligence.html">Business Intelligence</a>
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
                <li>
                    <a href="blog/blogs.html">Blog</a>
                </li>
                <li>
                    <a href="contact/contacts.html">Contact Us</a>
                </li>
                <!--
                <li>
                    <a href="#"><img src="assets/img/icon/vietnam-flag-icon-32.png"></a>
                <li>
                    <a href="#"><img src="assets/img/icon/united-states-of-america-flag-icon-32.png"></a>
                </li>
                </li>
                -->
            </ul>
        </div>
    </nav>
</header>