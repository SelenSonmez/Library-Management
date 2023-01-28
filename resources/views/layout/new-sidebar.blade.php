<nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top" id="mainNav">
    <a style="margin-left:14px" class="navbar-brand" href="/welcome"><i class='fa fa-ship'></i>
        <span class="text nav-text">ShipsGo Library</span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav bg-pink" id="exampleAccordion">
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a href="/profile-info" style="margin-left:7%;font-size:25px; background-color:#e3c3fe"><i
                        style="color:white;text-decoration:none" class='fa fa-user'></i>
                    <span class="text nav-text"
                        style="color:white;font-size:x-large;">{{ session('username') }}</span></a>
                <br><br>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a href="/welcome/" class="nav-link">
                    <i class='fa fa-home'></i>
                    <span class="text nav-text">Dashboard</span>
                </a>
                @switch(session('user_type'))
                    @case('user')
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/user/" class="nav-link">
                            <i class='fa fa-book icon'></i>
                            <span class="text nav-text">Library</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/user/borrowed-books" class="nav-link">
                            <i class="fa fa-bookmark"></i>
                            {{-- <i class="fa-duotone fa-bookmark"></i> --}}
                            {{-- <i class='fa-duotone fa-bookmark'></i> --}}
                            <span class="text nav-text">Borrowed Books</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/user/debt" class="nav-link">
                            <i class='fa fa-credit-card'></i>
                            <span class="text nav-text">Total Debt</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/user/debts" class="nav-link">
                            <i class='fa fa-money icon'></i>
                            <span class="text nav-text">Debts</span>
                        </a>
                    </li>
                @break

                @case('staff')
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/list-books" class="nav-link">
                            <i class='fa fa-book icon'></i>
                            <span class="text nav-text">Library</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/all-borrowed" class="nav-link">
                            <i class='fa fa-globe'></i>
                            <span class="text nav-text">All Borrowed Books</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/enter-book" class="nav-link">
                            <i class='fa fa-pencil'></i>
                            <span class="text nav-text">Enter Book</span>
                        </a>
                    </li>
                @break

                @case('admin')
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/list-books" class="nav-link">
                            <i class='fa fa-book icon'></i>
                            <span class="text nav-text">Library</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/all-borrowed" class="nav-link">
                            <i class='fa fa-globe'></i>
                            <span class="text nav-text">All Borrowed Books</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/enter-book" class="nav-link">
                            <i class='fa fa-pencil'></i>
                            <span class="text nav-text">Enter Book</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Library">
                        <a href="/authorized/admin/staff-list" class="nav-link">
                            <i class='fa fa-users'></i>
                            <span class="text nav-text">List Staff</span>
                        </a>
                    </li>
                @break
            @endswitch
        </ul>
        <ul class="navbar-nav sidenav-toggler bg-pink">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        {{-- <input class="form-control" type="text" placeholder="Search for..."> --}}
                        {{-- <span class="input-group-append"> --}}
                        {{-- <button class="btn btn-primary" type="button"> --}}
                        {{-- <i class="fa fa-search"></i> --}}
                        {{-- </button> --}}
                        {{-- </span> --}}
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
