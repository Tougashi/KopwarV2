	<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="assets/images/kopwar/logo_koperasi.png"  alt="logo icon" width="45">
            </div>
            <div>
                <h4 class="logo-text">INTENS</h4>
            </div>
          
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li class="menu-label">Menu</li>
            <li>
                <a href="/dashboard">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">Fitur</li>
            <li>
                <a href="/simpanan">
                    <div class="parent-icon"><i class='bx bx-wallet'></i>
                    </div>
                    <div class="menu-title">Simpanan</div>
                </a>
            </li>
            <li>
                <a href="/pinjaman">
                    <div class="parent-icon"><i class='bx bx-credit-card'></i>
                    </div>
                    <div class="menu-title">Pinjaman</div>
                </a>
            </li>
            <li>	
                <a href="/angsuran">
                    <div class="parent-icon"><i class='bx bx-transfer-alt'></i>
                    </div>
                    <div class="menu-title">Angsuran</div>
                </a>
            </li>
            
            <li class="menu-label">User Setting</li>
            <li>
                <a href="/profile">
                    <div class="parent-icon"><i class="bx bx-user"></i>
                    </div>
                    <div class="menu-title">User Profile</div>
                </a>
            </li>
            <li>
                <a href="/user-list">
                    <div class="parent-icon"><i class="bx bx-group"></i>
                    </div>
                    <div class="menu-title">User List</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->

    
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>


                {{--  Navbar  --}}
                {{-- @foreach ( $users as $user ) --}}
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/original/profile-icon-design-free-vector.jpg" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">Adryan</p>
                            <p class="designattion mb-0">Admin</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Transaksi</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <div class="logoutbtn">
                        <form action="/logout" method="post" class="ms-4 pt-5">
                            @csrf
                            <button type="submit" style="border: 2px solid rgb(116, 116, 116)"><li><a class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                        </li></button>
                        </form>
                        </div>
                    </ul>
                </div>
                {{-- @endforeach --}}
            </nav>
        </div>
    </header>
    <!--end header -->