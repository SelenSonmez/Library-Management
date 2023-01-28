<body class="fixed-nav sticky-footer " id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:blueviolet" id="mainNav">
        <a class="navbar-brand" href="index.html"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="tables.html">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">Tables</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                        data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Components</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="navbar.html">Navbar</a>
                        </li>
                        <li>
                            <a href="cards.html">Cards</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages"
                        data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-file"></i>
                        <span class="nav-link-text">Example Pages</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                        <li>
                            <a href="login.html">Login Page</a>
                        </li>
                        <li>
                            <a href="register.html">Registration Page</a>
                        </li>
                        <li>
                            <a href="forgot-password.html">Forgot Password Page</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank Page</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</body>
{{-- <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <li class="nav-link " role="presentation">
                        <i class='bx bx-book icon' style="margin-top:20px"></i>
                </span>

                <div class="text logo-text">
                    <span class="name">Welcome!</span>
                    <span class="profession">{{ session('user_type') }}</span>
                </div>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links" role="tablist">
                    @switch(session('user_type'))
                        @case('user')
                            <li class="nav-link " role="presentation">
                                <a href="/user/" class="tab-link">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Library</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/user/borrowed-books" class="tab-link">
                                    <i class='bx bx-bell icon'></i>
                                    <span class="text nav-text">Borrowed Books</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/user/debt" class="tab-link">
                                    <i class='bx bx-money-withdraw icon'></i>
                                    <span class="text nav-text">Total Debt</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/user/debts" class="tab-link">
                                    <i class='bx bx-credit-card icon'></i>
                                    <span class="text nav-text">Debts</span>
                                </a>
                            </li>
                        @break

                        @case('staff')
                            <li class="nav-link">
                                <a href="/authorized/list-books" class="tab-link">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Library</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/authorized/all-borrowed" class="tab-link">
                                    <i class='bx bx-bell icon'></i>
                                    <span class="text nav-text">Borrowed Books</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/authorized/enter-book" class="tab-link">
                                    <i class='bx bx-book icon'></i>
                                    <span class="text nav-text">Enter Book</span>
                                </a>
                            </li>
                        @break

                        @case('admin')
                            <li class="nav-link"role="presentation">
                                <a href="/authorized/list-books" class="tab-link">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Library</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/authorized/all-borrowed"class="tab-link">
                                    <i class='bx bx-bell icon'></i>
                                    <span class="text nav-text">Borrowed Books</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/authorized/enter-book" class="tab-link">
                                    <i class='bx bx-book icon'></i>
                                    <span class="text nav-text">Enter Book</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="/authorized/admin/staff-list" class="tab-link">
                                    <i class='bx bx-face icon'></i>
                                    <span class="text nav-text">List Staff</span>
                                </a>
                            </li>
                        @break
                    @endswitch


                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="/logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>

    </nav> --}}
