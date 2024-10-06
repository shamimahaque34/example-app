<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:contact@indianpersonnel.com">
                                    <font color="white">contact@indianpersonnel.com</font>
                                </a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91-22-61431234">
                                    <font color="white">+91-22-61431234</font>
                                </a></li>
                            <li><i class="fab fa-whatsapp" aria-hidden="true"></i><a href="https://wa.me/918291999288" target="_blank">
                                    <font color="white">+91-8291999288</font>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="https://www.facebook.com/AmbeRecruitment" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/AmbeInter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/ambe-international" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC9jD5RzJ-E3h4tQFfgyyEiw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://wa.me/918291999288" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="index.html">
                            <img src="{{ asset('/') }}frontend/images/logo12.png" alt="logo" class="img-responsive" style="margin-top: 10px; margin-left: 10px;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right">
                    <div class="main-menu" style="">
                        <nav>


                            <ul class="pull-left">
                                @foreach ($menus as $menu)

                                <li><a href="#">{{ $menu->title }}<i class="fa fa-angle-down"></i></a>
                                    @if ($menu->children->isNotEmpty())
                                    <ul class="sub-menu">
                                        @foreach ($menu->children as $submenu)
                                        <li><a href="jobs-in-india.html">{{ $submenu->title }}</a>
                                            @if ($submenu->children->isNotEmpty())
                                            <ul class="sub-menu">
                                                @foreach ($submenu->children as $subsubmenu)
                                                <li><a href="jobs-in-romania.html">{{ $subsubmenu->title }}</a></li>
                                                @endforeach

                                            </ul>
                                            @endif

                                        </li>
                                        @endforeach


                                            </ul>
                                            @endif
                                        </li>

                                        @endforeach


                                    </ul>



                                {{-- <li><a href="#">EMPLOYERS<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="ambe-international-clients.html">Our Clients </a></li>
                                        <li><a href="#">Services <i class="fa fa-angle-down pull-right" style="margin-top: 10px;"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="bulk-recruitment.html">Bulk Recruitment</a></li>
                                                <li><a href="executive-search.html">Executive Search</a></li>
                                                <li><a href="turnkey-solutions.html">Turnkey Solutions</a></li>
                                                <li><a href="student-recruitment.html">Student recruitment</a></li>
                                                <li><a href="permanent-migration.html">Permanent Migration</a></li>
                                                <li><a href="assessment-and-testing-services.html">Assessment and Testing Services</a></li>
                                                <li><a href="payroll-and-contract-staffing-solutions.html">Payroll and Contract Staffing Solutions</a></li>
                                                <li><a href="training.html">Training</a></li>
                                                <li><a href="salary-survey.html">Salary Survey & Intelligence</a></li>
                                            </ul>
                                        <li><a href="#">Industry Focus <i class="fa fa-angle-down pull-right" style="margin-top: 10px;"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="oil-and-gas.html">Oil & Gas</a></li>
                                                <li><a href="heavy-engineering-and-construction.html">Heavy Engineering & Construction</a></li>
                                                <li><a href="mining-and-resources.html">Mining & Resources</a></li>
                                                <li><a href="information-technology.html">Information Technology</a></li>
                                                <li><a href="healthcare.html">Healthcare</a></li>
                                                <li><a href="hospitality.html">Hospitality</a></li>
                                                <li><a href="beauty-and-wellness.html">Beauty & Wellness</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ambe-recruitment-agency-process.html">Our Recruitment Process</a></li>
                                        <li><a href="#">About Ambe <i class="fa fa-angle-down pull-right" style="margin-top: 10px;"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="about-ambe-recruitment-agency.html">Company Profile </a></li>
                                                <li><a href="ambe-international-recruitment-strengths.html">Our Strengths & Presence </a></li>
                                                <li><a href="ambe-recruitment-agency-corporate-structure.html">Corporate Structure </a></li>
                                                <!--<li><a href="#">Our Presence </a></li>-->
                                                <li><a href="management-team.html">Management Team </a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}

                                <!-- <li><a href="#"> CLIENTS <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="ambe-international-clients.html">Our Clients </a></li>
                                        <li><a href="#">Industry Focus <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="oil-and-gas.html">Oil & Gas</a></li>
                                                <li><a href="heavy-engineering-and-construction.html">Heavy Engineering & Construction</a></li>
                                                <li><a href="mining-and-resources.html">Mining & Resources</a></li>
                                                <li><a href="information-technology.html">Information Technology</a></li>
                                                <li><a href="healthcare.html">Healthcare</a></li>
                                                <li><a href="hospitality.html">Hospitality</a></li>
                                                <li><a href="beauty-and-wellness.html">Beauty & Wellness</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ambe-recruitment-agency-process.html">Our Recruitment Process</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="#">ABOUT US <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-ambe-recruitment-agency.html">Company Profile </a></li>
                                        <li><a href="ambe-international-recruitment-strengths.html">Our Strengths & Presence </a></li>
                                        <li><a href="ambe-recruitment-agency-corporate-structure.html">Corporate Structure </a></li>
                                        <li><a href="#">Our Presence </a></li>
                                        <li><a href="management-team.html">Management Team </a></li>
                                        <li><a href="ambe-international-clients.html">Clients</a></li>
                                    </ul>
                                </li> -->

                            </ul>

                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container acurate">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <!--<li class="active"><a href="index.php">Home </a></li>-->
                                <li><a href="about.html">ABOUT US</a></li>
                                <li><a href="#">CURRENT JOB</a>
                                    <ul class="sub-menu">
                                        <li><a href="Services.html">Jobs in UAE </a></li>
                                        <li><a href="Services2.html">Jobs in Romania</a></li>
                                        <li><a href="Services2.html">Jobs in Saudi Arabia</a></li>
                                        <li><a href="Services2.html">Jobs in Qatar</a></li>
                                        <li><a href="Services2.html">Jobs in Kazakhstan</a></li>
                                        <li><a href="Services2.html">Jobs in Oman</a></li>
                                        <li><a href="Services2.html">Jobs in Kuwait</a></li>
                                        <li><a href="Services2.html">Jobs in Bahrain</a></li>
                                        <li><a href="Services2.html">Jobs in India</a></li>
                                    </ul>
                                </li>
                                <li><a href="Executive-Summary.html">OUR SERVICES</a></li>
                                <li><a href="OUR-Uniqueness.html">OUR CLIENTS</a></li>
                                <li><a href="OUR-Uniqueness.html">US EMIGRATION PROGRAM</a></li>
                                <!--<li><a href="Our-Distribution.php">Our Distribution</a></li>-->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
