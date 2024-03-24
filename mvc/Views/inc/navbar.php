<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<header class="header-style-two">
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo" style="width: 10%;">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="Logo" style="width: 100%;">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex" id="menu">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="index.php">TRANG CHỦ</a>                                    
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="index.php?action=list_movie">PHIM</a>  
                                    <ul class="sub-menu" id="submenu">
                                        <li><a href="#" class="level1 ">Phim Đang Chiếu</a></li>
                                        <li><a href="#" class="level1 ">Phim Sắp Chiếu</a></li>
                                    </ul>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="index.php?action=list_movie">RẠP CGV</a>  
                                    <ul class="sub-menu" id="submenu">
                                        <li class="nav-1-1 first"><a href="#" class="level1 ">Tất cả các rạp</li>
                                        <li class="nav-1-2 active last"><a href="#" class="level1 ">Rạp đặc biệt</a></li>
                                        <li class="nav-1-3 active last"><a href="#" class="level1 ">Rạp 3D</a></li>
                                    
                                    </ul>

                                    </li>
                                    <li class="menu-item-has-children"><a href="index.php?action=blog">TIN TỨC</a>
                                    </li>
                                    <li><a href="index.php?action=contact">LIÊN HỆ</a></li>
                                    <li><a href="index.php?action=bookingHistory">Vé của tôi</a></li>
                                    
                                </ul>
                            </div>
                        
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="d-none d-xl-block">
                                        <div class="footer-search">
                                            <form action="index.php?action=search" method="post">
                                                <input type="text" name="keysword" placeholder="Tìm kiếm phim...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </li> 
                                    
                                    <!-- <li class="header-btn"><a href="index.php?action=signin" class="btn">ĐĂNG NHẬP</a></li> -->
                                    <li class="header-btn"><a href="mvc/Views/pages/login.php" class="btn">ĐĂNG NHẬP</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .menu-wrap {
        display: flex;
        /* align-items: center; */
        height: 80px;
        /* flex-wrap: nowrap; */
    }

    .menu-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-direction: column;
        /* flex-wrap: nowrap; */
    }

    /* Căn giữa logo */
    .logo {
        flex: 0 0 auto;
    }

    /* Căn giữa menu */
    .navbar-wrap {
        flex: 1;
    }

    /* Căn giữa các phần tử con trong menu */
    .navigation {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }



    /* Định dạng các mục menu */
    .navigation li a {
        color: #f0f0f0;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: color 0.3s ease-in-out;
    }

    /* .navigation li a:hover {
        color: #ff6600;
    } */

    /* Định dạng phần tìm kiếm */
    /* .footer-search {
        flex: 0 0 auto;
    }

    .footer-search input {
        padding: 8px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }

    .footer-search button {
        background-color: #ff6600;
        color: #fff;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
    } */

    /* Định dạng phần user và logout */
    /* .header-btn a {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        margin-right: 15px;
        transition: color 0.3s ease-in-out;
    }

    .header-btn a:hover {
        color: #ff6600;
    } */

    /* .btn {
        background-color: #ff6600;
        color: #fff;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .btn:hover {
        background-color: #333;
        color: #fff;
    } */
    .user-menu {
        list-style: none;
        padding: 0;
        margin: auto 35px;
    }

    .header-btn {
        display: inline-block;
        position: relative;
    }

    .header-btn:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: transparent;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 0px;
        z-index: 2;
    }

    .dropdown-menu li {
        display: block;
        margin: 5px auto;
    }

    .dropdown-menu a {
        display: block;
        padding: 8px 10px;
        text-decoration: none;
        color: #333;
    }

    .dropdown-menu a:hover {
        background-color: #f0f0f0;
    }
</style>