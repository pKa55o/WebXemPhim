<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi" />
    <meta content="VN" name="geo.region" />
    <meta name="DC.language" scheme="utf-8" content="vi" />
    <meta name="language" content="Việt Nam">


    <link rel="shortcut icon" href="{{asset('imgs/logo.jpg')}}" type="image/x-icon" />
    <meta name="revisit-after" content="1 days" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>Phim hay 2021 - Xem phim hay nhất</title>
    <meta name="description"
        content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh" />
    <link rel="canonical" href="">
    <link rel="next" href="" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất" />
    <meta property="og:description"
        content="Phim hay 2020 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Phim hay 2021- Xem phim hay nhất" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="55" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel='dns-prefetch' href='//s.w.org' />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <script type='text/javascript' src='js/jquery.min.js?' id='halim-jquery-js'></script>
    <style type="text/css" id="wp-custom-css">
    .textwidget p a img {
        width: 100%;
    }
    </style>
    <style>
    #header .site-title {
        background: url("{{ asset('imgs/logo.jpg') }}") no-repeat top left;
        background-size: contain;
        text-indent: -9999px;
    }
    </style>
</head>

<body class="home blog halimthemes halimmovies" data-masonry="">
    <header id="header">
        <div class="container">
            <div class="row" id="headwrap">
                <div class="col-md-3 col-sm-6 slogan">
                    <p class="site-title"><a class="logo" href="" title="phim hay ">Phim Hay</a></p>
                </div>
                <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                    <div class="header-nav">
                        <div class="col-xs-12">
                            <form id="search-form-pc" name="halimForm" role="search" action="" method="GET">
                                <div class="form-group">
                                    <div class="input-group col-xs-12">
                                        <input id="search" type="text" name="s" class="form-control"
                                            placeholder="Tìm kiếm..." autocomplete="off" required>
                                        <i class="animate-spin hl-spin4 hidden"></i>
                                    </div>
                                </div>
                            </form>
                            <ul class="ui-autocomplete ajax-results hidden"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs">
                    <div id="get-bookmark" class="box-shadow"><i class="hl-bookmark"></i><span> Bookmarks</span><span
                            class="count">0</span></div>
                    <div id="bookmark-list" class="hidden bookmark-list-on-pc">
                        <ul style="margin: 0;"></ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar-container">
        <div class="container">
            <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#halim" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button type="button" class="navbar-toggle collapsed pull-right expand-search-form"
                        data-toggle="collapse" data-target="#search-form" aria-expanded="false">
                        <span class="hl-search" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="navbar-toggle collapsed pull-right get-bookmark-on-mobile">
                        Bookmarks<i class="hl-bookmark" aria-hidden="true"></i>
                        <span class="count">0</span>
                    </button>
                    <button type="button" class="navbar-toggle collapsed pull-right get-locphim-on-mobile">
                        <a href="javascript:;" id="expand-ajax-filter" style="color: #ffed4d;">Lọc <i
                                class="fas fa-filter"></i></a>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="halim">
                    <div class="menu-menu_1-container">
                        <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                            <li class="current-menu-item active"><a title="Trang Chủ" href="{{route('homepage')}}">Trang
                                    Chủ</a>
                            </li>
                            <li class="mega"><a title="Phim Mới" href="{{route('category')}}">Phim Mới</a></li>
                            <li class="mega dropdown">
                                <a title="Năm" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Năm <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Phim 2020" href="danhmuc.php">Phim 2020</a></li>
                                    <li><a title="Năm 2019" href="danhmuc.php">Năm 2019</a></li>
                                    <li><a title="Năm 2018" href="danhmuc.php">Năm 2018</a></li>
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Tâm Lý" href="{{route('genre')}}">Tâm Lý</a></li>
                                    <li><a title="Hành động" href="">Hành động</a></li>
                                    <li><a title="Viễn Tưởng" href="">Viễn Tưởng</a></li>
                                    <li><a title="Hoạt Hình" href="danhmuc.php">Hoạt Hình</a></li>
                                    <li><a title="Kinh Dị" href="danhmuc.php">Kinh Dị</a></li>
                                    <li><a title="Hài Hước" href="danhmuc.php">Hài Hước</a></li>
                                    <li><a title="Hình Sự" href="danhmuc.php">Hình Sự</a></li>
                                    <li><a title="Võ Thuật" href="danhmuc.php">Võ Thuật</a></li>
                                    <li><a title="Cổ Trang" href="danhmuc.php">Cổ Trang</a></li>
                                    <li><a title="Phim Ma" href="danhmuc.php">Phim Ma</a></li>
                                    <li><a title="Tình Cảm" href="danhmuc.php">Tình Cảm</a></li>
                                    <li><a title="Thể Thao - Âm Nhạc" href="danhmuc.php">Thể Thao &#8211; Âm Nhạc</a>
                                    </li>
                                    <li><a title="Thần Thoại" href="danhmuc.php">Thần Thoại</a></li>
                                    <li><a title="Tài Liệu" href="danhmuc.php">Tài Liệu</a></li>
                                    <li><a title="Phiêu Lưu" href="danhmuc.php">Phiêu Lưu</a></li>
                                    <li><a title="Gia Đình" href="danhmuc.php">Gia Đình</a></li>
                                    <li><a title="Chiến Tranh" href="danhmuc.php">Chiến Tranh</a></li>
                                </ul>
                            </li>
                            <li class="mega dropdown">
                                <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                                    aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li><a title="Việt nam" href="{{route('country')}}">Việt nam</a></li>
                                    <li><a title=" Ấn Độ" href="danhmuc.php">Ấn Độ</a></li>
                                    <li><a title="Mỹ" href="danhmuc.php">Mỹ</a></li>
                                    <li><a title="Hồng Kông" href="danhmuc.php">Hồng Kông</a></li>
                                    <li><a title="Nhật Bản" href="danhmuc.php">Nhật Bản</a></li>
                                    <li><a title="Trung Quốc" href="danhmuc.php">Trung Quốc</a></li>
                                    <li><a title="Hàn Quốc" href="danhmuc.php">Hàn Quốc</a></li>
                                    <li><a title="Đài Loan" href="danhmuc.php">Đài Loan</a></li>
                                    <li><a title="Thái Lan" href="danhmuc.php">Thái Lan</a></li>
                                    <li><a title="Philippin" href="danhmuc.php">Philippin</a></li>
                                </ul>
                            </li>
                            <li><a title="Phim Lẻ" href="danhmuc.php">Phim Lẻ</a></li>
                            <li><a title="Phim Bộ" href="danhmuc.php">Phim Bộ</a></li>
                            <li><a title="Phim Chiếu Rạp" href="danhmuc.php">Phim Chiếu Rạp</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="collapse navbar-collapse" id="search-form">
                <div id="mobile-search-form" class="halim-search-form"></div>
            </div>
            <div class="collapse navbar-collapse" id="user-info">
                <div id="mobile-user-login"></div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row fullwith-slider"></div>
        @yield('content')
    </div>

    <div class="clearfix"></div>
    <footer id="footer" class="clearfix">
        <div class="container footer-columns">
            <div class="row container">
                <div class="widget about col-xs-12 col-sm-4 col-md-4">
                    <div class="footer-logo">
                        <img class="img-responsive"
                            src="https://img.favpng.com/9/23/19/movie-logo-png-favpng-nRr1DmYq3SNYSLN8571CHQTEG.jpg"
                            alt="Phim hay 2021- Xem phim hay nhất" />
                    </div>
                    Liên hệ QC: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                        data-cfemail="e5958d8c888d849ccb868aa58288848c89cb868a88">[email&#160;protected]</a>
                </div>
            </div>
        </div>
    </footer>
    <div id='easy-top'></div>

    <script type='text/javascript' src='js/bootstrap.min.js?ver=5.7.2' id='bootstrap-js'></script>
    <script type='text/javascript' src='js/owl.carousel.min.js?ver=5.7.2' id='carousel-js'></script>

    <script type='text/javascript' src='js/halimtheme-core.min.js?ver=1626273138' id='halim-init-js'></script>
    <script>
    // Hàm cập nhật vị trí của phần tử
    function updateFloatElementPosition() {
        const floatElement = document.querySelector('.float-ck');
        if (floatElement) {
            // Lấy các giá trị cần thiết
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop; // Vị trí cuộn trang
            const clientHeight = document.documentElement.clientHeight || window.innerHeight; // Chiều cao cửa sổ
            const marginTop = parseInt(window.getComputedStyle(floatElement).marginTop, 10) || 0; // Margin-top
            const marginBottom = parseInt(window.getComputedStyle(floatElement).marginBottom, 10) || 0; // Margin-bottom

            // Tính toán vị trí top
            const topPosition = scrollTop + clientHeight - floatElement.offsetHeight - marginTop - marginBottom;

            // Cập nhật vị trí top cho phần tử
            floatElement.style.top = `${topPosition}px`;
        }
    }

    // Gắn sự kiện cuộn và thay đổi kích thước cửa sổ
    window.addEventListener('scroll', updateFloatElementPosition);
    window.addEventListener('resize', updateFloatElementPosition);

    // Chạy ngay khi trang được tải
    updateFloatElementPosition();
    </script>




    <style>
    #overlay_mb {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer
    }

    #overlay_mb .overlay_mb_content {
        position: relative;
        height: 100%
    }

    .overlay_mb_block {
        display: inline-block;
        position: relative
    }

    #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center
    }

    #overlay_mb .overlay_mb_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7)
    }

    #overlay_mb img {
        position: relative;
        z-index: 999
    }

    @media only screen and (max-width: 768px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }
    </style>

    <style>
    #overlay_pc {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer;
    }

    #overlay_pc .overlay_pc_content {
        position: relative;
        height: 100%;
    }

    .overlay_pc_block {
        display: inline-block;
        position: relative;
    }

    #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    #overlay_pc .overlay_pc_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7);
    }

    #overlay_pc img {
        position: relative;
        z-index: 999;
    }

    @media only screen and (max-width: 768px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }
    </style>

    <style>
    .float-ck {
        position: fixed;
        bottom: 0px;
        z-index: 9
    }

    .float-ck {
        position: absolute;
        bottom: auto;
        z-index: 9;
    }

    #hide_float_left a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
        float: left;
    }

    #hide_float_left_m a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
    }

    span.bannermobi2 img {
        height: 70px;
        width: 300px;
    }

    #hide_float_right a {
        background: #01AEF0;
        padding: 5px 5px 1px 5px;
        color: #FFF;
        float: left;
    }
    </style>
</body>

</html>